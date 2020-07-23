@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100 m-b-100">
        <div class="card">
            <div class="card-content">
                <div class="title">Log In</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field">
                            <label for="username" class="label">Username</label>
                            <p class="control has-icons-left">
                            <input class="input {{$errors->has('username') ? 'is-danger' : ''}}" type="text" name="username" id="username" placeholder="username" value="{{old('username')}}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            </p>
                            @if ($errors->has('username'))
                            <p class="help is-danger">{{$errors->first('username')}}</p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <p class="control has-icons-left">
                            <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
                            <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            </p>
                            @if ($errors->has('password'))
                            <p class="help is-danger">{{$errors->first('password')}}</p>
                            @endif

                        </div>

                        <div class="field">
                            <div class="field">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <div class="field">
                                <button type="submit" class="button is-link is-outlined is-fullwidth">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection