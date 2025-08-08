<div class="container faq-section">
    <x-header-section title="Asked Questions" highlight="Frequently"
        description="Still you have any questions? Contact our Team via support@yourbank.com" :showTabs="false"
        tabId="productTabs">
    </x-header-section>
    <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-6">
            <div class="faq-card">
                <h5>How do I open an account with YourBank?</h5>
                <hr>
                <p>Opening an account with YourBank is easy. Simply visit our website and click on the "Open an Account"
                    button. Follow the prompts, provide the required information, and complete the application process.
                    If you have any questions or need assistance, our customer support team is available to help.</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-6">
            <div class="faq-card">
                <h5>What documents do I need to provide to apply for a loan?</h5>
                <hr>
                <p>The documents required for a loan application may vary depending on the type of loan you are applying
                    for. Generally, you will need to provide identification documents (such as a passport or driver's
                    license), proof of income (such as pay stubs or tax returns), and information about the collateral
                    (if applicable). Our loan officers will guide you through the specific requirements during the
                    application process.</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-6">
            <div class="faq-card">
                <h5>How can I access my accounts online?</h5>
                <hr>
                <p>Accessing your accounts online is simple and secure. Visit our website and click on the "Login"
                    button. Enter your username and password to access your accounts. If you haven't registered for
                    online banking, click on the "Enroll Now" button and follow the registration process. If you need
                    assistance, our customer support team is available to guide you.</p>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-6">
            <div class="faq-card">
                <h5>Are my transactions and personal information secure?</h5>
                <hr>
                <p>At YourBank, we prioritize the security of your transactions and personal information. We employ
                    industry-leading encryption and multi-factor authentication to ensure that your data is protected.
                    Additionally, we regularly update our security measures to stay ahead of emerging threats. You can
                    bank with confidence knowing that we have robust security systems in place.</p>
            </div>
        </div>
    </div>

    <!-- Collapse -->
    <div class="collapse mt-4" id="extraFaqs">
        <div class="row g-4 mt-2">
            <!-- Card 5 -->
            <div class="col-md-6">
                <div class="faq-card">
                    <h5>Can I open an account online?</h5>
                    <hr>
                    <p>Yes, you can open an account entirely online through our website by following the guided
                        process...</p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-6">
                <div class="faq-card">
                    <h5>How long does a loan approval take?</h5>
                    <hr>
                    <p>Loan approval times vary but usually take 2-5 business days, depending on the documentation
                        provided...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol -->
    <div class="text-center mt-4">
        <button class="btn-toggle d-inline-flex align-items-center"
            data-bs-toggle="collapse" data-bs-target="#extraFaqs" aria-expanded="false" aria-controls="extraFaqs"
            id="toggleBtn">
            <span class="btn-text">Load All FAQs</span>
            <img src="{{ asset('icon/arrow-down.svg') }}" alt="" class="arrow-icon">
        </button>
    </div>
</div>

@push('script')
    <script>
        const toggleBtn = document.getElementById('toggleBtn');
        const toggleText = toggleBtn.querySelector('.btn-text');
        const extraFaqs = document.getElementById('extraFaqs');

        extraFaqs.addEventListener('shown.bs.collapse', () => {
            toggleText.textContent = 'Show Less';
            toggleBtn.classList.add('rotated');
        });

        extraFaqs.addEventListener('hidden.bs.collapse', () => {
            toggleText.textContent = 'Load All FAQs';
            toggleBtn.classList.remove('rotated');
        });
    </script>
@endpush
