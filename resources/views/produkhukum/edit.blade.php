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
            <div class="notification is-success">
                {{session('status')}}
            </div>
        @endif
    
        <div class="columns">
            <div class="column">
                <form action="{{ route('produkhukum.update', $prokum->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label for="">Nomor</label>
                            <p class="control">
                                <input type="text" name="nomor" value="{{$prokum->nomor}}" class="input {{ $errors->has('nomor') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('nomor') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Tahun</label>
                            <p class="control">
                                <input type="text" name="tahun" value="{{$prokum->tahun}}" class="input {{ $errors->has('tahun') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('tahun') }}</p>
                        </div> 
                        <div class="field">
                            <label for="">Desa</label>
                            <p class="control">
                                <input type="text" name="desa" value="{{$prokum->desa}}" class="input {{ $errors->has('desa') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('desa') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Judul</label>
                            <p class="control">
                                <input type="text" name="judul" value="{{$prokum->judul}}" class="input {{ $errors->has('judul') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('judul') }}</p>
                        </div>    
                        
                        <div class="field">
                            <input name="fileupload" type="file" id="fileupload" value="{{$prokum->fileupload}}">
                        </div>
                        
                        <div class="field">
                            <button class="button is-link is-fullwidth">
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
