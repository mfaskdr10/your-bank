@extends('base.base')

@section('title', 'Security Page')

@section('content')
    @include('components.navbar')
    <div class="securitypage container">
    </div>
@endsection

@push('script')
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            alert("Welcome to the Home Page!");
        });
    </script> --}}
@endpush
