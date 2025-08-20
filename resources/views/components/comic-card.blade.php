@props(['comic'])

<div class="comic-card">
    <div class="comic-image">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
    <div class="comic-details">
        <h3>{{ $comic['title'] }}</h3>
        <p class="comic-price">${{ number_format($comic['price'], 2) }}</p>
    </div>
</div>