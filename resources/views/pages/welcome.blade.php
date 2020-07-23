@extends('layouts.app')

@section('title')
    JDIH Kabupaten Kepulauan Anambas
@endsection

@section('content')

    <section class="hero is-link is-medium">
        <div class="hero-body">
            <div class="container has-text-centered">
                <span class="logo">
                    <img src="{{ asset('images/logo-anambas200x200.png') }}">
                </span>
                <h1 class="title m-t-20">
                    JARINGAN DOKUMENTASI DAN INFORMASI HUKUM
                </h1>
                <h2 class="subtitle">
                    Pemerintah Kabupaten Kepulauan Anambas
                </h2>     

                <form action="{{route('prokumda')}}">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-4 is-offset-3">
                                <div class="field is-horizontal">
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="select is-fullwidth">
                                                <select name="search" value="{{ old('search') }}">
                                                    <option value="">Pilih Bentuk Peraturan</option>
                                                    <option value="Peraturan Daerah">Peraturan Daerah</option>
                                                    <option value="Peraturan Bupati">Peraturan Bupati</option>
                                                    <option value="Propem Pemda">Propem Perda</option>
                                                    <option value="Peraturan Desa">Peraturan Desa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-2">
                                <button class="button is-link is-fullwidth">
                                    <span class="icon is-small">
                                        Cari
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>           
        </div>
    </section>
    
    <section class="columns is-multiline is-centered">
        <div class="column is-2 is-narrow">
            <div class="card card-top">
                <header class="card-header">
                    <p class="card-header-title">
                        PERATURAN DAERAH
                    </p>
                </header>
                
                <div class="card-content">
                    <div class="field-body">
                        <div class="field has-text-centered">
                            <p class="title_total">
                                {{ $prokum }}
                            </p>
                        </div>
                    </div>
                </div>

                <footer class="card-footer">
                    <p class="button is-normal is-fullwidth footer-total">
                        <span class="icon is-small">
                            Total Peraturan
                        </span>
                    </p>
                </footer>
            </div>
        </div>

        <div class="column is-2 is-narrow">
            <div class="card card-top">
                <header class="card-header">
                    <p class="card-header-title">
                        PERATURAN BUPATI
                    </p>
                </header>
                
                <div class="card-content">
                    <div class="field-body">
                        <div class="field has-text-centered">
                            <p class="title_total">
                                {{ $prokum2 }}
                            </p>
                        </div>
                    </div>
                </div>

                <footer class="card-footer">
                    <p class="button is-normal is-fullwidth footer-total">
                        <span class="icon is-small">
                            Total Peraturan
                        </span>
                    </p>
                </footer>
            </div>
        </div>

        <div class="column is-2 is-narrow">
            <div class="card card-top">
                <header class="card-header">
                    <p class="card-header-title">
                        PROPEM PERDA
                    </p>
                </header>
                
                <div class="card-content">
                    <div class="field-body">
                        <div class="field has-text-centered">
                            <p class="title_total">
                                {{ $prokum3 }}
                            </p>
                        </div>
                    </div>
                </div>

                <footer class="card-footer">
                    <p class="button is-normal is-fullwidth footer-total">
                        <span class="icon is-small">
                            Total Peraturan
                        </span>
                    </p>
                </footer>
            </div>
        </div>

        <div class="column is-2 is-narrow">
            <div class="card card-top">
                <header class="card-header">
                    <p class="card-header-title">
                        PERATURAN DESA
                    </p>
                </header>
                
                <div class="card-content">
                    <div class="field-body">
                        <div class="field has-text-centered">
                            <p class="title_total">
                                {{ $prokum4 }}
                            </p>
                        </div>
                    </div>
                </div>

                <footer class="card-footer">
                    <p class="button is-normal is-fullwidth footer-total">
                        <span class="icon is-small">
                            Total Peraturan
                        </span>
                    </p>
                </footer>
            </div>
        </div>
    </section>

    {{-- <section class="columns is-multiline pencarian is-centered">
        <div class="column is-6 is-narrow">
            <div class="card card-top">
                <header class="card-header">
                    <p class="card-header-title">
                        PENCARIAN KEBIJAKAN
                    </p>
                </header>
                <form action="{{route('prokumda')}}">
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-10 is-offset-1">
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Bentuk</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="select is-fullwidth">
                                                <select name="search" value="{{ old('search') }}">
                                                  <option value="">Pilih Bentuk Peraturan</option>
                                                  <option value="Peraturan Daerah">Peraturan Daerah</option>
                                                  <option value="Peraturan Bupati">Peraturan Bupati</option>
                                                  <option value="Propem Pemda">Propem Pemda</option>
                                                  <option value="Peraturan Desa">Peraturan Desa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Nomor Peraturan</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input
                                                    value="{{ old('search2') }}"
                                                    name="search2"
                                                    class="input"
                                                    type="text"
                                                    placeholder="Filter by Nomor Peraturan"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
    
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Tahun</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control ">
                                                <div class="select is-link is-fullwidth">
                                                    <select name="search3" value="{{ old('search3') }}">
                                                        <option value="">Pilih Tahun</option>
                                                        <option>2020</option>
                                                        <option>2019</option>
                                                        <option>2018</option>
                                                        <option>2017</option>
                                                        <option>2016</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                     
    
                                <div class="field is-horizontal">
                                    <div class="field-label is-normal">
                                        <label class="label">Tentang</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input
                                                    value="{{ old('search4') }}"
                                                    name="search4"
                                                    class="input"
                                                    type="text"
                                                    placeholder="Filter by Judul"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <button class="button is-link is-large is-fullwidth">
                            <span class="icon is-small">
                                Cari
                            </span>
                        </button>
                    </footer>
                </form>
            </div>
        </div>
    </section> --}}

    
@endsection

<script>
    bulmaCarousel.attach('#carousel-demo', {
        slidesToScroll: 1,
        slidesToShow: 4
    });
</script>