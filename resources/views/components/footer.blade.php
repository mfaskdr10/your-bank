<footer class="d-flex flex-column">
    <img src="{{ asset('icon/logo.svg') }}" alt="" class="logo">

    <div class="nav-footer d-flex align-items-center">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('careers') }}">Careers</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('security') }}">Security</a>
    </div>

    <hr>

    <div class="info d-flex align-items-center">
        <div class="info-list d-flex align-items-center">
            <img src="{{ asset('./icon/email.svg') }}" alt="">
            <span>hello@skillbirdge.com</span>
        </div>
        <div class="info-list d-flex align-items-center">
            <img src="{{ asset('./icon/telephone.svg') }}" alt="">
            <span>+91 91813 23 2309</span>
        </div>
        <div class="info-list d-flex align-items-center">
            <img src="{{ asset('./icon/email.svg') }}" alt="">
            <span>Somewhere in the World</span>
        </div>
    </div>

    <hr>

    <div class="service d-flex align-items-center">
        <div class="icon">
            <img src="{{ asset('./icon/facebook.svg') }}" alt="">
            <img src="{{ asset('./icon/twitter.svg') }}" alt="">
            <img src="{{ asset('./icon/linkedin.svg') }}" alt="">
        </div>
        <a href="" class="center">YourBank All Rights Reserved</a href="">
        <a href="" class="privacy">Privacy Policy | Terms of Service</a href="">
    </div>
</footer>
