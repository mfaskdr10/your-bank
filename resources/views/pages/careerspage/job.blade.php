<section class="job">
    <x-header-section title="" highlight="Job Openings"
        description="Explore exciting job openings at YourBank, where we value talent, innovation, and a passion for customer service. Join our team and be part of shaping a brighter future in the banking industry"
        :showTabs="false" tabId="productTabs">
    </x-header-section>

    <div class="job-content">
        @include('components.careerspage.card-job', [
            'titleCard' => 'Relationship Manager',
            'departement' => 'Retail Banking',
            'qualification1' => "Bachelor's degree in Business, Finance, or a related field",
            'qualification2' =>
                'Minimum of 3 years of experience in sales or relationship management in the banking industry',
            'qualification3' => 'Proven track record of meeting and exceeding sales targets',
            'qualification4' => 'Excellent interpersonal and negotiation skills',
            'qualification5' => 'Strong knowledge of banking products and services',
            'descriptionCard' =>
                'As a Relationship Manager at YourBank, you will be responsible for developing and maintaining relationships with our valued customers. You will proactively identify their financial needs and offer tailored solutions to help them achieve their goals. We are seeking individuals with excellent communication skills, a strong sales acumen, and a passion for delivering exceptional customer service.',
        ])
        @include('components.careerspage.card-job', [
            'titleCard' => 'Risk Analyst',
            'departement' => 'Risk Management',
            'qualification1' => "Bachelor's degree in Finance, Economics, or a related field",
            'qualification2' => 'Minimum of 2 years of experience in risk management or a similar role',
            'qualification3' => 'Proficiency in risk analysis tools and techniques',
            'qualification4' => 'Strong analytical and problem-solving skills',
            'qualification5' => 'Knowledge of regulatory requirements and industry best practices',
            'descriptionCard' =>
                'As a Risk Analyst at YourBank, you will play a vital role in identifying and assessing potential risks to our organization. You will analyze data, conduct risk assessments, and develop strategies to mitigate risks. We are looking for detail-oriented individuals with strong analytical skills and a solid understanding of risk management principles.',
        ])
        @include('components.careerspage.card-job', [
            'titleCard' => 'IT Security Specialist',
            'departement' => 'Information Technology',
            'qualification1' => "Bachelor's degree in Computer Science, Information Security, or a related field",
            'qualification2' => 'Minimum of 5 years of experience in IT security or a similar role',
            'qualification3' => 'In-depth knowledge of network security protocols and technologies',
            'qualification4' => 'Familiarity with regulatory frameworks such as PCI DSS and GDPR',
            'qualification5' => 'Professional certifications such as CISSP or CISM are preferred',
            'descriptionCard' =>
                'As an IT Security Specialist at YourBank, you will be responsible for ensuring the security and integrity of our information systems. You will develop and implement security protocols, conduct vulnerability assessments, and respond to security incidents. We are seeking individuals with a strong technical background, knowledge of cybersecurity best practices, and a commitment to maintaining the confidentiality of customer data.',
        ])
    </div>
</section>
