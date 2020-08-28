@extends('layouts/app')
@section('css')
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')
<section id="pertandingan" class="mb-5">
  <div class="container">
    <div class="row" style="margin-top: 80px;">
      <div class="col-sm-12 mb-4">

      	@if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
         @endif

         @if (session('eror'))
            <div class="alert alert-danger" role="alert">
                {{ session('eror') }}
            </div>
         @endif

         @if (session('upsukses'))
            <div class="alert alert-success" role="alert">
                {{ session('upsukses') }}
            </div>
         @endif

         @if (session('uperor'))
            <div class="alert alert-danger" role="alert">
                {{ session('uperor') }}
            </div>
         @endif

        <h3 class="text-center text-uppercase">Klasemen</h3>
        <hr style="width: 50px; border: 2px solid #1f2861;">
        <div role="tabpanel" class="tab-pane active" id="tabfc-1">
          <div id="ag-tab" class="c-content-tab-3 c-opt-1" role="tabpanel">
            <ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">
              <li class="active">
                <a href="#u-9" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3 active" aria-expanded="true" style="border-radius: 60px; width: 50px; margin-right: 15px;">U9</a>
                <a href="#u-11" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" onclick="showall(); showcat(1);" style="border-radius: 60px; width: 50px; margin-right: 15px;">U11</a>
                <a href="#u-13" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" onclick="showall(); showcat(1);" style="border-radius: 60px; width: 50px;">U13</a>
              </li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="u-9">
                  <div id="div-tab" class="c-content-tab-3 c-opt-1" role="tabpanel">
                    <ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">
                      <li style="margin-right: 15px;">
                        <a href="#u9-1" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3 active" aria-expanded="true" style="border-radius: 60px; width: 80px;">Grup A</a>
                      </li>
                      <li style="margin-right: 15px;">
                        <a href="#u9-2" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup B</a>
                      </li>
                      <li style="margin-right: 15px;">

                        <a href="#u9-3" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup C</a>
                      </li>
                      <li style="margin-right: 15px;">
                        <a href="#u9-4" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup D</a>
                      </li>
                    </ul>
                    <a href="/admin/klasemen/input" class="btn bg-primary btn-primary">Input Team</a>
                    <div class="tab-content table-responsive">
                      <div role="tabpanel" class="tab-pane active" id="u9-1">
                        <h3 class="c-font-18 c-font-uppercase">U9 Grup A</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td><!-- Menang -->
                                <td>Seri</td><!-- Seri -->
                                <td>Kalah</td><!-- Kalah -->
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@php $no=0; @endphp
@foreach($data as $a)
  @if($a->u === "U9")
    @if($a->grup === "A")
        @php $no++; @endphp
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                      <div role="tabpanel" class="tab-pane" id="u9-2">

                        <h3 class="c-font-18 c-font-uppercase">U9 Grup B</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@php $no=0; @endphp
@foreach($data as $a)
  @if($a->u === "U9")
    @if($a->grup === "B")
        @php $no++; @endphp
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                      <div role="tabpanel" class="tab-pane" id="u9-3">

                        <h3 class="c-font-18 c-font-uppercase">U9 Grup C</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@php $no=0; @endphp
@foreach($data as $a)
  @if($a->u === "U9")
    @if($a->grup === "C")
        @php $no++; @endphp
                              <tr>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                      <div role="tabpanel" class="tab-pane" id="u9-4">

                        <h3 class="c-font-18 c-font-uppercase">U9 Grup D</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@foreach($data as $a)
  @if($a->u === "U9")
    @if($a->grup === "D")
                              <tr>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              <div role="tabpanel" class="tab-pane" id="u-11">

                  <div id="div-tab" class="c-content-tab-3 c-opt-1" role="tabpanel">
                    <ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">
                      <li style="margin-right: 15px;">
                        <a href="#u11-1" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" style="border-radius: 60px; width: 80px;">Grup A</a>
                      </li>
                      <li style="margin-right: 15px;">
                        <a href="#u11-2" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup B</a>
                      </li>
                      <li style="margin-right: 15px;">
                        <a href="#u11-3" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup C</a>
                      </li>
                      <li style="margin-right: 15px;">
                        <a href="#u11-4" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup D</a>
                      </li>
                    </ul>
                    <a href="/admin/klasemen/input" class="btn bg-primary btn-primary">Input Team</a>
                    <div class="tab-content table-responsive">
                      <div role="tabpanel" class="tab-pane active" id="u11-1">
                        <h3 class="c-font-18 c-font-uppercase">U11 Grup A</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@php $no=0; @endphp
@foreach($data as $a)
  @if($a->u === "U11")
    @if($a->grup === "A")
        @php $no++; @endphp
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                      <div role="tabpanel" class="tab-pane" id="u11-2">

                        <h3 class="c-font-18 c-font-uppercase">U11 Grup B</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@php $no=0; @endphp
@foreach($data as $a)
  @if($a->u === "U11")
    @if($a->grup === "B")
        @php $no++; @endphp
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>  

                      <div role="tabpanel" class="tab-pane" id="u11-3">

                        <h3 class="c-font-18 c-font-uppercase">U11 Grup C</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@php $no=0; @endphp
@foreach($data as $a)
  @if($a->u === "U11")
    @if($a->grup === "C")
        @php $no++; @endphp
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                      <div role="tabpanel" class="tab-pane" id="u11-4">

                        <h3 class="c-font-18 c-font-uppercase">U11 Grup D</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@foreach($data as $a)
  @if($a->u === "U11")
    @if($a->grup === "D")
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              <div role="tabpanel" class="tab-pane" id="u-13">

                  <div id="div-tab" class="c-content-tab-3 c-opt-1" role="tabpanel">

                    <ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

                      <li style="margin-right: 15px;">

                        <a href="#u13-1" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" style="border-radius: 60px; width: 80px;">Grup A</a>
                      </li>
                      <li style="margin-right: 15px;">
                        <a href="#u13-2" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup B</a>
                      </li>
                      <li style="margin-right: 15px;">
                        <a href="#u13-3" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup C</a>
                      </li>
                      <li style="margin-right: 15px;">
                        <a href="#u13-4" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup D</a>
                      </li>
                    </ul>
                    <a href="/admin/klasemen/input" class="btn bg-primary btn-primary">Input Team</a>
                    <div class="tab-content table-responsive">
                      <div role="tabpanel" class="tab-pane active" id="u13-1">
                        <h3 class="c-font-18 c-font-uppercase">U13 Grup A</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@php $no=0; @endphp
@foreach($data as $a)
  @if($a->u === "U13")
    @if($a->grup === "A")
        @php $no++; @endphp
                              <tr>
                                <td>{{$no}}</td>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                      <div role="tabpanel" class="tab-pane" id="u13-2">

                        <h3 class="c-font-18 c-font-uppercase">U13 Grup B</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@foreach($data as $a)
  @if($a->u === "U13")
    @if($a->grup === "B")
                              <tr>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>  

                      <div role="tabpanel" class="tab-pane" id="u13-3">

                        <h3 class="c-font-18 c-font-uppercase">U13 Grup C</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@foreach($data as $a)
  @if($a->u === "U13")
    @if($a->grup === "C")
                              <tr>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>

                      </div>

                      <div role="tabpanel" class="tab-pane" id="u13-4">

                        <h3 class="c-font-18 c-font-uppercase">U13 Grup D</h3>
                        <div class="c-content-tab-3 c-opt-1">
                          <table class="table table-striped">
                            <tr>
                              <thead>
                                <td>Posisi</td> 
                                <td style="min-width: 300px;">Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GK</td><!-- Main -->
                                <td>GM</td>
                                <td>SG</td>
                                <td>Poin</td><td>Aksi</td>
                              </thead>
                            </tr>
                            <tbody>
@foreach($data as $a)
  @if($a->u === "U13")
    @if($a->grup === "D")
                              <tr>
                                <td>{{$a->nama_teams}}</td>
                                <td>{{$a->main}}</td>
                                <td>{{$a->menang}}</td>
                                <td>{{$a->seri}}</td>
                                <td>{{$a->kalah}}</td>
                                <td>{{$a->gm}}</td>
                                <td>{{$a->gk}}</td>
                                <td>{{$a->sg}}</td>
                                <td>{{$a->poin}}</td>
                                <td>
                                  <a href="/admin/klasemen/update/{{ $a->id_klasemen }}" class="btn  btn-outline-primary ">Update</a>
                                  <a href="/admin/klasemen/edit/{{ $a->id_klasemen }}" class="btn  btn-outline-success ">Edit</a>
                                </td>
                              </tr>
    @else
    @endif

  @else
  @endif

@endforeach
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="tab-content ya">
            </div>
        </div> 
    </div>
</section>
@endsection