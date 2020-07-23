@extends('layouts.manage')

@section('title')
    Manajemen Role
@endsection

@section('content')

    <div class="flex-container">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">Role Management</h1>
            <div class="column">
                <button class="button is-primary is-pulled-right" @click="newModal"><i class="fas fa-user-plus m-r-10"></i>Create New Role</button>
            </div>
            <hr class="m-t-0">

            {{-- Modal --}}
            <div class="modal" v-bind:class="{'is-active':isActive}">
                <div class="modal-background"></div>
                <form action="{{route('roles.store')}}" method="POST">
                    @csrf
                    <div class="modal-card" style="width: 640">
                        <header class="modal-card-head">
                            <p class="modal-card-title">Create New Rule</p>
                        </header>
                        <section class="modal-card-body">
                            <b-field label="Role">
                                <b-input
                                    type="text"
                                    name="name"
                                    id="name"
                                    placeholder="Your role"
                                    required>
                                </b-input>
                            </b-field>
                        </section>
                        <footer class="modal-card-foot">
                            <button class="button" type="button" @click="close">Close</button>
                            <button class="button is-primary">Create</button>
                        </footer>
                    </div>
                </form>
            </div> 
            {{-- End of Modal --}}
        
            <div class="card m-b-10">
                <div class="card-content">
                    <table class="table is-narrow is-fullwidth">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Role</th>
                                <th>Guard</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($role as $pos)
                            <tr>
                                <td>{{ $pos->id }}</td>
                                <td>{{ $pos->name }}</a></td>
                                <td>{{ $pos->guard_name }}</td>
                                <td>{{ $pos->created_at }}</td>
                                <td>
                                    <div class="columns">
                                        <div class="column is-1 m-r-10">
                                            <a class="button is-success is-small" href="{{route('roles.show', ['id'=>$pos->id])}}"><i class="fas fa-eye"></i></a>
                                        </div>
                                        <div class="column is-1">
                                            <form action="{{route('roles.destroy', ['id' => $pos->id ])}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="button is-danger is-small"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end of card -->

            {{$role->links()}}
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        var app= new Vue({
            el:'#app',
            data: {
                isActive: false
            },
            methods: {
                newModal(){
                    this.isActive = true
                },
                close(){
                    this.isActive = false
                }
            }
        });
    </script>
@endsection
  