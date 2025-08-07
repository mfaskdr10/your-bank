<section class="benefits">
    <x-header-section title="Our" highlight="Benefits"
        description="At YourBank, we value our employees and are dedicated to their well-being and success. We offer a comprehensive range of benefits designed to support their personal and professional growth."
        :showTabs="false" tabId="productTabs">
    </x-header-section>

    <div class="benefits-content d-flex flex-column">
        <div class="card-1 d-flex">
            @include('components.careerspage.card-benefits', [
                'titleCard' => 'Competitive Compensation',
                'icon' => './icon/compensation.svg',
                'descriptionCard' =>
                    'We provide a competitive salary package that recognizes the skills and expertise of our employees. YourBank believes in rewarding exceptional performance and offering opportunities for financial growth.',
            ])
            <img src="{{ asset('./icon/line.svg')}}" alt="">
            @include('components.careerspage.card-benefits', [
                'titleCard' => 'Health and Wellness',
                'icon' => './icon/wallness.svg',
                'descriptionCard' =>
                    'We prioritize the health and well-being of our employees by providing comprehensive medical, dental, and vision insurance plans. We also offer wellness programs, gym memberships, and resources to support a healthy lifestyle.',
            ])
        </div>
        <img src="{{ asset('./icon/line-hr.svg')}}" alt="">
        <div class="card-2 d-flex">
            @include('components.careerspage.card-benefits', [
                'titleCard' => 'Retirement Planning',
                'icon' => './icon/planning.svg',
                'descriptionCard' =>
                    'YourBank is committed to helping employees plan for their future. We offer a retirement savings plan with a generous employer match to help them build a secure financial foundation for the long term.',
            ])
            <img src="{{ asset('./icon/line.svg')}}" alt="">
            @include('components.careerspage.card-benefits', [
                'titleCard' => 'Work-Life Balance',
                'icon' => './icon/balance.svg',
                'descriptionCard' =>
                    'We understand the importance of maintaining a healthy work-life balance. YourBank offers flexible work arrangements, paid time off, parental leave, and other programs that support employees in managing their personal and professional commitments.',
            ])
        </div>
    </div>
</section>
