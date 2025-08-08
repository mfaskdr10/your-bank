@props([
    'titleCard',
    'departement',
    'qualification1',
    'qualification2',
    'qualification3',
    'qualification4',
    'qualification5',
    'descriptionCard',
])

<div class="card-job">
    <h2 class="title-card">{{ $titleCard }}</h2>
    <div class="info d-flex align-items-center">
        <p class="desc-info">Location: India</p>
        <p class="desc-info">Departement: {{ $departement }}</p>
    </div>
    <div class="desc">
        <h3 class="title-desc">About This Job</h3>
        <p class="desc-card">{{ $descriptionCard }}</p>
    </div>
    <div class="qualification d-flex flex-column">
        <div class="title-qualification">Requirements & Qualifications</div>
        <div class="list-qualification d-flex align-items-center">
            <img src="{{ asset('./icon/suitcase.svg') }}" alt="">
            <p class="desc-qualification">{{ $qualification1 }}</p>
        </div>
        <div class="list-qualification d-flex align-items-center">
            <img src="{{ asset('./icon/suitcase.svg') }}" alt="">
            <p class="desc-qualification">{{ $qualification2 }}</p>
        </div>
        <div class="list-qualification d-flex align-items-center">
            <img src="{{ asset('./icon/suitcase.svg') }}" alt="">
            <p class="desc-qualification">{{ $qualification3 }}</p>
        </div>
        <div class="list-qualification d-flex align-items-center">
            <img src="{{ asset('./icon/suitcase.svg') }}" alt="">
            <p class="desc-qualification">{{ $qualification4 }}</p>
        </div>
        <div class="list-qualification d-flex align-items-center">
            <img src="{{ asset('./icon/suitcase.svg') }}" alt="">
            <p class="desc-qualification">{{ $qualification5 }}</p>
        </div>
    </div>
    <a href="" class="button-apply">Apply Now</a>
</div>
