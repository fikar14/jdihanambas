@extends('layouts.manage')

@section('title')
    Manajemen Blog Posts
@endsection

@section('content')

    <div class="columns">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">Blog Posts</h1>
            <hr class="m-t-5">
            
            <div class="columns">
                <div class="column">
                    <div class="card-content">
                        <table class="table is-narrow is-fullwidth">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Title</th>
                                    <th>Blog</th>
                                    <th>Posting By</th>
                                    <th>View</th>
                                    <th>Status</th>
                                    <th>Created_at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{!! $post->blog !!}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>{{ $post->views }}</td>
                                        <td>{{ $post->status }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>
                                            VIEW & EDIT & DELETE
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>    
                    </div>         
                </div> <!-- end of is-three-quarters -->
            </div>
        </div>
    </div>

@endsection
  