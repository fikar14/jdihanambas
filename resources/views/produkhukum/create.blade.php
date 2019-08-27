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
                <form action="{{ route('produk-hukum.store') }}" method="post">
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
                            <div class="file has-name">
                                <label class="file-label">
                                  <input class="file-input" type="file" name="file">
                                  <span class="file-cta">
                                    <span class="file-icon">
                                      <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                      Choose a file…
                                    </span>
                                  </span>
                                  <span class="file-name">
                                    Screen Shot 2017-07-29 at 15.54.25.png
                                  </span>
                                </label>
                            </div>           
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
