@extends('base.base')

@section('title', 'Careers Page')

@section('content')
    @include('components.navbar')
    <div class="careerspage container">
    </div>
@endsection

@push('script')
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            alert("Welcome to the Home Page!");
        });
    </script> --}}
@endpush
