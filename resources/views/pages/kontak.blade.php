@extends('layouts.app')

@section('title')
    Kontak
@endsection

@section('content')

    <section class="columns has-text-centered m-t-100">
        <div class="column">
            <h3 class="title is-3">Kritik & Saran</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

    <section class="kritik-saran m-t-20">
        <div class="container">
            <div class="columns">
                <div class="column is-8 is-offset-2 m-b-100">
                    <p class="has-text-centered m-b-50">
                        Kritik dan saran anda kami persilahkan disini. Bila saran dan kritikan bisa merubah kami menjadi lebih baik, maka akan kami lakukan dengan senang hati. Terimakasih.
                    </p>
                    <!-- form goes here -->
                    <form>

                        <!-- name -->
                        <div class="field">
                        <input type="text" name="name" class="input" placeholder="Your Name">
                        </div>
                    
                        <!-- email -->
                        <div class="field">
                        <input type="email" name="email" class="input" placeholder="Your Email">
                        </div>
                    
                        <!-- message -->
                        <div class="field">
                        <textarea class="textarea" name="message" placeholder="What's on your mind?"></textarea>
                        </div>
                    
                        <button type="submit" class="button is-link is-fullwidth is-large">Kirim</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
