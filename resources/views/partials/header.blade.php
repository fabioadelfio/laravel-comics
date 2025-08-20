<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('comics.home') }}">
                    <img src="img/dc-logo.png" alt="logo-dc-comics">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('comics.characters') }}">Characters</a></li>
                    <li><a class="active" href="{{ route('comics.home') }}">Comics</a></li>
                    <li><a href="{{ route('comics.movies') }}">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Collectibles</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Fans</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>