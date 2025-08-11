@props(['titleCard', 'icon', 'descriptionCard'])

<div class="card-benefits">
    <div class="header-card d-flex">
        <div class="image">
            <img src="{{ asset($icon) }}" alt="" class="icon-image">
        </div>
        <h2 class="title-card">{{ $titleCard }}</h2>
    </div>
    <p class="desc-card">{{ $descriptionCard }}</p>
</div>
