@extends('base.base')

@section('title', 'Home Page')

@section('content')
    @include('components.navbar')
    <section class="homepage container">
        {{-- Hero Section --}}
        @include('pages.homepage.hero')

        {{-- Product Section --}}
        @include('pages.homepage.product')
    </section>
@endsection

@push('script')
    <script>
        const swiper = new Swiper(".mySwiper", {
            direction: "vertical", // Arah slider vertikal
            slidesPerView: 2, // Menampilkan 3 slide sekaligus
            spaceBetween: 15, // Jarak antar slide
            loop: true, // Slider akan berulang
            grabCursor: true, // Menampilkan kursor grab
        });
    </script>
@endpush
