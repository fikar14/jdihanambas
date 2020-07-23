@extends('layouts.manage')

@section('title')
    Create Produk Hukum
@endsection

@section('content')

<div class="flex-container">
    <div class="column is-10 is-offset-2 m-t-50">
        <h1 class="title m-b-5">Buat Baru Produk Hukum</h1>
        <div class="column">
            <a href="{{route('produkhukum.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New</a>
        </div>
        <hr class="m-t-0">

        @if(session('status'))
            <div class="notification is-success">
                {{session('status')}}
            </div>
        @endif
    
        <form action="{{route('prokum.search')}}">
            <div class="columns">
                <div class="column is-2">
                    <input
                        value="{{ old('search') }}"
                        name="search"
                        class="input"
                        type="text"
                        placeholder="Filter by Nomor"/>
                </div>
                <div class="column is-2">
                    <div class="select is-fullwidth">
                        <select name="search2" value="{{ old('search2') }}">
                          <option value="">Pilih Tahun</option>
                          <option>2020</option>
                          <option>2019</option>
                          <option>2018</option>
                          <option>2017</option>
                          <option>2016</option>
                          <option>2015</option>
                          <option>2014</option>
                          <option>2013</option>
                        </select>
                    </div>
                </div>
                <div class="column is-2">
                    <input
                        value="{{ old('search3') }}"
                        name="search3"
                        class="input"
                        type="text"
                        placeholder="Filter by Desa"/>
                </div>
                <div class="column is-2">
                    <input
                        value="{{ old('search4') }}"
                        name="search4"
                        class="input"
                        type="text"
                        placeholder="Filter by Judul"/>
                </div>
                <div class="column is-1">
                    <button class="button is-link">
                        <span class="icon is-small">
                            <i class="fas fa-search"></i>
                        </span>
                    </button>
                </div>
            </div>
        </form>
        
        <div class="columns">
            <div class="column">
                <div class="card-content">
                    <table class="table is-striped is-fullwidth">
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
                                        <a href="{{ asset('/storage/prokum/'.$hukum->fileupload) }}" target="_blank"><i class="fas fa-download"></a></td>
                                    @else
                                        File Kosong 
                                    @endif
                                <td>
                                    <div class="columns">
                                        <div class="column is-1 m-r-15">
                                            <a class="button is-success is-small" href="{{route('produkhukum.edit', $hukum->id)}}">
                                                <i class="fas fa-eye"></i></a>
                                        </div>
                                        <div class="column is-1">
                                            <form
                                                action="{{route('produkhukum.destroy', $hukum->id)}}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="button is-danger is-small"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{$prokum->links()}}
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
