@props(['titleCard', 'date', 'image', 'descriptionCard'])

<div class="card-releases d-flex flex-column">
    <img src="{{ asset($image) }}" alt="">

    <div class="head">
        <h2 class="title-card">{{ $titleCard }}</h2>
        <div class="info d-flex">
            <span class="info-card">Location: India</span>
            <span class="info-card">Date: {{ $date}}</span>
        </div>
    </div>

    <p class="desc-card">{{ $descriptionCard }}</p>
</div>
