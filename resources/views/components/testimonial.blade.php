<div class="testimonial">
    <x-header-section title="Our" highlight="Testimonials"
        description="Discover a range of comprehensive and customizable banking products at YourBank, designed to suit your unique financial needs and aspirations"
        :showTabs="true" tabId="testimonialTabs">

        <x-slot name="individualContent">
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="text-center p-4 d-flex flex-column align-items-center h-100">
                            <!-- Tanda Kutip dan Garis -->
                            <div class="position-relative w-100 d-flex justify-content-center align-items-center mb-4">
                                <div class="dashed-line start-0"></div>
                                <img src="{{ asset('icon/quote.svg') }}" alt="">
                                <div class="dashed-line end-0"></div>
                            </div>
                            <!-- Konten Testimoni -->
                            <p class="text-light mb-4 lh-lg flex-grow-1">
                                YourBank has been my trusted financial partner for years. Their personalized service and
                                innovative digital banking solutions have made managing my finances a breeze.
                            </p>
                            <!-- Nama Penulis -->
                            <span class="fw-semibold author-name">Sara T</span>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="text-center p-4 d-flex flex-column align-items-center h-100">
                            <div class="position-relative w-100 d-flex justify-content-center align-items-center mb-4">
                                <div class="dashed-line start-0"></div>
                                <img src="{{ asset('icon/quote.svg') }}" alt="">
                                <div class="dashed-line end-0"></div>
                            </div>
                            <p class="text-light mb-4 lh-lg flex-grow-1">
                                I recently started my own business, and YourBank has been instrumental in helping me set
                                up my business accounts and secure the financing I needed. Their expert guidance and
                                tailored solutions have been invaluable.
                            </p>
                            <span class="fw-semibold author-name">John D</span>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="text-center p-4 d-flex flex-column align-items-center h-100">
                            <div class="position-relative w-100 d-flex justify-content-center align-items-center mb-4">
                                <div class="dashed-line start-0"></div>
                                <img src="{{ asset('icon/quote.svg') }}" alt="">
                                <div class="dashed-line end-0"></div>
                            </div>
                            <p class="text-light mb-4 lh-lg flex-grow-1">
                                I love the convenience of YourBank's mobile banking app. It allows me to stay on top of
                                my finances and make transactions on the go. The app is user-friendly and secure, giving
                                me peace of mind.
                            </p>
                            <span class="fw-semibold author-name">Emily G</span>
                        </div>
                    </div>

                    <!-- Slide 4 (Contoh Tambahan) -->
                    <div class="swiper-slide">
                        <div class="text-center p-4 d-flex flex-column align-items-center h-100">
                            <div class="position-relative w-100 d-flex justify-content-center align-items-center mb-4">
                                <div class="dashed-line start-0"></div>
                                <img src="{{ asset('icon/quote.svg') }}" alt="">
                                <div class="dashed-line end-0"></div>
                            </div>
                            <p class="text-light mb-4 lh-lg flex-grow-1">
                                The customer service is outstanding. Every time I call, they are helpful and resolve my
                                issues quickly. Highly recommended for anyone looking for a reliable bank.
                            </p>
                            <span class="fw-semibold author-name">Mark P</span>
                        </div>
                    </div>
                </div>
                <!-- Tombol Navigasi (Panah) -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </x-slot>

        <x-slot name="businessContent">
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="text-center p-4 d-flex flex-column align-items-center h-100">
                            <!-- Tanda Kutip dan Garis -->
                            <div class="position-relative w-100 d-flex justify-content-center align-items-center mb-4">
                                <div class="dashed-line start-0"></div>
                                <img src="{{ asset('icon/quote.svg') }}" alt="">
                                <div class="dashed-line end-0"></div>
                            </div>
                            <!-- Konten Testimoni -->
                            <p class="text-light mb-4 lh-lg flex-grow-1">
                                YourBank has been my trusted financial partner for years. Their personalized service and
                                innovative digital banking solutions have made managing my finances a breeze.
                            </p>
                            <!-- Nama Penulis -->
                            <span class="fw-semibold author-name">Sara T</span>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="text-center p-4 d-flex flex-column align-items-center h-100">
                            <div class="position-relative w-100 d-flex justify-content-center align-items-center mb-4">
                                <div class="dashed-line start-0"></div>
                                <img src="{{ asset('icon/quote.svg') }}" alt="">
                                <div class="dashed-line end-0"></div>
                            </div>
                            <p class="text-light mb-4 lh-lg flex-grow-1">
                                I recently started my own business, and YourBank has been instrumental in helping me set
                                up my business accounts and secure the financing I needed. Their expert guidance and
                                tailored solutions have been invaluable.
                            </p>
                            <span class="fw-semibold author-name">John D</span>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="text-center p-4 d-flex flex-column align-items-center h-100">
                            <div class="position-relative w-100 d-flex justify-content-center align-items-center mb-4">
                                <div class="dashed-line start-0"></div>
                                <img src="{{ asset('icon/quote.svg') }}" alt="">
                                <div class="dashed-line end-0"></div>
                            </div>
                            <p class="text-light mb-4 lh-lg flex-grow-1">
                                I love the convenience of YourBank's mobile banking app. It allows me to stay on top of
                                my finances and make transactions on the go. The app is user-friendly and secure, giving
                                me peace of mind.
                            </p>
                            <span class="fw-semibold author-name">Emily G</span>
                        </div>
                    </div>

                    <!-- Slide 4 (Contoh Tambahan) -->
                    <div class="swiper-slide">
                        <div class="text-center p-4 d-flex flex-column align-items-center h-100">
                            <div class="position-relative w-100 d-flex justify-content-center align-items-center mb-4">
                                <div class="dashed-line start-0"></div>
                                <img src="{{ asset('icon/quote.svg') }}" alt="">
                                <div class="dashed-line end-0"></div>
                            </div>
                            <p class="text-light mb-4 lh-lg flex-grow-1">
                                The customer service is outstanding. Every time I call, they are helpful and resolve my
                                issues quickly. Highly recommended for anyone looking for a reliable bank.
                            </p>
                            <span class="fw-semibold author-name">Mark P</span>
                        </div>
                    </div>
                </div>
                <!-- Tombol Navigasi (Panah) -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </x-slot>
    </x-header-section>
</div>
