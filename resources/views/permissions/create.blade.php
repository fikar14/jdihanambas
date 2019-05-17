@extends('layouts.manage')

@section('title')
    Create New Permission
@endsection

@section('content')
  <div class="flex-container">
    <div class="columns m-t-50">
      <div class="column is-6 is-offset-2">
        <h1 class="title">Create New Permission</h1>
      </div>
    </div>
    <hr class="m-t-0">

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <div class="columns">
      <div class="column is-6 is-offset-2">
        <form action="{{route('permissions.store')}}" method="POST">
          {{csrf_field()}}

          <div class="block">
            <a class="button is-primary" @click=basicPermission>Basic Permission</a>
            <a class="button is-link" @click=crudPermission>CRUD Permission</a>
          </div>

          <div class="field" v-show="showBasic">
            <label for="name" class="label">Name</label>
            <p class="control">
              <input type="text" class="input {{$errors->first('name') ? "is-invalid" : ""}}" name="name" id="name" placeholder="Permission">
            </p>
            <p class="alert alert-danger">{{ $errors->first('name') }}</p>
          </div>

          <div class="field" v-show="showCrud">
            <label for="resource" class="label">Resource</label>
            <p class="control">
              <input type="text" class="input" name="resource" id="resource" v-model="resource" placeholder="The name of the resource">
            </p>
          </div>

          <div class="columns" v-show="showCrud">
            <div class="column is-6 m-t-20">
                <div class="field">
                  <b-checkbox native-value="create" v-model="crudSelected">Create</b-checkbox>
                </div>
                <div class="field">
                  <b-checkbox native-value="read" v-model="crudSelected">Read</b-checkbox>
                </div>
                <div class="field">
                  <b-checkbox native-value="update" v-model="crudSelected">Update</b-checkbox>
                </div>
                <div class="field">
                  <b-checkbox native-value="delete" v-model="crudSelected">Delete</b-checkbox>
                </div>
            </div> <!-- end of .column -->

            <input type="hidden" name="crud_selected" :value="crudSelected">

            <div class="column is-6">
              <table class="table" v-if="resource.length >= 3">
                <thead>
                  <th>Name</th>
                </thead>
                <tbody>
                  <tr v-for="item in crudSelected">
                    <td v-text="crudName(item)"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <button class="button is-primary">Create Permission</button>
        </form>
      </div>
    </div>

  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        showBasic: true,
        showCrud: false,
        resource: '',
        crudSelected: ['create', 'read', 'update', 'delete']
      },
      methods: {
        crudName: function(item) {
          return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
        basicPermission : function(){
          this.showBasic = true;
          this.showCrud = false;
		},
        crudPermission : function(){
          this.showBasic = false;
          this.showCrud = true;
		}
      }
    });
  </script>
@endsection
