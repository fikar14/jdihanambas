<div class="columns">
    <div class="column">
        <nav class="navbar is-link is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
            <img src="{{ asset('images/JDIH.png') }}" width="180">
            </a>
            <a class="navbar-item" id="admin-slideout-button">
                {{-- <span class="icon"><i class="fa fa-arrow-alt-circle-right"></i></span> --}}
            </a>

            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false" id="menu-slideout-button">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>

        </div>

        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">

            <a class="navbar-item" href="/">
                <span>Beranda</span>
            </a>

            {{-- <a class="navbar-item" href="/profile">
                <span>Profil</span> 
            </a> --}}

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="/profile">
                    <span>Profil</span> 
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="/profile#sop">
                        Lambang & Moto
                    </a>
                    <a class="navbar-item" href="/profile#visi">
                        Visi
                    </a>
                    <a class="navbar-item" href="/profile#misi">
                        Misi
                    </a>
                    <a class="navbar-item" href="/profile#tugas-pokok">
                        Tugas Pokok
                    </a>
                    <a class="navbar-item" href="/profile#fungsi">
                        Fungsi
                    </a>
                    <a class="navbar-item" href="/profile#organisasi">
                        Struktur Organisasi
                    </a>
                    <a class="navbar-item" href="/sop">
                        SOP
                    </a>                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="#">
                    <span>JDIH</span> 
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="/sejarah-jdih">
                        Sejarah Singkat
                    </a>
                    <a class="navbar-item" href="/sumber-hukum">
                        Dasar Hukum
                    </a>
                </div>
            </div>

            <a class="navbar-item" href="/produk-hukum">
                <span>Produk Hukum</span>
            </a>

            {{-- <a class="navbar-item" href="/produk-hukum-desa">
                <span>Produk Hukum Desa</span>
            </a> --}}

            {{-- <a class="navbar-item" href="/produk-hukum">
                <span>Galery Foto</span> 
            </a>

            <a class="navbar-item" href="/produk-hukum">
                <span>Forum Interaktif</span> 
            </a> --}}
            
            <a class="navbar-item" href="/berita">
                <span>Berita</span> 
            </a>

            <a class="navbar-item" href="/kontak">
                <span>Kontak</span> 
            </a>
        </div>

            <div class="navbar-end">
            <div class="navbar-item">
                @if (Auth::guest())
                    <div class="buttons">
                        {{-- <a class="button is-success is-outlined is-rounded" href="{{ route('register') }}">
                            <strong>Register</strong>
                        </a> --}}
                        <a class="button is-light is-rounded" href="{{ route('login') }}">
                            Log in
                        </a>
                    </div>
                @else 
                <div class="navbar-item has-dropdown is-hoverable is-hidden-mobile m-r-15">
                    <a class="navbar-link">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/home">
                            <span class="icon m-r-5"><i class="fa fa-address-card"></i></span>
                            Dashboard
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
