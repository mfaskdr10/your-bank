<section class="features">
    <x-header-section title="Our" highlight="Features"
        description="Experience a host of powerful features at YourBank, including seamless online banking, secure transactions, and personalized financial insights, all designed to enhance your banking experience"
        :showTabs="false">
    </x-header-section>

    <div class="d-flex align-items-start features-button">
        <ul class="nav flex-column nav-pills" id="features-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="features-booking-tab" data-bs-toggle="pill"
                    data-bs-target="#features-booking" type="button" role="tab" aria-selected="true">
                    Online Booking
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="features-financial-tab" data-bs-toggle="pill"
                    data-bs-target="#features-financial" type="button" role="tab" aria-selected="false">
                    Financial Tools
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="features-customer-tab" data-bs-toggle="pill"
                    data-bs-target="#features-support" type="button" role="tab" aria-selected="false">
                    Customer Support
                </button>
            </li>
        </ul>

        <div class="tab-content" id="features-tab">
            <div class="tab-pane fade show active" id="features-booking" role="tabpanel">
                <div class="features-cards">
                    @include('components.homepage.features-card', [
                        'title' => '24/7 Account Access',
                        'desc' =>
                            'Enjoy the convenience of accessing your accounts anytime, anywhere through our secure online banking platform. Check balances, transfer funds, and pay bills with ease.',
                    ])
                    @include('components.homepage.features-card', [
                        'title' => 'Mobile Banking App',
                        'desc' =>
                            'Stay connected to your finances on the go with our user-friendly mobile banking app. Easily manage your accounts, deposit checks, and make payments from your smartphone or tablet.',
                    ])
                    @include('components.homepage.features-card', [
                        'title' => 'Secure Transactions',
                        'desc' =>
                            'Rest assured knowing that your transactions are protected by industry-leading security measures. We employ encryption and multi-factor authentication to safeguard your financial information.',
                    ])
                    @include('components.homepage.features-card', [
                        'title' => 'Bill Pay and Transfers',
                        'desc' =>
                            'Save time and avoid late fees with our convenient bill pay service. Set up recurring payments or make one-time transfers between your accounts with just a few clicks.',
                    ])
                </div>
            </div>
            <div class="tab-pane fade" id="features-financial" role="tabpanel">
                <div class="features-cards">
                    @include('components.homepage.features-card', [
                        'title' => '24/7 Account Access',
                        'desc' =>
                            'Enjoy the convenience of accessing your accounts anytime, anywhere through our secure online banking platform. Check balances, transfer funds, and pay bills with ease.',
                    ])
                    @include('components.homepage.features-card', [
                        'title' => 'Mobile Banking App',
                        'desc' =>
                            'Stay connected to your finances on the go with our user-friendly mobile banking app. Easily manage your accounts, deposit checks, and make payments from your smartphone or tablet.',
                    ])
                    @include('components.homepage.features-card', [
                        'title' => 'Secure Transactions',
                        'desc' =>
                            'Rest assured knowing that your transactions are protected by industry-leading security measures. We employ encryption and multi-factor authentication to safeguard your financial information.',
                    ])
                    @include('components.homepage.features-card', [
                        'title' => 'Bill Pay and Transfers',
                        'desc' =>
                            'Save time and avoid late fees with our convenient bill pay service. Set up recurring payments or make one-time transfers between your accounts with just a few clicks.',
                    ])
                </div>
            </div>
            <div class="tab-pane fade" id="features-support" role="tabpanel">
                <div class="features-cards">
                    @include('components.homepage.features-card', [
                        'title' => '24/7 Account Access',
                        'desc' =>
                            'Enjoy the convenience of accessing your accounts anytime, anywhere through our secure online banking platform. Check balances, transfer funds, and pay bills with ease.',
                    ])
                    @include('components.homepage.features-card', [
                        'title' => 'Mobile Banking App',
                        'desc' =>
                            'Stay connected to your finances on the go with our user-friendly mobile banking app. Easily manage your accounts, deposit checks, and make payments from your smartphone or tablet.',
                    ])
                    @include('components.homepage.features-card', [
                        'title' => 'Secure Transactions',
                        'desc' =>
                            'Rest assured knowing that your transactions are protected by industry-leading security measures. We employ encryption and multi-factor authentication to safeguard your financial information.',
                    ])
                    @include('components.homepage.features-card', [
                        'title' => 'Bill Pay and Transfers',
                        'desc' =>
                            'Save time and avoid late fees with our convenient bill pay service. Set up recurring payments or make one-time transfers between your accounts with just a few clicks.',
                    ])
                </div>
            </div>
        </div>
    </div>
</section>
