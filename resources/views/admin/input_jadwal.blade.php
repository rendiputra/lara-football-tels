@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Jadwal</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('inputjadwal1') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="row"> -->

                            <!-- <div class="col-md-6"> -->
                                <div class="form-group row">
                                    <label for="tanggallahir" class="col-md-4 col-form-label text-md-right">Tanggal</label>
                                    <div class="col-md-6">
                                        <input class="form-control"  type="date" name="tanggal"required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jam" class="col-md-4 col-form-label text-md-right">Jam</label>
                                    <div class="col-md-3">
                                        <input class="form-control"  type="text" name="jam" placeholder="JAM" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat" class="col-md-4 col-form-label text-md-right">Tempat</label>
                                    <div class="col-md-6">
                                        <input class="form-control"  type="text" name="tempat" placeholder="TEMPAT" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kategori" class="col-md-4 col-form-label text-md-right">Kategori</label>
                                    <div class="col-md-3">
                                        <select id="kategori" class="form-control @error('nama_teams') is-invalid @enderror" name="kategori" required="">
                                           <option selected="" disabled="">Pilih Kategori</option>
                                           <option>League</option>
                                           <option>Cup</option>
                             
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="u" class="col-md-4 col-form-label text-md-right">Divisi</label>
                                    <div class="col-md-3">
                                        <select id="u" class="form-control @error('nama_teams') is-invalid @enderror" name="u" required="">
                                           <option selected="" disabled="">-- Pilih Divisi --</option>
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
                                           <!--<option selected="" disabled="">-- Pilih Grup --</option>-->
                                                <!--<option>A</option>-->
                                                <!--<option>B</option>-->
                                                <!--<option>C</option>-->
                                                <option>Semi</option>
                                                <option>Final</option>
                             
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="teams">
                                    <a href="#" class="btn btn-primary" id="btnz" onclick="get_real_teams()">Ambil Teams</a>
                                </div>
                                <div style="display:none" id="teamss">
                                    <div class="form-group row">
                                        <label for="nama_teams1" class="col-md-4 col-form-label text-md-right">Nama Team 1</label>
                                        <div class="col-md-6">
                                            <select id="nama_teams1" class="form-control @error('nama_teams 1') is-invalid @enderror" name="nama_teams1" required="">
                                               <option selected="" disabled="">-- Pilih Team --</option>
                              
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
                                               <option selected="" disabled="">-- Pilih Team --</option>
    
                                            </select>
                                            @error('nama_teams')
                                            <div class="invalid-feedback">
                                                Nama team harus diisi
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
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
@section('js')
<script>
        function get_real_teams() {
            $.ajax({
               type:'GET',
               url:'{{ url('/') }}/admin/get_teams_as_u/'+document.getElementById('u').value+'/'+document.getElementById('grup').value,
               success:function(data) {
                   document.getElementById('teamss').style.display = "block";
                   document.getElementById('btnz').style.display = "none";
                   document.getElementById('nama_teams1').innerHTML = data;
                   document.getElementById('nama_teams2').innerHTML = data;
               }
            });
        }
</script>
@endsection
