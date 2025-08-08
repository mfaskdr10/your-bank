<section class="usecase">
    <x-header-section title="" highlight="Use Case"
        description="At YourBank, we cater to the diverse needs of individuals and businesses alike, offering a wide range of financial solutions"
        :showTabs="false">
    </x-header-section>

    <div class="individual d-flex">
        @include('components.homepage.card-case', [
            'icon1' => asset('icon/personal-finances.svg'),
            'icon2' => asset('icon/saving-future.svg'),
            'icon3' => asset('icon/home-ownership.svg'),
            'icon4' => asset('icon/education-funding.svg'),
            'description1' => 'Managing Personal Finances',
            'description2' => 'Saving for the Future',
            'description3' => 'Homeownership',
            'description4' => 'Education Funding',
        ])


        @include('components.homepage.case-inform', [
            'title' => 'For Individuals',
            'desc' =>
                'For individuals, our mortgage services pave the way to homeownership, and our flexible personal loans provide vital support during various life milestones. We also prioritize retirement planning, ensuring a financially secure future for our customers',
            'count1' => '78%',
            'info1' => 'Secure Retirement Planning',
            'count2' => '63%',
            'info2' => 'Manageable Debt Consolidation',
            'count3' => '91%',
            'info3' => 'Reducing financial burdens',
        ])
    </div>

    <div class="business d-flex">
        @include('components.homepage.case-inform', [
            'title' => 'For Business',
            'desc' =>
                'For businesses, we empower growth with working capital solutions that optimize cash flow, and our tailored financing options fuel business expansion. Whatever your financial aspirations, YourBank is committed to providing the right tools and support to achieve them',
            'count1' => '65%',
            'info1' => 'Cash Flow Management',
            'count2' => '70%',
            'info2' => 'Drive Business Expansion',
            'count3' => '45%',
            'info3' => 'Streamline payroll processing',
        ])


        @include('components.homepage.card-case', [
            'icon1' => asset('icon/startup-enterprise.svg'),
            'icon2' => asset('icon/cash-flow.svg'),
            'icon3' => asset('icon/business-expansion.svg'),
            'icon4' => asset('icon/payment-solutions.svg'),
            'description1' => 'Startups and Entrepreneurs',
            'description2' => 'Cash Flow Management',
            'description3' => 'Business Expansion',
            'description4' => 'Payment Solutions',
        ])
    </div>
</section>
