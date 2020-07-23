@extends('layouts.manage')

@section('title')
    Edit Role
@endsection

@section('content')

<div class="flex-container">
    <div class="columns m-t-50">
      <div class="column is-10 is-offset-2">
        <h1 class="title">Edit {{$role->name}}</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('roles.update', $role->id)}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="columns">
        <div class="column is-4 is-offset-2">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Role Details:</h1>
                  <div class="field">
                    <p class="control">
                      <label for="name" class="label">Role</label>
                      <input type="text" class="input" name="name" value="{{$role->name}}" id="name">
                    </p>
                  </div>
                  <input type="hidden" :value="permissionsSelected" name="permissions">
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

      <div class="columns m-t-5">
        <div class="column is-4 is-offset-2">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Permissions:</h1>
                    <div class="block">
                        @foreach ($permissions as $permission)
                        <b-checkbox class="m-b-10" v-model="permissionsSelected" name="permission[]"
                            native-value="{{$permission->name}}">
                            {{$permission->name}}
                        </b-checkbox> <br>
                        @endforeach
                    </div>
                </div>
              </div>
            </article>
          </div> <!-- end of .box -->
          <div class="level-right">
            <button class="button is-primary">Save Changes to Role</button>
          </div>
        </div>
      </div>
    </form>
  </div>

@endsection

@section('scripts')
  <script>

    var app = new Vue({
      el: '#app',
      data: {
        permissionsSelected: {!!$role->permissions->pluck('name')!!}
      }
    });

  </script>
@endsection
