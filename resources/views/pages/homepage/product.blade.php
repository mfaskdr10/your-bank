<section class="product">
    <x-header-section title="Our" highlight="Products"
        description="Discover a range of comprehensive and customizable banking products at YourBank, designed to suit your unique financial needs and aspirations"
        :showTabs="true" tabId="productTabs">

        <x-slot name="individualContent">
            <div class="individual">
                {{-- Card 1 --}}
                <div class="individual-card">
                    <img src="{{ asset('icon/checking-account.svg') }}" alt="">
                    <div class="group-text">
                        <p class="title">Checking Accounts</p>
                        <p class="desc">Enjoy easy and convenient access to your funds with our range of checking account options. Benefit from features such as online and mobile banking, debit cards, and free ATM access.</p>
                    </div>
                </div>
                <div class="vr"></div>
                {{-- Card 2 --}}
                <div class="individual-card">
                    <img src="{{ asset('icon/savings-account.svg') }}" alt="">
                    <div class="group-text">
                        <p class="title">Savings Accounts</p>
                        <p class="desc">Build your savings with our competitive interest rates and flexible savings account options. Whether you're saving for a specific goal or want to grow your wealth over time, we have the right account for you.</p>
                    </div>
                </div>
                <div class="vr"></div>
                {{-- Card 3 --}}
                <div class="individual-card">
                    <img src="{{ asset('icon/loans.svg') }}" alt="">
                    <div class="group-text">
                        <p class="title">Loans and Mortgages</p>
                        <p class="desc">Realize your dreams with our flexible loan and mortgage options. From personal loans to home mortgages, our experienced loan officers are here to guide you through the application process and help you secure the funds you need.</p>
                    </div>
                </div>
            </div>
        </x-slot>

        <x-slot name="businessContent">
            <div class="individual">
                {{-- Card 3 --}}
                <div class="individual-card">
                    <img src="{{ asset('icon/loans.svg') }}" alt="">
                    <div class="group-text">
                        <p class="title">Loans and Mortgages</p>
                        <p class="desc">Realize your dreams with our flexible loan and mortgage options. From personal loans to home mortgages, our experienced loan officers are here to guide you through the application process and help you secure the funds you need.</p>
                    </div>
                </div>
                <div class="vr"></div>
                {{-- Card 2 --}}
                <div class="individual-card">
                    <img src="{{ asset('icon/savings-account.svg') }}" alt="">
                    <div class="group-text">
                        <p class="title">Savings Accounts</p>
                        <p class="desc">Build your savings with our competitive interest rates and flexible savings
                            account options. Whether you're saving for a specific goal or want to grow your wealth over
                            time, we have the right account for you.</p>
                    </div>
                </div>
                <div class="vr"></div>
                {{-- Card 1 --}}
                <div class="individual-card">
                    <img src="{{ asset('icon/checking-account.svg') }}" alt="">
                    <div class="group-text">
                        <p class="title">Checking Accounts</p>
                        <p class="desc">Enjoy easy and convenient access to your funds with our range of checking
                            account options. Benefit from features such as online and mobile banking, debit cards, and
                            free ATM access.</p>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-header-section>
</section>
