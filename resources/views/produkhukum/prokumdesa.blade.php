@extends('layouts.app')

@section('title')
    Produk Hukum
@endsection

@section('content')

    <section class="columns has-text-centered m-t-200">
        <div class="column">
            <h3 class="title is-3">Produk Hukum Desa</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

    <section class="content">
        <div class="flex-container">
            <form action="{{route('prokumde')}}">
                <div class="columns m-t-50">
                    <div class="column is-2 is-offset-2">
                        <input
                            value="{{ old('search1') }}"
                            name="search1"
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
                <div class="column is-10 is-offset-1">
                    <div class="card-content">
                        <table class="table is-striped is-fullwidth">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nomor</th>
                                    <th>Tahun</th>
                                    <th>Desa</th>
                                    <th>Judul</th>
                                    <th>Diposting tanggal</th>
                                    <th>Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;?>
                                @foreach ($prokum as $hukum)
                                <?php $no++ ;?>
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $hukum->nomor }}</td>
                                    <td>{{ $hukum->tahun }}</td>
                                    <td>{{ $hukum->desa }}</td>
                                    <td>{{ $hukum->judul }}</td>
                                    <td>{{date('d F Y', strtotime($hukum->created_at))}}</td>
                                    <td>
                                        @if($hukum->fileupload)
                                            <a href="{{ asset('/storage/prokum/'.$hukum->fileupload) }}" target="_blank"><i class="fas fa-download"></i></a></td>
                                        @else
                                            File Kosong 
                                        @endif
                                    
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{$prokum->links()}}
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
