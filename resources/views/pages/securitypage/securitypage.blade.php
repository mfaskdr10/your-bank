@extends('base.base')

@section('title', 'Security Page')

@section('content')
    @include('components.navbar')
    <div class="securitypage container">
        {{-- Hero --}}
        @include('pages.securitypage.hero')

        {{-- Protect --}}
        @include('pages.securitypage.protect')

        {{-- Testimonial --}}
        @include('components.faq')
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
