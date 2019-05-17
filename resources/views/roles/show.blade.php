@extends('layouts.manage')

@section('title')
    Roles Details
@endsection

@section('content')

    <div class="flex-container">
        <div class="column is-4 is-offset-2 m-t-50">
            <h1 class="title m-b-5">Role</h1>
            <hr class="m-t-0">

            <div class="card">
                <header class="card-header">
                  <p class="card-header-title">
                    Role Details
                  </p>
                </header>
                <div class="card-content">
                  <div class="content">
                    <p class="title is-size-2">{{$role->name}}</p> 
                    <p class="subtitle is-size-6">Created at: {{$role->created_at}}</p>
                  </div>
                </div>
            </div>
        </div>
        
        <div class="column is-4 is-offset-2 m-t-5">            
            <div class="box">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                        <h4 class="title">Role Permissions:</h4>
                            <div class="block">
                                @foreach ($role->permissions as $pos)
                                <ul>
                                    <li>
                                        {{ $pos->name }}
                                    </li>
                                </ul>  
                                @endforeach  
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="level-right">
                <a href="{{route('roles.edit', $role->id)}}" class="button is-success is-focused m-b-20">Edit Role Permissions</a>
            </div>
        </div>
    </div>

@endsection
