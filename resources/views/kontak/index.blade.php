@extends('layouts.manage')

@section('title')
    Contact
@endsection

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column is-10 is-offset-2 m-t-50">
                <h1 class="title m-l-10">Contact</h1>
                <hr class="m-t-0">

                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
        
                <div class="columns">
                    <div class="column is-9">
                        <div class="field">
                            <h3 class="title is-size-6">Data List Kontak</h2>
                        </div>
                        <div class="field m-t-20">
                            Kontak
                        </div>

                    </div>
                    <div class="column is-3">
                        <div class="card m-r-20">
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-left">
                                    <figure class="image is-48x48">
                                        <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                    </figure>
                                    </div>
                                    <div class="media-content">
                                        <p class="title is-5">Zulfikar</p>
                                        <p class="subtitle is-6">@fikar14</p>
                                    </div>
                                </div>
                                <div class="columns is-variable is-1">
                                    <div class="column is-full publish-button">
                                        <a href="#" class="button is-success is-fullwidth"></i>Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el:'#app',
            data() {
                return {

                }
            }
        });
    </script>
@endsection