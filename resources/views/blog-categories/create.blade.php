@extends('layouts.manage')

@section('title')
    Create New Blog Post
@endsection

@section('content')
    <div class="flex-container">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">Create New Post</h1>
            <hr class="m-t-5">

            @if(session('status'))
				<div class="alert alert-success">
					{{session('status')}}
				</div>
			@endif

            <div class="columns">
                <div class="column">
                    <form action="{{ route('blog-categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="columns">
                            <div class="column is-9">
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
                                <div class="columns is-variable is-1">
                                    <div class="column publish-button">
                                        <button class="button is-success is-fullwidth" value="PUBLISH">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> <!-- end of form -->                        
                </div> <!-- end of is-three-quarters -->
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        var app= new Vue({
            el:'#app',
            data() {         
                return {
                    name: '',
                    slug: '',
                    cover: null
                }       
            },
            methods: {
                updateSlug: function(val){
                    this.slug = val;
                }
            }
        });
    </script>
@endsection
