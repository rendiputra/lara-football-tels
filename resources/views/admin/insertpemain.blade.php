@extends('layouts.app')


@section('title', 'Masukan Data Pemain')


@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Masukan Data Pemain</div>



                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif

				@if ($errors->any())
    				<div class="alert alert-danger">
        				<ul>
            				@foreach ($errors->all() as $error)
                				<li>{{ $error }}</li>
            				@endforeach
        				</ul>
    				</div>
				@endif

                    <form method="POST" action="{{ route('insert_player') }}" class="form-prevent" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id_teams" value="{{ $player->id_teams }}">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">

                                    <label for="nisn">NISN</label>

                                    <input class="form-control" id="nisn" type="text" name="nisn" required="">

                                </div>
                                <div id="alert" class="alert alert-danger" style="display:none;">
                                    <p>NISN Tidak ditemukan!</p>
                                </div>

                            </div>
                            
                            <div class="col-md-12">

                                <div class="form-group">

                                    <label for="namapemain">Nama Pemain</label>

                                    <input class="form-control" id="namapemain" type="text" name="nama_players" required="">

                                </div>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fotopemain">Foto Pemain<small class="text-danger"> *Pastikan foto 3x4</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fotopemain" class="custom-file-input" name="foto_players" required>

                                        <label class="custom-file-label" for="fotopemain">Choose file</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="nopunggung">Nomor Punggung</label>

                                    <input class="form-control" id="nopunggung" type="number" name="no_punggung" required="" maxlength="2" max="99">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="posisi">Posisi</label>

                                    <!--<input class="form-control" id="posisi" type="text" name="posisi" required="">-->
                                    <select class="form-control" id="posisi" name="posisi" required="">
                                        <option disabled selected>Pilih Posisi</option>
                                        <option>GK</option>
                                        <option>CB</option>
                                        <option>LB</option>
                                        <option>RB</option>
                                        <option>DMF</option>
                                        <option>AMF</option>
                                        <option>CMF</option>
                                        <option>CF</option>
                                        <option>WF</option>
                                        <option>SS</option>
                                    </select>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="tanggallahir">Tanggal Lahir</label>

		@if($player->u == "U9")
                                    <input class="form-control" id="tanggallahir" type="date" name="tanggal_lahir" min="2010-01-01" required="">
        @endif
		@if($player->u == "U11")
                                    <input class="form-control" id="tanggallahir" type="date" name="tanggal_lahir" min="2008-01-01" required="">
        @endif
		@if($player->u == "U13")
                                    <input class="form-control" id="tanggallahir" type="date" name="tanggal_lahir" min="2006-01-01" required="">
        @endif
                                </div>

                            </div>

                        </div>

                        <div class="form-group">
                            
						@if(Session::get('error'))
                                <div id="alert3" class="alert alert-danger">
						            <p>{{ Session::get('error') }}</p>
                                </div>
						@endif
                                <div id="alert2" class="alert alert-danger" style="display:none;">
                                    <p>Tanggal lahir tidak sesuai dengan Divisi {{ $player->u }}!</p>
                                </div>
<input id="tglah" type="text" name="tglah" style="width: 0.1px; height: 0.1px; border: none;" readonly>
                            <button id="button" type="submit" class="btn btn-primary btn-block button-prevent">Simpan</button>
                        <div id="data"></div>
                        </div>

                    </form>



                </div>

            </div>

        </div>

    </div>

</div>


@endsection
