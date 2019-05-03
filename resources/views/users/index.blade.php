@extends('layouts.manage')

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
                    <table class="table is-narrow">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Avatar</th>
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
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>
                                    @if($user->avatar)
                                        <img src="{{asset('storage/'.$user->avatar)}}" width="70px"/>
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $user->status }}</td>
                                <td>
                                    {{-- <a href="{{route('users.edit', ['id' => $user->id])}}" class="button is-link is-small"><i class="fas fa-edit"></i></a> --}}
                                    <form action="{{route('users.destroy', ['id' => $user->id ])}}" method="POST">
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

            {{$users->links()}}
        </div>
    </div>

@endsection
  