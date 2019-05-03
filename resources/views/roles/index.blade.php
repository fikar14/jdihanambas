@extends('layouts.manage')

@section('content')

    <div class="flex-container">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">Role Management</h1>
            <div class="column">
                {{-- <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Role</a> --}}
                <role-create role-route="{{ route('roles.store') }}"></role-create>
            </div>
            <hr class="m-t-0">
        
            <div class="card m-b-10">
                <div class="card-content">
                    <table class="table">
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
                                <td><a href="{{route('roles.show', ['id' => $pos->id])}}">{{ $pos->name }}</a></td>
                                <td>{{ $pos->guard_name }}</td>
                                <td>{{ $pos->created_at }}</td>
                                <td>{{ $pos->status }}</td>
                                <td>
                                    <form action="{{route('roles.destroy', ['id' => $pos->id ])}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="button is-danger is-small"><i class="fas fa-trash-alt"></i></button>
                                    </form>
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
                
            }
        });
    </script>
@endsection
  