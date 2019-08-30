@extends('layouts.manage')

@section('title')
    Create Produk Hukum
@endsection

@section('content')

<div class="flex-container">
    <div class="column is-10 is-offset-2 m-t-50">
        <h1 class="title m-b-5">Buat Baru Produk Hukum</h1>
        <hr class="m-t-0">

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
    
        <div class="columns">
            <div class="column">
                <form action="{{ route('produk-hukum.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="field">
                            <label for="">Jenis Produk Hukum</label>
                            <p class="control">
                                <input type="text" name="jenis" class="input {{ $errors->has('jenis') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('jenis') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Nomor</label>
                            <p class="control">
                                <input type="text" name="nomor" class="input {{ $errors->has('nomor') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('nomor') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Judul</label>
                            <p class="control">
                                <input type="text" name="judul" class="input {{ $errors->has('judul') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('judul') }}</p>
                        </div>    
                        <div class="field">
                            <label for="">Tahun</label>
                            <p class="control">
                                <input type="text" name="tahun" class="input {{ $errors->has('tahun') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('tahun') }}</p>
                        </div> 
                        
                        <div class="field">

                            <input name="fileupload" type="file" id="file" id="fileupload">


                            {{-- <b-field class="file" name="fileupload" id="fileupload" >
                                <b-upload v-model="file" name="fileupload" id="fileupload">
                                    <a class="button is-primary">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span>Click to upload</span>
                                    </a>
                                </b-upload>
                                    <span class="file-name" v-if="file">
                                        @{{ file.name }}
                                    </span>
                            </b-field> --}}
                        </div>
                        
                        <div class="field">
                            <button class="button is-success is-fullwidth">
                                Simpan
                            </button>
                        </div>
                    </form>  
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    var app= new Vue({
        el:'#app',
        data: {
            file: ''
        }
    });
</script>
@endsection
