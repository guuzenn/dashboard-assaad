<?php

namespace App\Http\Controllers;

use App\Models\cicilan;
use App\Models\RiwayatPembayaran;
use App\Models\TagihanPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

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


    // public function bayar($id)
    // {
    //     $riwayat = RiwayatPembayaran::with('tagihan')->findOrFail($id);

    //     \Midtrans\Config::$serverKey = config('midtrans.serverKey');
    //     // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //     \Midtrans\Config::$isProduction = false;
    //     // Set sanitization on (default)
    //     \Midtrans\Config::$isSanitized = true;
    //     // Set 3DS transaction for credit card to true
    //     \Midtrans\Config::$is3ds = true;

    //     $orderId = 'ORD-' . time();

    //     $params = [
    //         'transaction_details' => [
    //             'order_id' => $orderId,
    //             'gross_amount' => $riwayat->tagihan->nominal,
    //         ],
    //         'customer_details' => [
    //             // 'first_name' => $riwayat->siswa->nama_lengkap,
    //             'first_name' => Auth::user()->name   ,
    //             'email' => Auth::user()->email,
    //         ]
    //     ];

    //     $snapToken = \Midtrans\Snap::getSnapToken($params);

    //     $riwayat->update([
    //         'midtrans_order_id' =>  $orderId,
    //     ]);

    //     return view('student.pembayaran.bayar', compact('snapToken', 'riwayat'));
    // }

    // public function callback(Request $request)
    // {

    //     $serverKey = config('midtrans.serverKey');
    //     $signature = hash('sha512',
    //         $request->order_id .
    //         $request->status_code .
    //         $request->gross_amount .
    //         $serverKey
    // );

    // if ($signature !== $request->signature_key) {
    //     return response(['message' => 'Invalid signature'], 403);
    // }


    // $pembayaran = RiwayatPembayaran::where('midtrans_order_id', $request->order_id)->first();

    // if (!$pembayaran) {
    //     return response(['message' => 'Pembayaran tidak ditemukan'], 404);
    // }

    // $status = $request->transaction_status;
    // $metode = $request->payment_type;
    // $tanggalBayar = $request->settlement_time ?? now();

    // if ($status === 'settlement') {
    //     $pembayaran->update([
    //         'status' => 'Lunas',
    //         'metode' => $metode,
    //         'tanggal_bayar' => \Carbon\Carbon::parse($tanggalBayar)
    //     ]);
    // } elseif ($status === 'pending') {
    //     $pembayaran->update(['status' => 'Pending']);
    // } elseif (in_array($status, ['cancel', 'expire'])) {
    //     $pembayaran->update(['status' => 'Failed']);
    // }

    // return response()->json(['message' => 'Callback sukses']);

    // }
    public function bayarCicilan($cicilanId)
    {
        $cicilan = cicilan::with('riwayat.tagihan')->findOrFail($cicilanId);
        $riwayat = $cicilan->riwayat;

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $orderId = 'ORD-CICIL-' . time();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $cicilan->nominal,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ]
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $cicilan->update([
            'midtrans_order_id' => $orderId,
        ]);

        return view('student.pembayaran.bayar_cicilan', compact('snapToken', 'cicilan'));
    }


    public function bayarPenuh($id)
    {
        $riwayat = RiwayatPembayaran::with('tagihan')->findOrFail($id);

        if ($riwayat->status == 'Cicilan') {
            return back()->with('error', 'Tagihan ini sedang dicicil, tidak bisa dibayar penuh.');
        }

        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $orderId = 'ORD-FULL-' . time();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $riwayat->tagihan->nominal,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
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
        $hashed = hash('sha512',
            $request->order_id .
            $request->status_code .
            $request->gross_amount .
            $serverKey
        );

        if ($hashed !== $request->signature_key) {
            return response()->json(['message' => 'Invalid signature'], 403);
        }

        $orderId = $request->order_id;
        $status = $request->transaction_status;
        $metode = $request->payment_type;
        $tanggalBayar = $request->settlement_time ?? now();

        if (Str::startsWith($orderId, 'ORD-FULL-')) {
            // 🔵 PEMBAYARAN PENUH
            $riwayat = \App\Models\RiwayatPembayaran::where('midtrans_order_id', $orderId)->first();

            if ($status === 'settlement') {
                $riwayat->update([
                    'status' => 'Lunas',
                    'metode' => $metode,
                    'tanggal_bayar' => \Carbon\Carbon::parse($tanggalBayar)
            ]);

            }
        } elseif (Str::startsWith($orderId, 'ORD-CICIL-')) {
            // 🟢 PEMBAYARAN CICILAN
            $cicilan = \App\Models\Cicilan::where('midtrans_order_id', $orderId)->first();

            if ($status === 'settlement') {
                $cicilan->update([
                    'status' => 'Lunas',
                    'metode' => $metode,
                    'tanggal_bayar' => \Carbon\Carbon::parse($tanggalBayar)
                ]);

                // Cek semua cicilan pada riwayat terkait
                $riwayat = $cicilan->riwayat;
                $semuaLunas = $riwayat->cicilan()->where('status', '!=', 'Lunas')->count() === 0;

                if ($semuaLunas) {
                    $riwayat->update(['status' => 'Lunas']);
                } else {
                    $riwayat->update(['status' => 'Cicilan']);
                }
            }
        }

        return response()->json(['message' => 'Callback handled']);
    }


    // public function callback(Request $request)
    // {

    //     $transaction = $request->transaction_status;
    //     $orderId = $request->order_id;
    //     $metode = $request->payment_type;
    //     $tanggalBayar = $request->settlement_time ?? now();

    //     // Cari riwayat pembayaran berdasarkan order_id
    //     $riwayat = RiwayatPembayaran::where('midtrans_order_id', $orderId)->with('cicilan')->first();

    //     if (!$riwayat) {
    //         return response()->json(['message' => 'Order ID not found'], 404);
    //     }


    //     // Contoh: update status berdasarkan transaction status
    //     if ($transaction === 'capture' || $transaction === 'settlement') {

    //         // Cek apakah tagihan punya cicilan
    //         if ($riwayat->cicilan->isEmpty()) {
    //             // Tanpa cicilan → update langsung status ke "Lunas"
    //             $riwayat->status = 'Lunas';
    //             $riwayat->tanggal_bayar = $tanggalBayar;
    //             $riwayat->metode = $metode;
    //             $riwayat->save();
    //         } else {
    //             // Dengan cicilan → cari cicilan yang belum lunas, dan tandai yang pertama
    //             $belumLunas = $riwayat->cicilan->where('status', '!=', 'Lunas')->sortBy('tanggal_tempo')->first();

    //             if ($belumLunas) {
    //                 $belumLunas->status = 'Lunas';
    //                 $belumLunas->save();
    //             }

    //             // Optional: cek kalau semua cicilan lunas, update status tagihan atau riwayat
    //             $semuaLunas = $riwayat->cicilan->every(function ($c) {
    //                 return $c->status === 'Lunas';
    //             });

    //             if ($semuaLunas) {
    //                 $riwayat->status = 'Lunas';
    //                 $riwayat->save();
    //             }
    //         }

    //         return response()->json(['message' => 'Pembayaran berhasil diproses']);
    //     }

    //     // Jika pembayaran gagal / expired / cancel
    //     if (in_array($transaction, ['cancel', 'expire', 'deny'])) {
    //         $riwayat->status = 'Gagal';
    //         $riwayat->save();

    //         return response()->json(['message' => 'Pembayaran gagal atau dibatalkan']);
    //     }

    //     return response()->json(['message' => 'Notifikasi diterima']);
    // }

}