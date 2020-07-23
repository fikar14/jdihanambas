@extends('layouts.manage')

@section('title')
    Create Produk Hukum
@endsection

@section('content')

<div class="flex-container">
    <div class="column is-10 is-offset-2 m-t-50">
        <h1 class="title m-b-5">Edit Produk Hukum</h1>
        <hr class="m-t-0">

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        

        <div class="columns">
            <div class="column">
                <form action="{{ route('produk-hukum-daerah.update', $prokumda->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label for=""><strong>Bentuk</strong></label>
                            <div class="control ">
                                <div class="select is-fullwidth">
                                    <select name="bentuk">
                                        <option value="Peraturan Daerah">Peraturan Daerah</option>
                                        <option value="Peraturan Bupati">Peraturan Bupati</option>
                                        <option value="Propem">Propem Perda</option>
                                        <option value="Peraturan Desa">Peraturan Desa</option>
                                    </select>
                                </div>
                            </div>
                            <p class="alert alert-danger">{{ $errors->first('Bentuk Peraturan') }}</p>
                        </div>
                        <div class="field">
                            <label for=""><strong>Singkatan Jenis</strong></label>
                            <div class="control ">
                                <div class="select is-fullwidth">
                                    <select name="singkatan_jenis">
                                        <option value="PERDA">PERDA</option>
                                        <option value="PERBUP">PERBUP</option>
                                        <option value="PROPEM PERDA">PROPEM PERDA</option>
                                        <option value="PERDES">PERDES</option>
                                    </select>
                                </div>
                            </div>
                            <p class="alert alert-danger">{{ $errors->first('Singkatan Jenis') }}</p>
                        </div>
                        <div class="field">
                            <label for=""><strong>Nomor Peraturan</strong></label>
                            <p class="control">
                                <input type="text" name="no_per" 
                                class="input {{ $errors->has('no_per') ? 'is-invalid':'' }}" 
                                value="{{$prokumda->no_per}}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('no_per') }}</p>
                        </div> 
                        <div class="field">
                            <label for=""><strong>Tahun</strong></label>
                            <p class="control">
                                <input type="text" name="tahun" value="{{$prokumda->tahun}}" class="input {{ $errors->has('tahun') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('tahun') }}</p>
                        </div> 
                        <div class="field">
                            <label for=""><strong>Tanggal Perundangan</strong></label>
                            <p class="control">
                                <input type="date" name="tgl_perundangan" value="{{$prokumda->tgl_perundangan}}" class="input">
                            </p>
                        </div>
                        <div class="field">
                            <label for=""><strong>Judul</strong></label>
                            <p class="control">
                                <input type="text" name="judul" value="{{$prokumda->judul}}" class="input {{ $errors->has('judul') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('judul') }}</p>
                        </div> 
                        <div class="field">
                            <label for=""><strong>Katalog</strong></label>
                            <p class="control">
                                <input type="text" name="katalog" value="{{$prokumda->katalog}}" class="input {{ $errors->has('katalog') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('katalog') }}</p>
                        </div>  

                        <div class="field">
                            <label for=""><strong>Status</strong></label>
                            <div class="control ">
                                <div class="select is-fullwidth">
                                    <select name="status" value="{$prokumda->status}">
                                        <option value="Baru">Baru</option>
                                        <option value="Dicabut">Dicabut</option>
                                        <option value="Mencabut">Mencabut</option>
                                        <option value="Diubah">Diubah</option>
                                        <option value="Mengubah">Mengubah</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label for=""><strong>Status Berlaku</strong></label>
                            <div class="control ">
                                <div class="select is-fullwidth">
                                    <select name="status_2" value="{$prokumda->status_2}">
                                        <option value="Berlaku">Berlaku</option>
                                        <option value="Tidak Berlaku">Tidak Berlaku</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label for=""><strong>Upload Abstrak</strong></label>
                            <p class="control">
                                <input name="abstrak" type="file" id="abstrak">
                            </p>
			    <p>{{$prokumda->abstrak}} </p>
                        </div>
                        
                        <div class="field">
                            <label for=""><strong>Upload Dokumen</strong></label>
                            <p class="control">
                                <input name="file" type="file" id="file" value="{{$prokumda->file}}">
                            </p>
			    <p>{{$prokumda->file}}</p>
                        </div>

                        <div class="field">
                            <label for=""><strong>Upload Lampiran</strong></label>
                            <p class="control">
                                <input name="lampiran" type="file" id="lampiran" value="{{$prokumda->lampiran}}">
                            </p>
			    <p>{{$prokumda->lampiran}}</p>
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
            file: '',
            status: ''
        }
    });
</script>
@endsection
