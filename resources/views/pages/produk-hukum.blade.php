@extends('layouts.app')

@section('title')
    Produk Hukum
@endsection

@section('content')

    <section class="columns has-text-centered m-t-100">
        <div class="column">
            <h3 class="title is-3">Produk Hukum</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

    <section class="content m-t-50">
        <div class="columns">
            <div class="column is-3 is-offset-1">
                <form action="{{route('produk-hukum')}}" method="get">
                    <div class="field has-addons">
                        <input class="input is-fullwidth" name="q" type="text" placeholder="Cari Produk Hukum">
                        <input type="submit" value="search" class="button is-link">
                    </div>
                </form>
            </div>
        </div>
        <div class="columns">
            <div class="column is-10 is-offset-1">
                <table class="table is-fullwidth m-t-25">
                    <thead>
                        <tr>
                        <th><abbr title="No">No</abbr></th>
                        <th><abbr title="Jenis">Jenis</abbr></th>
                        <th><abbr title="Tentang">Tentang</abbr></th>
                        <th><abbr title="Tahun">Tahun</abbr></th>
                        <th><abbr title="Dokumen">Dokumen</abbr></th>
                        </tr>
                    </thead>
                    <tbody>                            
                        @foreach ($prokum as $p)
                            <tr>
                                <td>#</td>
                                <td> {{ $p->jenis }} </td>
                                <td> {{ $p->judul }} </td>
                                <td> {{ $p->tahun }} </td>
                                <td> 
                                    @if($p->fileupload) 
                                        <a href="{{ asset('storage/prokum/'.$p->fileupload) }}" target="_blank">Download</a></td>
                                    @else
                                        File Kosong 
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>         
            </div>
        </div>
    </section>

@endsection
