@props([
    'title',
    'highlight',
    'description',
    'showTabs' => false,
    'tabId' => 'sectionTabs', // ID unik untuk tab-group
])

<div class="header">
    <div class="left">
        <h2 class="title">
            {{ $title }} <span class="text-lime">{{ $highlight }}</span>
        </h2>
        <p class="desc">
            {{ $description }}
        </p>
    </div>

    @if ($showTabs)
        <ul class="nav nav-pills custom-nav-pills mt-3 mt-md-0" id="{{ $tabId }}-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="{{ $tabId }}-individual-tab" data-bs-toggle="pill"
                    data-bs-target="#{{ $tabId }}-individual" type="button" role="tab" aria-selected="true">
                    For Individuals
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="{{ $tabId }}-business-tab" data-bs-toggle="pill"
                    data-bs-target="#{{ $tabId }}-business" type="button" role="tab" aria-selected="false">
                    For Businesses
                </button>
            </li>
        </ul>
    @endif
</div>

@if ($showTabs)
    <div class="tab-content mt-4" id="{{ $tabId }}-tabContent">
        <div class="tab-pane fade show active" id="{{ $tabId }}-individual" role="tabpanel">
            {{ $individualContent ?? 'Default content for Individuals' }}
        </div>
        <div class="tab-pane fade" id="{{ $tabId }}-business" role="tabpanel">
            {{ $businessContent ?? 'Default content for Businesses' }}
        </div>
    </div>
@endif
