@extends('layouts.manage')

@section('title')
    Edit Profile
@endsection

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column is-10 is-offset-2 m-t-50">
                <h1 class="title m-l-10">Edit Profile</h1>
                <hr class="m-t-0">

                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
        
                <form action="{{ route('profile.update', ['id' => $profile->id]) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="columns">
                        <div class="column is-9">
                            <div class="field">
                                <p class="control">
                                    <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-invalid':'' }}" placeholder="Title" value="{{old('title') ? old('title') : $profile->title}}">
                                </p>
                                <p class="alert alert-danger">{{ $errors->first('title') }}</p>
                            </div>
    
                            <b-field>
                                <b-input type="textarea"
                                    name="profile"
                                    rows="30"
                                    placeholder="Content for Profile Company"
                                    value="{{old('profile') ? old('profile') : $profile->profile}}">
                                </b-input>
                            </b-field>
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
                                                <button class="button is-success is-fullwidth">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                            
                        </div>
                    </div>
                </form>
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