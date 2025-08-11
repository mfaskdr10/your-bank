@extends('base.base')

@section('title', 'About Page')

@section('content')
    @include('components.navbar')
    <div class="aboutpage container">
        {{-- Hero Section --}}
        @include('pages.aboutpage.hero')
        @include('pages.aboutpage.vm')
        @include('pages.aboutpage.releases')
    </div>
    @include('components.footer')
@endsection

@push('script')
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            alert("Welcome to the Home Page!");
        });
    </script> --}}
@endpush
