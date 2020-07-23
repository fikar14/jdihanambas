@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>

    <div class="flex-container">
        <section class="profile">
            <div class="hero-body">
                <div class="container top-judul has-text-centered">
                    <span class="logo">
                        <img src="{{ asset('images/logo-anambas200x200.png') }}">
                    </span>
                    <h1 class="title-judul">
                        PROFIL JDIH KABUPATEN KEPULAUAN ANAMBAS
                    </h1>
                    <p class="subtitle-judul">
                        "ANAMBAS BERMADAH 2021, Kepulauan Anambas Sebagai Kabupaten Maritim Terdepan yang Berdaya Saing, Maju dan Berakhlakul Karimah"
                    </p>
                </div>           
            </div>
        </section>
        <div class="columns">
            <section class = "profile-visi" id="visi">
                <div class="column is-10 m-l-50">
                    <h2 class="title-visi">Visi</h2>
                    <br>
                    <p>
                        {!! $profile->visi !!}
                    </p>
                </div>
            </section>   
            <section class = "profile-misi" id="misi">
                <div class="column is-10 m-l-50">
                    <h2 class="title-misi">Misi</h2>
                    <br>        
                    <p>
                        {!! $profile->misi !!}
                    </p>
                </div>
            </section>
        </div>
    </div>

    <section class="flex-container tugas-pokok" id="tugas-pokok">
        <div class="columns has-text-centered">
            <div class="column is-12">
                <p class="title-tupoksi">Tugas Pokok</p>
            </div>
        </div> 
        <div class="columns has-text-centered">
            <div class="column is-4 is-offset-4">
                <div class="card tupoksi">
                    <div class="card-content">                        
                        <p class= "list-tupoksi">
                            {!! $profile->tugaspokok !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    
    {{-- <section class="flex-container tujuan" id="tujuan">
        <div class="columns">
            <div class="column">
                <h3 class="title-tujuan m-l-10">Tujuan</h3>
            </div>
        </div>
        <div class="columns">
            <div class="column is-6 m-l-10">
                <p class="has-text-left">
                    {!! $profile->tujuan !!}
                </p>
            </div>
            <div class="column is-6">
                <figure class="image is-pulled-right">
                    <img src= "{{ asset('images/logo-jdih.png') }}">
                </figure>
            </div>
        </div>
    </section> --}}
    

    <section class="flex-container fungsi" id="fungsi">
        <div class="columns">
            <div class="column">
                <h3 class="title-fungsi m-r-20 is-pulled-right">Fungsi</h3>
            </div>
        </div>
        <div class="columns">
            <div class="column is-6">
                <figure class="image">
                    <img src= "{{ asset('images/fungsi.png') }}">
                </figure>
            </div>
            <div class="column is-6">
                <p class="m-r-20 has-text-right">
                    {!! $profile->fungsi !!}
                </p>
            </div>
        </div>
    </section>

    <section class="flex-container" id="organisasi">
        <div class="columns has-text-centered">
            <div class="column is-12 m-t-100">
                <h3 class="title-organisasi">Struktur Organisasi</h3>
            </div>
        </div> 
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <figure class="image">
                    <img src="{{asset('storage/profile/'.$profile->struktur)}}" />
                </figure>
            </div>
        </div>  
        <div class="columns has-text-centered" id="sop">
            <div class="column is-12 m-t-100">
                <h3 class="title-organisasi">Lambang & Moto</h3>
            </div>
        </div>
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <p>
                    {!! $profile->sop !!}
                </p>
            </div>
        </div>
    </section>
    

@endsection

@section('scripts')
    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
        } else {
        mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
@endsection
