@extends('layouts.manage')

@section('title')
    Profile
@endsection

@section('content')

    <div class="flex-container">
        <div class="columns">
            <div class="column is-10 is-offset-2 m-t-50">
                <h1 class="title m-l-10">Profile</h1>
                <hr class="m-t-0">

                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
        
                <div class="columns">
                    <div class="column is-12">
                        <section>
                            <form action="{{ route('profile.update', $profile->id) }}" 
                                method="post" 
                                enctype="multipart/form-data"
                            >
                                @csrf
                                @method('PUT')                                                       
                                <b-collapse
                                        aria-id="contentIdForA11y2"
                                        class="panel"
                                        :open.sync="isOpen">
                                    <div
                                        slot="trigger"
                                        class="panel-heading"
                                        role="button"
                                        aria-controls="contentIdForA11y2">
                                        <strong>Edit Profile JDIH</strong>
                                    </div>
                                    <b-tabs>
                                        {{-- <b-tab-item label="Visi">
                                            <blog-post :profile="profile" @profile-changed="updateProfile"></blog-post>
                                            <input type="hidden" v-model="visi" name="visi" />
                                        </b-tab-item> --}}
                                        <b-tab-item label="Visi">
                                            <textarea class="textarea" rows="20" name="visi">{{ $profile->visi }}</textarea>
                                        </b-tab-item>                       
                                        <b-tab-item label="Misi">
                                            <textarea class="textarea" rows="20" name="misi">{{ $profile->misi }}</textarea>
                                        </b-tab-item>
                                        <b-tab-item label="Tugas Pokok">
                                            <textarea class="textarea" rows="20" name="tugaspokok">{{ $profile->tugaspokok }}</textarea>
                                        </b-tab-item>
                                        <b-tab-item label="Tujuan">
                                            <textarea class="textarea" rows="20" name="tujuan">{{ $profile->tujuan }}</textarea>
                                        </b-tab-item>
                                        <b-tab-item label="Fungsi">
                                            <textarea class="textarea" rows="20" name="fungsi">{{ $profile->fungsi }}</textarea>
                                        </b-tab-item>                                     
                                        <b-tab-item label="Struktur Organisasi">
                                            <input name="struktur" type="file" id="struktur" value="{{ $profile->struktur }}"><br>
                                            {{ $profile->struktur }}
                                        </b-tab-item>
                                        <b-tab-item label="SOP">
                                            <textarea class="textarea" rows="20" name="sop">{{ $profile->sop }}</textarea>
                                        </b-tab-item>
                                    </b-tabs>
                                </b-collapse>
                                <div class="block">                                    
                                    <button class="button is-link">
                                        Simpan
                                    </button>
                                </div> 
                            </form>                    
                        </section>  
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        var app = new Vue({
            el:'#app',
            data: {
                isOpen: false,
                profile: 'apalah bro',
            },
            methods: {
                updateProfile: function(val){
                    this.profile = val;
                }
            }
        });
    </script>
@endsection