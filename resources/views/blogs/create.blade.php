@extends('layouts.manage')

@section('content')
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-10 is-offset-2 m-t-50">
                <h1 class="title m-b-5">Create New Post</h1>
                <hr class="m-t-5">
                <div class="columns">
                    <div class="column is-9 m-l-15">
                        <form action="{{ route('blog.store') }}" method="POST">
                            @csrf
                            <div class="field">
                                <div class="control is-large">
                                    <input class="input is-large" type="text" placeholder="Title" v-model="title">
                                </div>
                            </div>
                            <slug-widget url="{{url('/blog')}}/" :title="title" @slug-changed="updateSlug"></slug-widget>
                            <br>
                            <b-field>
                                <b-input type="textarea"
                                    rows="30"
                                    placeholder="Make original content don't copy paste!!!">
                                </b-input>
                            </b-field>
            
                        </form>
                    </div> <!-- end of is-three-quarters -->
                    <div class="column is-3 m-l-20">
                        <div class="card">
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
                                <div class="media">
                                    <div class="media-content">
                                    <p class="is-size-7 has-text-centered"><strong>Draft Saved</strong> a few minutes ago (saved)</p>
                                    </div>
                                </div>
                                <div class="columns is-variable is-1">
                                    <div class="column is-6 save-draft">
                                        <button class="button is-link is-outlined is-fullwidth">Save Draft</button>
                                    </div>
                                    <div class="column is-6 publish-button">
                                        <button class="button is-success is-fullwidth">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div> <!-- end of Columns -->

    </div>

@endsection

@section('scripts')
    <script>
        var app= new Vue({
            el:'#app',
            data: {
                title: '',
                slug: ''
            },
            methods: {
                updateSlug: function(val){
                    this.slug = val;
                }
            }
        });
    </script>
@endsection