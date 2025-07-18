@include('layoutsbootstrap/header')

  <section id="wishlist" class="wishlist product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-4">
            <h4 class="text-uppercase m-0">Our wishlists</h4>
            <div class="d-flex align-items-center">
                <div class="swiper-nav-buttons d-flex">
                    <div class="swiper-nav-button wishlist-prev me-2">
                        <svg width="24" height="24"><use xlink:href="#arrow-left"></use></svg>
                    </div>
                    <div class="swiper-nav-button wishlist-next">
                        <svg width="24" height="24"><use xlink:href="#arrow-right"></use></svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper wishlist-swiper open-up" data-aos="zoom-out">
            {{-- Ganti bagian swiper-wrapper Anda dengan ini --}}
<div class="swiper-wrapper d-flex">
    {{-- Loop menggunakan variabel baru $wishlistItems --}}
    @foreach ($wishlistItems as $item)
    <div class="swiper-slide">
        <div class="product-item image-zoom-effect link-effect">
            <div class="image-holder position-relative">
                <a href="#">
                    {{-- Akses data produk melalui relasi: $item->product --}}
                    <img src="{{ asset($item->product->image) }}" alt="product-item" class="product-image img-fluid">
                </a>
                <a href="#" 
                   class="btn-icon btn-wishlist active" {{-- Tambahkan kelas 'active' karena ini halaman wishlist --}}
                   data-product-id="{{ $item->product->id }}">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#heart"></use>
                    </svg>
                </a>
                <div class="product-content">
                    <h5 class="element-title text-uppercase fs-5 mt-3">
                        <a href="#">{{ $item->product->name }}</a>
                    </h5>
                    <a href="#" class="text-decoration-none" data-after="Add to cart">
                        <span>Rp {{ number_format($item->product->price, 0, ',', '.') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

@include('layoutsbootstrap/footer')


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

{{-- SCRIPT UTAMA ANDA --}}
<script>
document.addEventListener("DOMContentLoaded", function() {

    // ==========================================================
    // BAGIAN 1: LOGIKA UNTUK TOMBOL WISHLIST (DENGAN PERBAIKAN)
    // ==========================================================
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const wishlistCounter = document.getElementById('wishlist-counter');

    document.querySelectorAll('.btn-wishlist').forEach(button => {
        button.addEventListener('click', function(event) {
            // Mencegah link berpindah halaman
            event.preventDefault();
            // MENCEGAH EFEK ZOOM SAAT KLIK HATI
            event.stopPropagation(); 

            @guest
                window.location.href = "{{ route('login') }}";
                return;
            @endguest

            let productId = this.dataset.productId;
            let url = "{{ route('wishlist.add') }}";

            fetch(url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
                body: JSON.stringify({ product_id: productId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'added') {
                    this.classList.add('active');
                } else {
                    this.classList.remove('active');
                }
                if (wishlistCounter) {
                    wishlistCounter.textContent = `(${data.count})`;
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });


    // ==========================================================
    // BAGIAN 2: INISIALISASI UNTUK SEMUA SLIDER
    // ==========================================================
    if (typeof Swiper !== 'undefined') {

        // Inisialisasi slider "New Arrivals"
        const newArrivalSwiper = new Swiper(".product-swiper-new", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: false,
            navigation: {
                nextEl: ".new-arrival-next",
                prevEl: ".new-arrival-prev",
            },
            pagination: {
                el: ".swiper-pagination-new",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
                1200: { slidesPerView: 4 },
            }
        });

        const mainSwiper = new Swiper(".main-swiper", {
    slidesPerView: 1, // Tampilan awal untuk mobile
    spaceBetween: 20,
    loop: false, // Set 'true' jika ingin loop tak terbatas
    
    // Tentukan elemen navigasi
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    // Tentukan elemen pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    
    // Atur tampilan untuk layar yang lebih besar (breakpoints)
    breakpoints: {
        // ketika lebar layar >= 768px
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // ketika lebar layar >= 992px
        992: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});


        // Inisialisasi slider "Best Sellers"
        const bestSellerSwiper = new Swiper(".product-swiper-best", {
            slidesPerView: 4,
            spaceBetween: 20,
            loop: false,
            navigation: {
                nextEl: ".best-seller-next",
                prevEl: ".best-seller-prev",
            },
            pagination: {
                el: ".swiper-pagination-best",
                clickable: true,
            },
            breakpoints: {
                0: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 },
                1200: { slidesPerView: 4 },
            }
        });

        // Inisialisasi slider "Wishlist"
const wishlistSwiper = new Swiper(".wishlist-swiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: false,
    navigation: {
        nextEl: ".wishlist-next",  // ⬅️ Sesuaikan dengan nama tombol di HTML
        prevEl: ".wishlist-prev",  // ⬅️ Sesuaikan dengan nama tombol di HTML
    },
    pagination: {
        el: ".swiper-pagination", // Pagination yang ada di HTML Anda
        clickable: true,
    },
    breakpoints: {
        0: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        992: { slidesPerView: 3 },
        1200: { slidesPerView: 4 },
    }
});
    }

});
</script>
</body>

</html>