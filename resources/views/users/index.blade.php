@extends('layouts.manage')

@section('title')
    Manajemen User
@endsection

@section('content')

    <div class="flex-container">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">User Management</h1>
            <div class="column">
                <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
            </div>
            <hr class="m-t-0">
        
            <div class="card m-b-10">
                <div class="card-content">
                    <table class="table is-narrow is-fullwidth">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td><a href="{{route('users.show', ['id' => $user->id])}}">{{ $user->name }}</a></td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->getRoleNames() as $role)
                                        {{ $role }}
                                    @endforeach
                                </td>
                                <td>{{ $user->status }}</td>
                                <td>
                                    <div class="columns">
                                        <div class="column is-1 m-r-15">
                                            <a class="button is-success is-small" href="{{route('users.show', ['id'=>$user->id])}}"><i class="fas fa-eye"></i></a>
                                        </div>
                                        <div class="column is-1">
                                            <form action="{{route('users.destroy', ['id' => $user->id ])}}" method="POST">
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

            {{$users->links()}}
        </div>
    </div>

@endsection
  