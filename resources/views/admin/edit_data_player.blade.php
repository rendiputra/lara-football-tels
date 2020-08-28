@extends('layouts.app')


@section('title', 'Edit Data Pemain')


@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Edit Data Pemain</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <form method="POST" action="{{ route('admin_edit_player_action',$player->id_players) }}" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id_teams" value="{{ $player->id_teams }}">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fotopemain">Foto Pemain<small class="text-danger"> *Pastikan foto 3x4</small></label><br>
                                    <div class="custom-file">
                                        <input type="file" id="fotopemain" class="custom-file-input" name="img" value="{{$player->foto_players}}">
                                        <label class="custom-file-label" for="fotopemain">{{$player->foto_players}}</label>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="namapemain">Nama Pemain</label>

                                    <input class="form-control" id="namapemain" type="text" name="nama_players" required="" value="{{$player->nama_players}}">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="nopunggung">Nomor Punggung</label>

                                    <input class="form-control" id="nopunggung" type="number" name="no_punggung" required="" value="{{$player->no_punggung}}">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="tanggallahir">Tanggal Lahir</label>


		@if($data2->u == "U9")
                                    <input class="form-control" id="tanggallahir" type="date" name="tanggal_lahir" min="2010-01-01" value="{{$player->tanggal_lahir}}" required="">
        @endif
		@if($data2->u == "U11")
                                    <input class="form-control" id="tanggallahir" type="date" name="tanggal_lahir" min="2008-01-01" value="{{$player->tanggal_lahir}}" required="">
        @endif
		@if($data2->u == "U13")
                                    <input class="form-control" id="tanggallahir" type="date" name="tanggal_lahir" min="2006-01-01" value="{{$player->tanggal_lahir}}" required="">
        @endif

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="posisi">Posisi</label>

                                    <input class="form-control" id="posisi" type="text" name="posisi" required="" value="{{$player->posisi}}">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="nisn">NISN</label>

                                    <input class="form-control" id="nisn" type="number" name="nisn" required="" value="{{$player->nisn}}">

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

