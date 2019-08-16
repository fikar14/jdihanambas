@extends('layouts.manage')

@section('title')
    Create Profile
@endsection

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column is-10 is-offset-2 m-t-50">
                <h1 class="title m-l-10">Profil JDIH Kabupaten Kepulauan Anambas</h1>
                <hr class="m-t-0">

                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
        
                <div class="column">
                    <form action="{{ route('profile.store') }}" method="post">
                        @csrf
                        <div class="field">
                            <p class="control">
                                <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-invalid':'' }}" placeholder="Title">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('title') }}</p>
                        </div>

                        <b-field>
                            <b-input type="textarea"
                                name="profile"
                                rows="30"
                                placeholder="Content for Profile Company">
                            </b-input>
                        </b-field>
                        <button class="button is-primary">Publish</button>
                    </form>
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