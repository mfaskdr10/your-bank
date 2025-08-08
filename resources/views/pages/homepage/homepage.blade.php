@extends('base.base')

@section('title', 'Home Page')

@section('content')
    @include('components.navbar')
    <section class="homepage container">
        {{-- Hero Section --}}
        @include('pages.homepage.hero')

        {{-- Product Section --}}
        @include('pages.homepage.product')

        {{-- UseCase Section --}}
        @include('pages.homepage.usecase')

        {{-- Features Section --}}
        @include('pages.homepage.features')

        {{-- FAQ
        @include('components.faqsection.faq') --}}

        {{-- Testimonial Section --}}
        @include('components.testimonial')

        {{-- Start Financial --}}
        @include('pages.homepage.start-financial')

    </section>
@endsection

@push('script')
    <script>
        // Hero
        const swiper = new Swiper(".transaction-slider", {
            direction: "vertical", // Arah slider vertikal
            slidesPerView: 2, // Menampilkan 3 slide sekaligus
            spaceBetween: 15, // Jarak antar slide
            loop: true, // Slider akan berulang
            grabCursor: true, // Menampilkan kursor grab
        });

        const swiperTesti = new Swiper('.testimonial-slider', {
            // Konfigurasi Swiper
            direction: "horizontal",
            slidesPerView: 3, // Menampilkan 3 slide sekaligus
            spaceBetween: 15, // Jarak antar slide
            loop: true, // Slider akan berulang
            grabCursor: true, // Menampilkan kursor grab
            centeredSlides: true,
            speed: 800, // Mengatur kecepatan transisi menjadi 800ms agar lebih halus
            loopedSlides: 5,

            // Mengaktifkan tombol navigasi
            navigation: {
                prevEl: '.swiper-button-prev',
                nextEl: '.swiper-button-next',
            },

            // Konfigurasi responsif untuk ukuran layar yang berbeda
            breakpoints: {
                // Untuk tablet (lebar layar 768px atau lebih)
                768: {
                    slidesPerView: 2, // Tampilkan 2 slide
                    spaceBetween: 30
                },
                // Untuk desktop (lebar layar 1200px atau lebih, sesuai container-xl)
                1200: {
                    slidesPerView: 3, // Tampilkan 3 slide
                    spaceBetween: 30
                }
            },

            // Opsi aksesibilitas untuk pembaca layar
            // a11y: {
            //     prevSlideMessage: 'Slide sebelumnya',
            //     nextSlideMessage: 'Slide berikutnya',
            // },
        });
    </script>
@endpush
