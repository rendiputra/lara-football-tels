@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Klasemen</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="/admin/klasemen/update/{{$data->id_klasemen}}/action" enctype="multipart/form-data">
                        @csrf
                            
                            <div class="form-group row">
                                <label for="nama_teams" class="col-md-4 col-form-label text-md-right">Nama Team</label>

                                <div class="col-md-6">
                                    <label for="nama_teams" class="form-control">{{$data->nama_teams}}</label>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_teams" class="col-md-4 col-form-label text-md-right">Divisi Team</label>

                                <div class="col-md-4">
                                    <label for="nama_teams" class="form-control">{{$data->u}}</label>

                                </div>
                            </div>
                            <hr class="bg-primary">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="main" class="col-md-10 col-form-label">Main</label>

                                        <div class="col-md-10">
                                            <input name="main" type="number" for="main" class="form-control" value="{{$data->main}}">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="menang" class="col-md-10 col-form-label">Menang</label>

                                        <div class="col-md-10">
                                            <input name="menang" type="number" for="menang" class="form-control" value="{{$data->menang}}">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="seri" class="col-md-10 col-form-label">Seri</label>

                                        <div class="col-md-10">
                                            <input name="seri" type="number" for="seri" class="form-control" value="{{$data->seri}}">

                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kalah" class="col-md-10 col-form-label">Kalah</label>

                                        <div class="col-md-10">
                                            <input name="kalah" type="number" for="kalah" class="form-control" value="{{$data->kalah}}">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gm" class="col-md-10 col-form-label">Goal Masuk</label>

                                        <div class="col-md-10">
                                            <input name="gm" type="number" for="gm" class="form-control" value="{{$data->gm}}">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gk" class="col-md-10 col-form-label">Goal Keluar</label>

                                        <div class="col-md-10">
                                            <input name="gk" type="number" for="gk" class="form-control" value="{{$data->gk}}">

                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="sg" class="col-md-12 col-form-label">Semua Goal</label>

                                        <div class="col-md-12">
                                            <input name="sg" type="number" for="sg" class="form-control" value="{{$data->sg}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="poin" class="col-md-12 col-form-label">Poin</label>

                                        <div class="col-md-12">
                                            <input name="poin" type="number" for="poin" class="form-control" value="{{$data->poin}}">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Update</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

