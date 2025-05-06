{{-- <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

<button id="pay-button">Bayar Sekarang</button>

<script>
  document.getElementById('pay-button').addEventListener('click', function () {
    window.snap.pay('{{ $snapToken }}', {
      onSuccess: function(result){
        window.location.href = '/payment-success';
      },
      onPending: function(result){
        alert("Menunggu pembayaran...");
      },
      onError: function(result){
        alert("Pembayaran gagal!");
      },
    });
  });
</script> --}}
