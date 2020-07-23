@extends('layouts.app')

@section('title')
    Dasar Hukum JDIH
@endsection

@section('content')

    <section class="columns has-text-centered m-t-200">
        <div class="column">
            <h3 class="title is-3">Dasar Hukum JDIH</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

    <section class="content">
        <div class="flex-container">   
            <div class="column is-8 is-offset-2">
              a.	Peraturan Presiden Nomor 33 Tahun 2012 tentang Jaringan Dokumentasi Dan Informasi Hukum Nasional;<br>
              b.	Peraturan Menteri Dalam Negeri Nomor 2 Tahun 2014 tentang Pengelolaan Jaringan Dokumentasi dan Informasi Hukum Kementrian Dalam Negeri dan Pemerintah Daerah;<br>
              c.	Peraturan Gubernur Kepulauan Riau Nomor 06 Tahun 2013 tentang Jaringan Dokumentasi dan Informas Hukum Provinsi Kepulauan Riau;<br>
              d.	Peraturan Bupati Kepulauan Anambas Nomor 43 Tahun 2018 tentang Jaringan Dokumentasi dan Informas Hukum Kabupaten Kepulauan Anambas.

            </div>
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
