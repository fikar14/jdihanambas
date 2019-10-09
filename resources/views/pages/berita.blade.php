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
                    <div class="column is-3">
                        <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                    </div>
                    <div class="column is-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                        <p>12 Aug 2017</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="column is-4">
            <div class="card">
            <div class="card-header">
                <p class="card-header-title">Berita #2</p>
            </div>
            <div class="card-content">
                <div class="columns">
                    <div class="column is-3">
                        <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                    </div>
                    <div class="column is-9">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                        <p>12 Aug 2017</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="column is-4 is-offset-2">
            <div class="card">
            <div class="card-header">
                <p class="card-header-title">Berita #3</p>
            </div>
                <div class="card-content">
                    <div class="columns">
                        <div class="column is-3">
                            <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                        </div>
                        <div class="column is-9">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                            <p>12 Aug 2017</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card">
                <div class="card-header">
                    <p class="card-header-title">Berita #4</p>
                </div>
                <div class="card-content">
                    <div class="columns">
                        <div class="column is-3">
                            <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                        </div>
                        <div class="column is-9">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                            <p>12 Aug 2017</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="column is-4 is-offset-2">
                    <div class="card">
                    <div class="card-header">
                        <p class="card-header-title">Berita #5</p>
                    </div>
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="card">
                    <div class="card-header">
                        <p class="card-header-title">Berita #6</p>
                    </div>
                    <div class="card-content">
                        <div class="columns">
                            <div class="column is-3">
                                <img class="card-img-content" src="{{ asset('images/jdih-anambas.png') }}">
                            </div>
                            <div class="column is-9">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</p>
                                <p>12 Aug 2017</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
        </section>
        </section>

        <section class="columns has-text-centered m-t-100">
            <div class="column">
                <h3 class="title is-3">Informasi Penting</h3>
                <div class="ct-section_header-separator"></div>
            </div>
        </section>

        <section class="informasi">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum enim ullam architecto a rem eius ipsum debitis dolor, atque explicabo maiores asperiores, nesciunt ut tempora ab iure quam sed quaerat hic excepturi minima facere blanditiis incidunt reiciendis! Excepturi tempore, veniam voluptas blanditiis cum, pariatur, facilis id ducimus consectetur eum assumenda quibusdam quo delectus iusto nisi maxime exercitationem ipsa expedita vitae tenetur corrupti perspiciatis reiciendis in similique! Itaque, aut suscipit explicabo exercitationem, voluptas quibusdam quas consequatur ratione praesentium ea quod ad natus nisi sapiente animi a repudiandae laudantium repellat officia dolorem beatae autem temporibus et magni. Est voluptatem nobis deserunt sequi!
                        </p>
                    </div>
                </div>
            </div>
        </section>

@endsection
