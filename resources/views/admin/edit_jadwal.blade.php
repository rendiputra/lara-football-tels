@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Jadwal</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="/admin/jadwal/edit/{{$data->id_jadwal}}" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="row"> -->

                            <!-- <div class="col-md-6"> -->
                                <div class="form-group row">
                                    <label for="tanggallahir" class="col-md-4 col-form-label text-md-right">Tanggal</label>
                                    <div class="col-md-6">
                                        <input class="form-control"  type="date" name="tanggal" required="" value="{{ $data->tanggal }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jam" class="col-md-4 col-form-label text-md-right">Jam</label>
                                    <div class="col-md-3">
                                        <input class="form-control"  type="text" name="jam" placeholder="00.00" required="" value="{{ $data->jam }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori" class="col-md-4 col-form-label text-md-right">Kategori</label>
                                    <div class="col-md-3">
                                        <select id="kategori" class="form-control @error('nama_teams') is-invalid @enderror" name="kategori" required="" value="{{ $data->kategori }}">
                                           <option disabled="">Pilih Kategori</option>
                                           <option selected="">{{$data->kategori}}</option>
                                           <option>League</option>
                                           <option>Cup</option>
                             
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="u" class="col-md-4 col-form-label text-md-right">Divisi</label>
                                    <div class="col-md-3">
                                        <select id="u" class="form-control @error('nama_teams') is-invalid @enderror" name="u" required="">
                                           <option disabled="">-- Pilih Divisi --</option>
                                                <option selected>{{$data->u}}</option>
                                                <option>U9</option>
                                                <option>U11</option>
                                                <option>U13</option>
                             
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="grup" class="col-md-4 col-form-label text-md-right">Grup</label>
                                    <div class="col-md-3">
                                        <select id="grup" class="form-control @error('nama_teams') is-invalid @enderror" name="grup" required="">
                                           <option  disabled="">-- Pilih Grup --</option>
                                                <option selected="">{{$data->grup}}</option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                             
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat" class="col-md-4 col-form-label text-md-right">Tempat</label>
                                    <div class="col-md-6">
                                        <input class="form-control"  type="text" name="tempat" placeholder="Tempat" required="" value="{{ $data->tempat }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_teams1" class="col-md-4 col-form-label text-md-right">Nama Team 1</label>
                                    <div class="col-md-6">
                                        <select id="nama_teams1" class="form-control @error('nama_teams 1') is-invalid @enderror" name="nama_teams1" required="">
                                           <option disabled="">-- Pilih Team --</option>
                                           <option selected="">{{$data->tim1}}</option>
@foreach($team as $m)
                                           <option>{{$m->nama_teams}} </option>

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
                                    <label for="nama_teams2" class="col-md-4 col-form-label text-md-right">Nama Team 2</label>
                                    <div class="col-md-6">
                                        <select id="nama_teams2" class="form-control @error('nama_teams2') is-invalid @enderror" name="nama_teams2" required="">
                                           <option disabled="">-- Pilih Team --</option>
                                           <option selected="">{{$data->tim2}}</option>
@foreach($team as $m)
                                           <option>{{$m->nama_teams}} </option>

@endforeach                                 
                                        </select>
                                        @error('nama_teams')
                                        <div class="invalid-feedback">
                                            Nama team harus diisi
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                            
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

