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
                <form action="{{ route('produkhukum.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="field">
                            <label for="">Nomor</label>
                            <p class="control">
                                <input type="text" name="nomor" class="input {{ $errors->has('nomor') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('nomor') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Tahun</label>
                            <p class="control">
                                <input type="text" name="tahun" class="input {{ $errors->has('tahun') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('tahun') }}</p>
                        </div> 
                        <div class="field">
                            <label for="">Desa</label>
                            <p class="control">
                                <input type="text" name="desa" class="input {{ $errors->has('desa') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('desa') }}</p>
                        </div>
                        <div class="field">
                            <label for="">Judul</label>
                            <p class="control">
                                <input type="text" name="judul" class="input {{ $errors->has('judul') ? 'is-invalid':'' }}">
                            </p>
                            <p class="alert alert-danger">{{ $errors->first('judul') }}</p>
                        </div>    
                        
                        <div class="field">
                            <input name="fileupload" type="file" id="fileupload">
                        </div>
                        
                        <div class="field">
                            <button class="button is-link is-fullwidth">
                                Simpan
                            </button>
                        </div>
                    </form>  
            </div>
        </div>
        {{-- <div class="columns">
            <div class="column">
                <div class="card-content">
                    <table class="table is-narrow is-fullwidth">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Tahun</th>
                                <th>Desa</th>
                                <th>Judul</th>
                                <th>Diposting tanggal</th>
                                <th>Dokumen</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prokum as $hukum)
                            <tr>
                                <td>{{ $hukum->nomor }}</td>
                                <td>{{ $hukum->tahun }}</td>
                                <td>{{ $hukum->desa }}</td>
                                <td>{{ $hukum->judul }}</td>
                                <td>{{date('d F Y', strtotime($hukum->created_at))}}</td>
                                <td>
                                    @if($hukum->fileupload)
                                        <a href="{{ asset('storage/prokum/'.$hukum->fileupload) }}" target="_blank">{{ $hukum->fileupload }}</a></td>
                                    @else
                                        File Kosong 
                                    @endif
                                <td>
                                    <div class="columns">
                                        <div class="column is-1 m-r-15">
                                            <a class="button is-success is-small" href="#"><i class="fas fa-eye"></i></a>
                                        </div>
                                        <div class="column is-1">
                                            <a class="button is-danger is-small" href="#"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
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
