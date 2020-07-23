@extends('layouts.manage')

@section('title')
    User Details
@endsection

@section('content')

    <div class="flex-container">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">User Profil</h1>
            <hr class="m-t-0">

            {{$user->name}}
        </div>
    </div>

@endsection
  