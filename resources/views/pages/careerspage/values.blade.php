<section class="values">
    <x-header-section title="Our" highlight="Values"
        description="At YourBank, our values form the foundation of our organization and guide our actions. We believe in upholding the highest standards of integrity, delivering exceptional service, and embracing innovation. These values define our culture and shape the way we work together to achieve our goals."
        :showTabs="false" tabId="productTabs">
    </x-header-section>

    <div class="values-content d-flex flex-column">
        {{-- Card 1 --}}
        <div class="card-1 d-flex">
            <x-careerspage.card-value titleCard="Integrity"
                descriptionCard="We conduct ourselves with utmost honesty, transparency, and ethical behavior. We believe in doing what is right for our customers, colleagues, and stakeholders, even when faced with difficult choices." />

            <x-careerspage.card-value titleCard="Customer Centricity"
                descriptionCard="Our customers are at the heart of everything we do. We are dedicated to understanding their needs, providing personalized solutions, and delivering exceptional service that exceeds expectations." />
        </div>

        {{-- Card 2 --}}
        <div class="card-2 d-flex">
            <x-careerspage.card-value titleCard="Collaboration"
                descriptionCard="We foster a collaborative and inclusive work environment, where teamwork and diversity are celebrated. By leveraging the unique strengths and perspectives of our employees, we drive innovation and achieve greater success together." />

            <x-careerspage.card-value titleCard="Innovation"
                descriptionCard="We embrace change and constantly seek innovative solutions to meet the evolving needs of our customers. We encourage our employees to think creatively, challenge conventions, and explore new ideas to drive the future of banking." />
        </div>
    </div>
</section>
