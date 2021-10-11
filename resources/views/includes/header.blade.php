<header>
    {{-- NAVBAR TOP --}}
    <nav id="top-nav">
        <div class="container">
            <div class="topnav-links">
                <span><a href="">DC Power &trade; Visa <i class="far fa-registered"></i></a></span>
                <span><a href="">Additional DC Sites <i class="fas fa-sort-down"></i></a></span>
            </div>
        </div>
    </nav>
    {{-- NAVBAR BOTTOM  --}}
    <nav id="bottom-nav">
        <div class="container">
            <div class="row">
                {{-- MENU --}}
                <a href="{{ route('home')}}"><img src="{{ asset('images/dc-logo.png') }}" alt="header-logo" id="header-logo"></a>
                <ul>
                    <li><a href="">Characters</a></li>
                    <li><a  href="{{ route('comics.index') }}">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Tv</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Collectibles</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Fans</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Shop <i class="fas fa-sort-down"></i></a></li>
                </ul>
                {{-- ICONS SEARCH  --}}
                <div class="icon-search">
                    <div>Search</div>
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>    
    </nav>
</header>