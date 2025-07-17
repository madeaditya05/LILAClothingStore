{{-- File: resources/views/layouts/app.blade.php --}}

{{-- Ambil semua kode dari file header.blade.php Anda --}}
<!DOCTYPE html>
<html lang="en">
<head>
    {{-- ... semua kode <head> dari header Anda ... --}}
</head>
<body class="homepage">
    @include('layoutsbootstrap.header') {{-- Cukup include bagian <nav> saja jika header.blade.php berisi seluruh tag html --}}

    <main>
        @yield('content') {{-- Di sinilah konten halaman akan disisipkan --}}
    </main>

    @include('layoutsbootstrap.footer')

    
  {{-- JS Lokal (pastikan semua file ini ada di public/assets/js/) --}}
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/js/script.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

{{-- JS dari CDN --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>

</html>