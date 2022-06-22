<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="{{ asset('anime-main/img/.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="{{ Request::is('/*') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                                <li class="{{ Request::is('genres*') ? 'active' : '' }}"><a href="{{ url('genres') }}">Genre</a>
                                </li>
                                <li class="{{ Request::is('seasons*') ? 'active' : '' }}"><a href="{{ url('seasons') }}">Season</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <form action="">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        </form>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->