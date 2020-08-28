@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Klasemen</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="/admin/klasemen/edit/{{$data->id_klasemen}}/action" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="row"> -->

                            <!-- <div class="col-md-6"> -->
                                <div class="form-group row">
                                    <label for="nama_teams" class="col-md-4 col-form-label text-md-right">Nama Team</label>

                                    <div class="col-md-6">
                                        <label for="nama_teams" class="form-control">{{$data->nama_teams}}</label>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_teams" class="col-md-4 col-form-label text-md-right">Pilih Grup</label>

                                    <div class="col-md-6">
                                        <select id="grup" class="form-control" name="grup" required="">
                                                <option selected="" disabled="">-- Pilih Grup --</option>
                                                <option  <?php if ($data->grup == 'A') { echo 'SELECTED'; } ?>>A</option>
                                                <option <?php if ($data->grup == 'B') { echo 'SELECTED'; } ?>>B</option>
                                                <option <?php if ($data->grup == 'C') { echo 'SELECTED'; } ?>>C</option>
                                                <option <?php if ($data->grup == 'D') { echo 'SELECTED'; } ?>>D</option>
                                            </select>

                                    </div>
                                </div>
                                
                            <!-- </div> -->
                            
                        <!-- </div> -->
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

