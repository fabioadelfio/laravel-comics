@extends('layouts.app')

@section('content')
<section class="jumbotron">
    <img src="img/jumbotron.jpg" alt="">
</section>

<section class="comics">
    <div class="container">
        <h2 class="current-series">CURRENT SERIES</h2>
        <div class="comics-grid">
            @foreach ($comics as $comic)
            @include('components.comic-card', ['comic' => $comic])
            @endforeach
        </div>
        <div class="load-more">
            <button>LOAD MORE</button>
        </div>
    </div>
</section>

<section class="merchandise">
    <div class="container">
        <div class="merchandise-grid">
            <div class="merch-item">
                <img src="img/buy-comics-digital-comics.png" alt="Digital Comics">
                <span>Digital Comics</span>
            </div>
            <div class="merch-item">
                <img src="img/buy-comics-merchandise.png" alt="DC Merchandise">
                <span>DC Merchandise</span>
            </div>
            <div class="merch-item">
                <img src="img/buy-comics-subscriptions.png" alt="Subscription">
                <span>Subscription</span>
            </div>
            <div class="merch-item">
                <img src="img/buy-comics-shop-locator.png" alt="Comic Shop Locator">
                <span>Comic Shop Locator</span>
            </div>
            <div class="merch-item">
                <img src="img/buy-dc-power-visa.svg" alt="DC Power Visa">
                <span>DC Power Visa</span>
            </div>
        </div>
    </div>
</section>
@endsection