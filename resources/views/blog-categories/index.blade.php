@extends('layouts.manage')

@section('title')
    Blog Categories
@endsection

@section('content')

    <div class="columns">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">Blog Posts</h1>
            <hr class="m-t-5">

            {{-- Modal --}}
            <div class="modal" v-bind:class="{'is-active':isActive}">
                <div class="modal-background"></div>
                <form action="{{route('blog-categories.store')}}" method="POST">
                    @csrf
                    <div class="modal-card" style="width: 640">
                        <header class="modal-card-head">
                            <p class="modal-card-title">Create New Category</p>
                        </header>
                        <section class="modal-card-body">
                            <div class="field">
                                <p class="control">
                                    <input type="text" name="name" class="input" placeholder="Name Category" v-model="name">
                                </p>
                            </div>
                            <div class="field">
                                <slug-category url="{{url('/blog-category')}}/" :name="name" @slug-changed="updateSlug"></slug-category>
                                <input type="hidden" v-model="slug" name="slug" />
                            </div>
                            <div class="field">
                                <p class="control">
                                    <input type="file" name="cover" id="cover">
                                </p>
                            </div>
                        </section>
                        <footer class="modal-card-foot">
                            <button class="button" type="button" @click="close">Close</button>
                            <button class="button is-primary">Create</button>
                        </footer>
                    </div>
                </form>
            </div> {{-- End of Modal --}}
            
            <div class="columns">
                <div class="column">                           
                    <div class="card-content">
                        <a class="button is-primary" @click="newModal"><i class="fa fa-user-plus m-r-10"></i> Category</a>                        
                        <table class="table is-narrow is-fullwidth m-t-20">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Kategori</th>
                                    <th>Slug</th>
                                    <th>Cover</th>
                                    <th>Created_at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogcategories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->cover }}</td>
                                        <td>{{ $category->created_at }}</td>
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

@section('scripts')
    <script>
        var app= new Vue({
            el:'#app',
            data: {
                name: '',
                slug: '',
                cover: null,
                isActive: false
            },
            methods: {
                updateSlug: function(val){
                    this.slug = val;
                },
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
  