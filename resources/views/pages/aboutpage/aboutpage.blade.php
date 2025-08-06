@extends('base.base')

@section('title', 'About Page')

@section('content')
    @include('components.navbar')
    <div class="aboutpage container">
    </div>
@endsection

@push('script')
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            alert("Welcome to the Home Page!");
        });
    </script> --}}
@endpush
