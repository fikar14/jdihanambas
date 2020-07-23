@extends('layouts.manage')

@section('title')
    Produk Hukum
@endsection

@section('content')

<div class="flex-container">
    <div class="column is-10 is-offset-2 m-t-50">
        <h1 class="title m-b-5">Produk Hukum</h1>
        <div class="column">
            <a href="{{route('produk-hukum-daerah.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New</a>
        </div>
        <hr class="m-t-0">

        @if(session('status'))
            <div class="notification is-success">
                {{session('status')}}
            </div>
        @endif

        {{-- Modal --}}
        {{-- <div class="modal" v-bind:class="{'is-active':isActive}">
            <div class="modal-background"></div>
            <form action="#" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-card" style="width: 640">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Update Produk Hukum</p>
                    </header>
                    <section class="modal-card-body">
                        <label for="">Update</label>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="close">Close</button>
                        <button class="button is-primary">Create</button>
                    </footer>
                </div>
            </form>
        </div>  --}}
        {{-- End of Modal --}}
            
        <form action="{{route('search')}}">
        <div class="columns">
                <div class="column is-2">
                    {{-- <input
                        value="{{ old('search') }}"
                        name="search"
                        class="input"
                        type="text"
                        placeholder="Filter by Bentuk"/> --}}
                    <div class="select is-fullwidth">
                        <select name="search" value="{{ old('search') }}">
                            <option value="">Pilih Bentuk Peraturan</option>
                            <option value="Peraturan Daerah">Peraturan Daerah</option>
                            <option value="Peraturan Bupati">Peraturan Bupati</option>
                            <option value="Propem Perda">Propem Pemda</option>
                            <option value="Peraturan Desa">Peraturan Desa</option>
                        </select>
                    </div>
                </div>
                <div class="column is-2">
                    <input
                        value="{{ old('search2') }}"
                        name="search2"
                        class="input"
                        type="text"
                        placeholder="Filter by Nomor Peraturan"/>
                </div>
                <div class="column is-2"> 
                    <div class="select is-fullwidth">
                        <select name="search3" value="{{ old('search3') }}">
                          <option value="">Pilih Tahun</option>
                          <option>2020</option>
                          <option>2019</option>
                          <option>2018</option>
                          <option>2017</option>
                          <option>2016</option>
                        </select>
                    </div>
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
                                <th>Bentuk</th>
                                <th>Singkatan Jenis</th>
                                <th>Nomor</th>
                                <th>Tahun</th>
                                <th>TglPer</th>
                                <th>Judul</th>
                                <th>Katalog</th>
                                <th>Abstrak</th>
                                <th>File</th>
                                <th>Lampiran</th>
                                <th>Status</th>
                                <th>Status Berlaku</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prokumda as $prokum)
                            <tr>
                                <td>{{ $prokum->bentuk }}</td>
                                <td>{{ $prokum->singkatan_jenis }}</td>
                                <td>{{ $prokum->no_per }}</td>
                                <td>{{ $prokum->tahun }}</td>
                                <td>{{ $prokum->tgl_perundangan }}</td>
                                <td>{{ $prokum->judul }}</td>
                                <td>{{ $prokum->katalog }}</td>
                                <td>
                                    @if($prokum->abstrak != "nofile")
                                        <a href="{{ asset('/storage/abstrak/'.$prokum->abstrak) }}" target="_blank"><i class="fas fa-download"></i></a></td>
                                    @else
                                        - 
                                    @endif    
                                </td>
                                <td>
                                    @if($prokum->file != "nofile")
                                        <a href="{{ asset('/storage/prokumda/'.$prokum->file) }}" target="_blank"><i class="fas fa-download"></i></a></td>
                                    @else
                                       - 
                                    @endif
                                </td>
                                <td>
                                    @if($prokum->lampiran != "nofile")
                                        <a href="{{ asset('/storage/lampiran/'.$prokum->lampiran) }}" target="_blank"><i class="fas fa-download"></i></a></td>
                                    @else
                                       -
                                    @endif
                                </td>
                                <td>{{ $prokum->status }}</td>
                                <td>{{ $prokum->status_2 }}</td>
                                <td>
                                    <div class="columns">
                                        <div class="column is-1 m-r-15">
                                            <a 
                                                class="button is-success is-small" 
                                                href="{{route('produk-hukum-daerah.edit', $prokum->id)}}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="column is-1">
                                            <form
                                                action="{{route('produk-hukum-daerah.destroy', $prokum->id)}}"
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
        {{$prokumda->links()}}
    </div>
</div>

@endsection

@section('scripts')
<script>
    var app= new Vue({
        el:'#app',
        data: {
            file: '',
            isActive: false
        },
        methods: {
            
        }
    });
</script>
@endsection
