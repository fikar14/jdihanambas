@extends('layouts.app')

@section('title')
    Produk Hukum
@endsection

@section('content')

    <section class="columns has-text-centered m-t-200">
        <div class="column">
            <h3 class="title is-3">Produk Hukum</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

    <section class="content">
        <div class="flex-container">   
            <form action="{{route('prokumda')}}">
                <div class="columns m-t-50">
                        <div class="column is-2 is-offset-2">
                            <div class="select is-fullwidth">
                                <select name="search" value="{{ old('search') }}">
                                  <option value="">Pilih Bentuk Peraturan</option>
                                  <option value="Peraturan Daerah">Peraturan Daerah</option>
                                  <option value="Peraturan Bupati">Peraturan Bupati</option>
                                  <option value="Propem Pemda">Propem Perda</option>
                                  <option value="Peraturan Desa">Peraturan Desa</option>
                                </select>
                            </div>
                            {{-- <input
                                value="{{ old('search') }}"
                                name="search"
                                class="input"
                                type="text"
                                placeholder="Filter by Bentuk"/> --}}
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
                        <div class="column is-2">
                            <button class="button is-link">
                                <span class="icon is-small">
                                    <i class="fas fa-search"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            
                <div class="columns">
                    <div class="column is-10 is-offset-1">
                        <div class="card-content">
                            <div class="table-container">
                                <table class="table is-striped is-fullwidth">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Bentuk</th>
                                            <th>Nomor</th>
                                            <th>Tahun</th>
                                            <th>Judul</th>
                                            <th>Katalog</th>
                                            <th>Abstrak</th>
                                            <th>Unduh</th>
                                            <th>Lampiran</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($prokumda as $key => $prokum)
                                        <tr>
                                            <td>{{ $key + $prokumda->firstItem() }}</td>
                                            <td>{{ $prokum->bentuk }}</td>
                                            <td>{{ $prokum->no_per }}</td>
                                            <td>{{ $prokum->tahun }}</td>
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
                                        </tr> 

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            {{ $prokumda->links() }}
        </div>
        
    </section>

@endsection

@section('scripts')
    <script>
        var app= new Vue({
            el:'#app',
            data() {         
                return {
                    
                }       

                
            }
        });
    </script>
@endsection
