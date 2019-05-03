@extends('layouts.manage')

@section('content')

    <div class="flex-container">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">Create New User</h1>
            <hr class="m-t-0">

            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
        
            <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="columns">
                    <div class="column">                        
                        <div class="field">
                            <label for="name" class="label">Nama</label>
                            <p class="control">
                                <input type="text" class="input" name="name" id="name">
                            </p>
                        </div>

                        <div class="field">
                            <label for="username" class="label">Username</label>
                            <p class="control">
                                <input type="text" class="input" name="username" id="username">
                            </p>
                        </div>

                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <p class="control">
                                <input type="text" class="input" name="email" id="email">
                            </p>
                        </div>

                        <div class="field">
                            <label for="bio" class="label">Bio</label>
                            <p class="control">
                                <textarea class="textarea" name="bio" id="bio"></textarea>
                            </p>
                        </div>

                        <div class="field">
                            <label for="address" class="label">Address</label>
                            <p class="control">
                                <input type="text" class="input" name="address" id="address">
                            </p>
                        </div>

                        <div class="field">
                            <label for="phone" class="label">Phone</label>
                            <p class="control">
                                <input type="text" class="input" name="phone" id="phone">
                            </p>
                        </div>

                        <div class="field">
                            <label for="avatar" class="label">Avatar</label>
                            <div class="file has-name is-fullwidth">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="avatar">
                                    <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                        Choose a file…
                                    </span>
                                    </span>
                                    <span class="file-name">
                                        Screen Shot 2017-07-29 at 15.54.25.png
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <p class="control">
                                <input type="text" class="input" name="password" id="password">
                            </p>
                        </div>

                        <button class="button is-success is-fullwidth">Create New User</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
