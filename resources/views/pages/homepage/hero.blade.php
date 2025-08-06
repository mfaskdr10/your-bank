<section class="hero d-flex">
    <div class="left">
        <div class="info">
            <img src="{{ asset('icon/subtract.svg') }}" alt="">
            <span>No LLC Required, No Credit Check.</span>
        </div>
        <h1 class="title">
            Welcome to YourBank
            Empowering Your <span>Financial Journey</span>
        </h1>
        <p class="desc">
            At YourBank, our mission is to provide comprehensive banking solutions that empower individuals
            and businesses to achieve their financial goals. We are committed to delivering personalized and innovative
            services that prioritize our customers' needs.
        </p>
        <a href="#" class="btn custom-btn-login">Open Account</a>
    </div>
    <div class="right">
        <img src="{{ asset('images/arrow-design.svg') }}" alt="" class="arrow-design">
        <div class="trans-exch">
            <div class="top">
                <p>Your Transaction</p>
                <div class="transaction-slider-container">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="transaction-item">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-wrapper">
                                            <img src="{{ asset('icon/transaction.svg') }}" alt="">
                                        </div>
                                        <div class="transaction-details">
                                            <p class="type">Transaction</p>
                                            <p class="name">Joel Kenley</p>
                                        </div>
                                    </div>
                                    <div class="transaction-amount">
                                        -$68.00
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="transaction-item">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-wrapper">
                                            <img src="{{ asset('icon/transaction.svg') }}" alt="">
                                        </div>
                                        <div class="transaction-details">
                                            <p class="type">Transaction</p>
                                            <p class="name">Mark Smith</p>
                                        </div>
                                    </div>
                                    <div class="transaction-amount">
                                        -$68.00
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="transaction-item">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-wrapper">
                                            <img src="{{ asset('icon/transaction.svg') }}" alt="">
                                        </div>
                                        <div class="transaction-details">
                                            <p class="type">Transaction</p>
                                            <p class="name">Lenen Roy</p>
                                        </div>
                                    </div>
                                    <div class="transaction-amount">
                                        -$68.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <p class="title">Money Exchange</p>
                <table class="table table-bordered">
                    <tr>
                        <td class="country">
                            <img src="{{ asset('icon/inr.svg') }}" alt="">
                            <span>INR</span>
                            <p class="name">Indian Rupees</p>
                        </td>
                        <td class="country">
                            <img src="{{ asset('icon/usd.svg') }}" alt="">
                            <span>USD</span>
                            <p class="name">United States Dollar</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="amount">
                            <p>12,000</p>
                        </td>
                        <td class="amount">
                            <p>12,000</p>
                        </td>
                    </tr>
                </table>
                <button class="btn w-100 custom-btn">Exchange</button>
            </div>
        </div>
    </div>
</section>
