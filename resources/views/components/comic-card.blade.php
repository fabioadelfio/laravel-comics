@props(['comic'])

<div class="comic-card">
    <div class="comic-image">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
    </div>
    <div class="comic-details">
        <h3>{{ $comic['series'] }}</h3>
    </div>
</div>