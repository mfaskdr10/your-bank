@extends('base.base')

@section('title', 'Careers Page')

@section('content')
    @include('components.navbar')
    <div class="careerspage container">
        @include('pages.careerspage.hero')
        @include('pages.careerspage.values')
        @include('pages.careerspage.benefits')
        @include('pages.careerspage.job')
    </div>
@endsection

@push('script')
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            alert("Welcome to the Home Page!");
        });
    </script> --}}
@endpush
