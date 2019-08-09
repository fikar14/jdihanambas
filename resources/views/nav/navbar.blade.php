<div class="columns">
    <div class="column">
        <nav class="navbar is-link is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
            <img src="{{ asset('images/smart-anambas.png') }}" width="180">
            </a>
            <a class="navbar-item" id="admin-slideout-button">
                <span class="icon"><i class="fa fa-arrow-alt-circle-right"></i></span>
            </a>

            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false" id="menu-slideout-button">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>

        </div>

        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">

            <a class="navbar-item" href="{{ route('home') }}">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span>Beranda</span>
            </a>

            <a class="navbar-item">
                <span class="icon"><i class="fa fa-users"></i></span>
                <span>Profil</span> 
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    <span class="icon"><i class="fa fa-newspaper"></i></span>
                    <span>Berita</span> 
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        About
                    </a>
                    <a class="navbar-item">
                        Jobs
                    </a>
                    <a class="navbar-item">
                        Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Report an issue
                    </a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    <span class="icon"><i class="fa fa-book"></i></span>
                    <span>Produk</span> 
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Peraturan Pemerintah Daerah
                    </a>
                    <a class="navbar-item">
                        Peraturan Presiden
                    </a>
                    <a class="navbar-item">
                        Peraturan Bupati
                    </a>
                </div>
            </div>
            <a class="navbar-item">
                <span class="icon"><i class="far fa-envelope"></i></span>
                <span>Kontak</span> 
            </a>
        </div>

            <div class="navbar-end">
            <div class="navbar-item">
                @if (Auth::guest())
                    <div class="buttons">
                        <a class="button is-success is-outlined is-rounded" href="{{ route('register') }}">
                            <strong>Register</strong>
                        </a>
                        <a class="button is-light is-rounded" href="{{ route('login') }}">
                            Log in
                        </a>
                    </div>
                @else 
                <div class="navbar-item has-dropdown is-hoverable is-hidden-mobile">
                    <a class="navbar-link">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            <span class="icon m-r-5"><i class="fa fa-address-card"></i></span>
                            About
                        </a>
                        <a class="navbar-item">
                            <span class="icon m-r-5"><i class="fa fa-user"></i></span>
                            Profile
                        </a>
                        <a class="navbar-item">
                            <span class="icon m-r-5"><i class="fa fa-id-card-alt"></i></span>
                            Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="icon m-r-5"><i class="fa fa-sign-out-alt"></i></span>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endif
            </div>
            </div>
        </div>
        </nav>
    </div>
</div>