@extends('base.base')

@section('title', 'Careers Page')

@section('content')
    @include('components.navbar')
    <div class="careerspage container">
        @include('pages.careerspage.hero')
        @include('pages.careerspage.values')
        @include('pages.careerspage.benefits')
        @include('pages.careerspage.job')
        @include('components.faq')
        @include('pages.careerspage.start')
    </div>
    @include('components.footer')
@endsection

@push('script')
@endpush
