@extends('layouts.app')

@section('title')
    Berita
@endsection

@section('content')

    <section class="columns has-text-centered m-t-100">
        <div class="column">
            <h3 class="title is-3">Berita Terbaru</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

        <section class="content">       
        <section class="columns is-multiline m-t-20">      
            <div class="column is-4 is-offset-2">
                <div class="card">
                <div class="card-header">
                    <p class="card-header-title">Berita #1</p>
                </div>
                <div class="card-content">
                    <div class="columns">
                        <div class="column is-8">
                            <h3>Halaman Berita akan diupdate pada waktu yang akan datang </h3>   
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        </section>

@endsection
