@extends('layouts.app')

@section('title')
    SOP
@endsection

@section('content')

    <section class="columns has-text-centered m-t-200">
        <div class="column">
            <h3 class="title is-3">SOP</h3>
            <div class="ct-section_header-separator"></div>
        </div>
    </section>

    <section class="content">
        <div class="flex-container">   
            <div class="column is-8 is-offset-2 has-text-centered">
              Untuk melihat SOP JDIH Kabupaten Kepulauan Anambas, silahkan klik link dibawah ini!<br><br>
              <a href="{{ asset('/images/sop-jdih.PDF') }}" target="_blank"><i class="fas fa-download"></i></a></td>

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
