<script src="{{ asset('site/js/jquery.min.js') }}"></script>
<script src="{{ asset('site/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('site/js/popper.min.js') }}"></script>
<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('site/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('site/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('site/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('site/js/aos.js') }}"></script>
<script src="{{ asset('site/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('site/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('site/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('site/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('site/js/google-map.js') }}"></script>
<script src="{{ asset('site/js/main.js') }}"></script>

<script type="text/javascript">
    // Whatsapp iletişim butonu
    (function () {
        var options = {
            whatsapp: "905384323081", // WhatsApp numarası
            call_to_action: "Merhaba, nasıl yardımcı olabilirim?", // Görüntülenecek yazı
            position: "left", // Sağ taraf için 'right' sol taraf için 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>

<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if (session('success'))

    Swal.fire({
        title: 'Başarılı',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'Tamam'
    });
    @endif

    @if (session('error'))

    Swal.fire({
        title: 'Hata',
        text: '{{ session('error') }}',
        icon: 'error',
        confirmButtonText: 'Tamam'
    });
    @endif

</script>

{{--<script src="//code.jivosite.com/widget/L3RjPcEkLy" async></script>--}}

