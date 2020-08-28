@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Klasemen</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('inputklasemen1') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="row"> -->

                            <!-- <div class="col-md-6"> -->
                                <div class="form-group row">
                                    <label for="nama_teams" class="col-md-4 col-form-label text-md-right">Nama Team</label>

                                    <div class="col-md-6">
                                        <select id="nama_teams" class="form-control @error('nama_teams') is-invalid @enderror" name="nama_teams" required="">
                                           <option selected="" disabled="">-- Pilih Team --</option>
@foreach($data as $m)
                                           <option value="{{$m->nama_teams}}">{{$m->nama_teams}} - {{ $m->u }} </option>

@endforeach                                 
                                        </select>
                                        @error('nama_teams')
                                        <div class="invalid-feedback">
                                            Nama team harus diisi
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_teams" class="col-md-4 col-form-label text-md-right">Pilih Grup</label>

                                    <div class="col-md-6">
                                        <select id="grup" class="form-control @error('nama_teams') is-invalid @enderror" name="grup" required="">
                                                <option selected="" disabled="">-- Pilih Grup --</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                            </select>
                                            @error('nama_teams')
                                            <div class="invalid-feedback">
                                                Harus memilih grup
                                            </div>
                                            @enderror
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="u">Nama Team</label>
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <select id="nama_teams" class="form-control" name="nama_teams" required="">
                                                <option selected="" disabled="">-- Pilih Team --</option>
@foreach($data as $m)
                                                <option>{{$m->nama_teams}} </option>

@endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- </div> -->
                            <!-- <div class="col-md-6"> -->
                                <!-- <div class="form-group">
                                    <label for="u">Kategori Divisi</label>
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <select id="u" class="form-control" name="u" required="">
                                                <option selected="" disabled="">-- Pilih Divisi --</option>
                                                <option>U9</option>
                                                <option>U11</option>
                                                <option>U13</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- </div> -->
                            <!-- <div class="col-md-6"> -->
                           <!--      <div class="form-group">
                                    <label for="u">Grup</label>
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <select id="grup" class="form-control" name="grup" required="">
                                                <option selected="" disabled="">-- Pilih Grup --</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                            <!-- </div> -->
                            
                        <!-- </div> -->
                        <div class="form-group  text-center">
                            <button class="btn btn-primary col-md-6">Simpan</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

