@extends('layouts.app')



@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Edit Profil Tim</div>



                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif


<!-- {//{ route('update_team') }} -->
                    <form method="POST" action="/edit_team/{id_teams}/edit" enctype="multipart/form-data">

                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group">
        
                                    <input type="hidden" name="id_teams" value="{{ $data->id_teams }}">
        
                                    <label for="u">Divisi</label>
                                    
                                    <input type="hidden" name="u" value="{{ $data->u }}">
        
        
                                            <select id="u" class="form-control" required="" value="{{$data->u}}" disabled>
        
                                                <option selected="" disabled="">-- Pilih Divisi --</option>
        
                                                <option <?php if ($data->u == 'U9') { echo 'SELECTED'; } ?>>U9</option>
        
                                                <option <?php if ($data->u == 'U11') { echo 'SELECTED'; } ?>>U11</option>
        
                                                <option <?php if ($data->u == 'U13') { echo 'SELECTED'; } ?>>U13</option>
        
                                            </select>
        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
    
                                        <label for="no_hp">No. Handphone</label>
    
                                        <input class="form-control" id="no_hp" type="number" name="no_hp" required="" value="{{$data->no_hp}}">
    
                                    </div>
                                </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fototim">Logo Tim<small class="text-danger"> *Maksimal file 1MB</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fototim" class="custom-file-input" name="foto_teams" value="{{$data->foto_teams}}">

                                        <label class="custom-file-label" for="fototim">{{$data->foto_teams}}</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="namatim">Nama Tim</label>

                                    <input class="form-control" id="namatim" type="text" name="nama_teams" required="" value="{{$data->nama_teams}}">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fotopelatih">Foto Pelatih<small class="text-danger"> *Pastikan foto 3x4 (opsional)</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fotopelatih" class="custom-file-input" name="foto_pelatih" value="{{$data->foto_pelatih}}">

                                        <label class="custom-file-label" for="fotopelatih">{{$data->foto_pelatih}}</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="namapelatih">Nama Pelatih</label>

                                    <input class="form-control" id="namapelatih" type="text" name="nama_pelatih" required="" value="{{$data->nama_pelatih}}">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fotoasisten">Foto Asisten<small class="text-danger"> *Pastikan foto 3x4 (opsional)</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fotoasisten" class="custom-file-input" name="foto_asisten" value="{{$data->foto_asisten}}">

                                        <label class="custom-file-label" for="fotoasisten">{{$data->foto_asisten}}</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="namaasisten">Nama Asisten</label>

                                    <input class="form-control" id="namaasisten" type="text" name="nama_asisten" required="" value="{{$data->nama_asisten}}">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fotoofficial">Foto Official<small class="text-danger"> *Pastikan foto 3x4 (opsional)</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fotoofficial" class="custom-file-input" name="foto_official" value="{{$data->foto_official}}">

                                        <label class="custom-file-label" for="fotoofficial">{{$data->foto_official}}</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="namaofficial">Nama Official</label>

                                    <input class="form-control" id="namaofficial" type="text" name="nama_official" value="{{$data->nama_official}}" required="">

                                </div>

                            </div>

                        </div>
                    <div class="col-md-6">
                        <div class="form-group">

                            <button class="btn btn-primary">Simpan</button>

                            <a href="/user/dash" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>

                    </form>



                </div>

            </div>

        </div>

    </div>

</div>

@endsection

