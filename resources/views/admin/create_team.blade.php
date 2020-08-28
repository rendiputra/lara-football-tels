@extends('layouts.app')


@section('title', 'Buat Tim')


@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Buat Tim</div>



                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif



                    <form method="POST" action="{{ route('create_team_admon') }}" enctype="multipart/form-data">

                        @csrf
                        

                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="u">Untuk User
						@if(Session::get('error'))
						<span style="color: red;">({{ Session::get('error') }})</span>
						@endif</label>
						        <select name="id_users" class="form-control" required>              
						            <option disabled selected> -- Pilih User --</option>
@foreach($user as $m)
						            <option value="{{ $m->id_users }}">{{ $m->email }}</option>
@endforeach						            
						        </select>
                                </div>
                            </div>
                        </div>
                            <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">

                                    <label for="u">Divisi
						@if(Session::get('error'))
						<span style="color: red;">({{ Session::get('error') }})</span>
						@endif</label>

                                    <select id="u" class="form-control" name="u" required>

                                        <option selected disabled>-- Pilih Divisi --</option>

                                        <option>U9</option>

                                        <option>U11</option>

                                        <option>U13</option>

                                    </select>

                                </div>
                            </div>
                                
                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="no_hp">No. Handphone</label>

                                    <input class="form-control" id="no_hp" type="number" name="no_hp" value="0" required>

                                </div>

                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fototim">Logo Tim<small class="text-danger"> *Maksimal file 1MB (opsional)</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fototim" class="custom-file-input" name="foto_teams">

                                        <label class="custom-file-label" for="fototim">Choose file</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="namatim">Nama Tim</label>

                                    <input class="form-control" id="namatim" type="text" name="nama_teams" required>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fotopelatih">Foto Pelatih<small class="text-danger"> *Maksimal file 1MB (opsional)</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fotopelatih" class="custom-file-input" name="foto_pelatih">

                                        <label class="custom-file-label" for="fotopelatih">Choose file</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="namapelatih">Nama Pelatih</label>

                                    <input class="form-control" id="namapelatih" type="text" name="nama_pelatih" value="-" required="">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fotoasisten">Foto Asisten<small class="text-danger"> *Maksimal file 1MB (opsional)</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fotoasisten" class="custom-file-input" name="foto_asisten">

                                        <label class="custom-file-label" for="fotoasisten">Choose file</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="namaasisten">Nama Asisten</label>

                                    <input class="form-control" id="namaasisten" type="text" name="nama_asisten" value="-" required="">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fotoofficial">Foto Official<small class="text-danger"> *Maksimal file 1MB (opsional)</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fotoofficial" class="custom-file-input" name="foto_official">

                                        <label class="custom-file-label" for="fotoofficial">Choose file</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="namaofficial">Nama Official</label>

                                    <input class="form-control" id="namaofficial" type="text" name="nama_official" value="-" required="">

                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <button class="btn btn-primary btn-block">Simpan</button>

                        </div>

                    </form>



                </div>

            </div>

        </div>

    </div>

</div>

@endsection

