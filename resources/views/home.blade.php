@extends('layouts.manage')

@section('title')
    Dashboard
@endsection

@section('content')

  <div class="flex-container">
    <div class="columns">
        <div class="column is-10 is-offset-2 m-t-50">
            <h1 class="title m-b-5">Dashboard</h1>
            <hr class="m-t-5">
            <div class="columns">
              <div class="column m-t-20 m-l-20">
                <div class="tile is-ancestor">
                    <div class="tile is-6 is-vertical">
                      <div class="tile is-child box">
                        <p class="title">Perhatian !</p>
                        <p>Selamat datang di aplikasi JDIH Anambas. Aplikasi ini masih jauh dari sempurna, bila ada error/bugs mohon dilaporkan ke Diskominfotik Anambas. Aplikasi ini disupport oleh E-Gov Anambas. Terimakasih!</p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>
  

@endsection