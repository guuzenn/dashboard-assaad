<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPembayaran;
use App\Models\TagihanPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class StudentPembayaranController extends Controller
{
    // public function index()
    // {
    //     $siswa = Auth::user()->siswa;
    //     $tagihan = RiwayatPembayaran::with('tagihan')->where('siswa_id', $siswa->id)->get();
    //     return view('student.pembayaran.index', compact('tagihan'));
    // }

    public function index()
{
    $siswa = Auth::user()->siswa;

    $tagihan = RiwayatPembayaran::with(['tagihan', 'cicilan']) // tambahkan relasi cicilan
        ->where('siswa_id', $siswa->id)
        ->get();

    return view('student.pembayaran.index', compact('tagihan'));
}


    public function bayar($id)
    {
        $riwayat = RiwayatPembayaran::with('tagihan')->findOrFail($id);

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $orderId = 'ORD-' . time();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $riwayat->tagihan->nominal,
            ],
            'customer_details' => [
                // 'first_name' => $riwayat->siswa->nama_lengkap,
                'first_name' => Auth::user()->name   ,
                'email' => Auth::user()->email,
            ]
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $riwayat->update([
            'midtrans_order_id' =>  $orderId,
        ]);

        return view('student.pembayaran.bayar', compact('snapToken', 'riwayat'));
    }

    public function callback(Request $request)
    {

        $serverKey = config('midtrans.serverKey');
        $signature = hash('sha512',
            $request->order_id .
            $request->status_code .
            $request->gross_amount .
            $serverKey
    );

    if ($signature !== $request->signature_key) {
        return response(['message' => 'Invalid signature'], 403);
    }


    $pembayaran = RiwayatPembayaran::where('midtrans_order_id', $request->order_id)->first();

    if (!$pembayaran) {
        return response(['message' => 'Pembayaran tidak ditemukan'], 404);
    }

    $status = $request->transaction_status;
    $metode = $request->payment_type;
    $tanggalBayar = $request->settlement_time ?? now();

    if ($status === 'settlement') {
        $pembayaran->update([
            'status' => 'Lunas',
            'metode' => $metode,
            'tanggal_bayar' => \Carbon\Carbon::parse($tanggalBayar)
        ]);
    } elseif ($status === 'pending') {
        $pembayaran->update(['status' => 'Pending']);
    } elseif (in_array($status, ['cancel', 'expire'])) {
        $pembayaran->update(['status' => 'Failed']);
    }

    return response()->json(['message' => 'Callback sukses']);

    }
}
