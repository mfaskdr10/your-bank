<section class="protect">
    <x-header-section title="How We" highlight="Protect You"
        description="At YourBank, we prioritize the security and confidentiality of your financial information. Our state-of-the-art encryption technology and stringent data protection measures ensure your assets and transactions are safeguarded at all times"
        :showTabs="false" tabId="productTabs">
    </x-header-section>

    <div class="protect-content d-flex flex-column">
        <div class="card-1 d-flex">
            @include('components.careerspage.card-benefits', [
                'titleCard' => 'Secure Online Banking Platform',
                'icon' => 'icon/online-banking.svg',
                'descriptionCard' =>
                    'Our online banking platform is built with multiple layers of security to safeguard your information. We utilize industry-standard encryption protocols to ensure that your data remains confidential and protected during transmission.',
            ])
            @include('components.careerspage.card-benefits', [
                'titleCard' => 'Multi-Factor Authentication',
                'icon' => 'icon/multi-factor.svg',
                'descriptionCard' =>
                    'To enhance the security of your online banking experience, we employ multi-factor authentication. This additional layer of security requires you to provide multiple pieces of identification, such as a password and a one-time verification code, to access your account.',
            ])
        </div>
        <div class="card-2 d-flex">
            @include('components.careerspage.card-benefits', [
                'titleCard' => 'Fraud Monitoring',
                'icon' => 'icon/fraud-monitoring.svg',
                'descriptionCard' =>
                    'We have sophisticated fraud detection systems in place to monitor your accounts for any suspicious activities. Our dedicated team works around the clock to detect and prevent unauthorized transactions, providing you with peace of mind.',
            ])
            @include('components.careerspage.card-benefits', [
                'titleCard' => 'Secure Mobile Banking',
                'icon' => 'icon/secure-mobile-banking.svg',
                'descriptionCard' =>
                    'Our mobile banking app is designed with the same level of security as our online banking platform. You can confidently access your accounts, make transactions, and manage your finances on the go, knowing that your information is protected.',
            ])
        </div>
    </div>
</section>
