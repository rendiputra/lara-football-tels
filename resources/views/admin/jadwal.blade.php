@extends('layouts/app')

@section('title', 'Telesandi Soccer')

@section('content')

<section id="fixtures">
	
	<div class="container">
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
		<div class="c-content-title-1">
			<center>
				<h1 >Jadwal Pertandingan</h1>
				<hr class="bg-primary" width="	50px" style="border:2px solid">
			</center>
		</div>	
		<div class="c-content-tab-3 c-opt-1" role="tabpanel">
			<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

              <li class="active">

                <a href="#u-9" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3 active" aria-expanded="true" style="border-radius: 60px; width: 50px; margin-right: 15px;">U9</a>

                <a href="#u-11" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" onclick="showall(); showcat(1);" style="border-radius: 60px; width: 50px; margin-right: 15px;">U11</a>

                <a href="#u-13" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" onclick="showall(); showcat(1);" style="border-radius: 60px; width: 50px;">U13</a>

              </li>

            </ul>
            <!--
		<div class="c-content-title-1">
			<h4 class="c-left c-font-uppercase c-font-bold"><br>Jadwal Pertandingan di Setiap Tempat dan Waktu</h4>
		</div>-->
		<center>
			<div class="tab-content">
			<div id="u-9" class="tab-pane active">
				<div class="c-content-tab-3 c-opt-1" role="tabpanel">
					<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

                      <li style="margin-right: 15px;">

                        <a href="#u9-1" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" style="border-radius: 60px; width: 80px;">Grup A</a>


                        <a href="#u9-2" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup B</a>


                      <li style="margin-right: 15px;">

                        <a href="#u9-final" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Final</a>

                      </li>

                      <!--<li style="margin-right: 15px;">-->

                      <!--  <a href="#u9-4" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup D</a>-->

                      </li>

                    </ul>
				</div>
				

				<div class="tab-content table-responsive">
					<div class="tab-pane active" role="tabpanel" id="u9-1">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
        				    <a href="/admin/jadwal/input" class="btn bg-primary btn-primary text-left">Input Jadwal</a>
        				    <br>
				            <h2>U9 Grup A</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U9")
	    @if($a->grup === "A")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>

    

    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					
					
					<div class="tab-pane " role="tabpanel" id="u9-2">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
				            <div class="text-left">
				            <a href="/admin/jadwal/input" class="btn bg-primary btn-primary text-left">Input Jadwal</a>
        				    <br>
				            <h2>U9 Grup B</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U9")
	    @if($a->grup === "B")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>


    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					<div class="tab-pane "  role="tabpanel" id="u9-final">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U9 Final</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U9")
	    @if($a->grup === "Final")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>

    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
<!--					<div class="tab-pane "  role="tabpanel" id="u9-3">-->
<!--						<div class="c-content-tab-3 c-opt-1" role="tabpanel">-->
<!--							<table class="table table-striped">-->
<!--								<thead class="bg-primary text-white">-->
<!--									<tr>-->
<!--										<th scope="col">Waktu</th>-->
<!--										<th scope="col">Kategori</th>-->
<!--										<th scope="col">Divisi</th>-->
<!--										<th scope="col">Grup</th>-->
<!--										<th scope="col">Tempat Bertanding</th>-->
<!--										<th scope="col">Tim 1</th>-->
<!--										<th scope="col">Tim 2</th>-->
<!--										<th scope="col">Aksi</th>-->
										<!-- <th scope="col">Laporan</th> -->
<!--									</tr>-->
<!--								</thead>-->
<!--								<tbody>-->
<!--@php $no=0; @endphp-->
<!--@foreach($data as $a)-->
<!--  @if($a->tanggal >= date("Y-m-d"))-->
<!--  	@if($a->u === "U9")-->
<!--	    @if($a->grup === "C")-->
<!--	    	@php  $no++; @endphp-->
<!--									<tr>-->
<!--										<td >{{$a->tanggal}} ({{$a->jam}})</td>-->
<!--										<td >{{$a->kategori}}</td>-->
<!--										<td >{{$a->u}}</td>-->
<!--										<td >{{$a->grup}}</td>-->
<!--										<td >{{$a->tempat}}</td>-->
<!--										<td >{{$a->tim1}}</td>-->
<!--										<td >{{$a->tim2}}</td>-->
<!--										<td >-->
<!--										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>-->
<!--										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>-->
<!--										</td>-->
										<!-- <th scope="col">Laporan</th> -->
<!--									</tr>-->

<!--    	@else-->
<!--    	@endif-->

<!--    @else-->
<!--    @endif-->

<!--  @else-->
<!--  @endif-->

<!--@endforeach-->
<!--								</tbody>-->
<!--							</table>-->
<!--							<p>-->
<!--								<span id="totalrow">{{$no}}</span>-->
<!--								Records Total-->
<!--							</p>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="tab-pane" role="tabpanel" id="u9-4">-->
<!--						<div class="c-content-tab-3 c-opt-1" role="tabpanel">-->
<!--							<table class="table table-striped">-->
<!--								<thead class="bg-primary text-white">-->
<!--									<tr>-->
<!--										<th scope="col">Waktu</th>-->
<!--										<th scope="col">Kategori</th>-->
<!--										<th scope="col">Divisi</th>-->
<!--										<th scope="col">Grup</th>-->
<!--										<th scope="col">Tempat Bertanding</th>-->
<!--										<th scope="col">Tim 1</th>-->
<!--										<th scope="col">Tim 2</th>-->
<!--										<th scope="col">Aksi</th>-->
										<!-- <th scope="col">Laporan</th> -->
<!--									</tr>-->
<!--								</thead>-->
<!--								<tbody>-->
<!--@php $no=0; @endphp-->
<!--@foreach($data as $a)-->
<!--  @if($a->tanggal >= date("Y-m-d"))-->
<!--  	@if($a->u === "U9")-->
<!--	    @if($a->grup === "D")-->
<!--	    	@php  $no++; @endphp-->
<!--									<tr>-->
<!--										<td >{{$a->tanggal}} ({{$a->jam}})</td>-->
<!--										<td >{{$a->kategori}}</td>-->
<!--										<td >{{$a->u}}</td>-->
<!--										<td >{{$a->grup}}</td>-->
<!--										<td >{{$a->tempat}}</td>-->
<!--										<td >{{$a->tim1}}</td>-->
<!--										<td >{{$a->tim2}}</td>-->
<!--										<td >-->
<!--										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>-->
<!--										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>-->
<!--										</td>-->
										<!-- <th scope="col">Laporan</th> -->
<!--									</tr>-->

<!--    	@else-->
<!--    	@endif-->

<!--    @else-->
<!--    @endif-->

<!--  @else-->
<!--  @endif-->

<!--@endforeach-->
<!--								</tbody>-->
<!--							</table>-->
<!--							<p>-->
<!--								<span id="totalrow">{{$no}}</span>-->
<!--								Records Total-->
<!--							</p>-->
<!--						</div>-->
<!--					</div>-->
				</div>
			</div>
			<div id="u-11" class="tab-pane">
				<div class="c-content-tab-3 c-opt-1" role="tabpanel">
					<ul  class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

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

                        <a href="#u11-semi" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">SemiFinal</a>

                      </li>

                      <li style="margin-right: 15px;">

                        <a href="#u11-final" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Final</a>

                      </li>

                      <!--<li style="margin-right: 15px;">-->

                      <!--  <a href="#u11-4" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup D</a>-->

                      <!--</li>-->

                    </ul>
				</div>
				<br>
				<div class="tab-content table-responsive">
					<div class="tab-pane active" role="tabpanel" id="u11-1">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U11 Grup A</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U11")
	    @if($a->grup === "A")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>

    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					<div class="tab-pane " role="tabpanel" id="u11-2">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U11 Grup B</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U11")
	    @if($a->grup === "B")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>

    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					<div class="tab-pane "  role="tabpanel" id="u11-3">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U11 Grup C</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U11")
	    @if($a->grup === "C")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>

    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					<div class="tab-pane "  role="tabpanel" id="u11-semi">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U11 Semi Final</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U11")
	    @if($a->grup === "Semi")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>

    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					<div class="tab-pane "  role="tabpanel" id="u11-final">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U11 Final</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U11")
	    @if($a->grup === "Final")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>

    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
<!--					<div class="tab-pane" role="tabpanel" id="u11-4">-->
<!--						<div class="c-content-tab-3 c-opt-1" role="tabpanel">-->
<!--						    <div class="text-left">-->
<!--				            <h2>U11 Grup D</h2>-->
<!--				            </div>-->
<!--							<table class="table table-striped">-->
<!--								<thead class="bg-primary text-white">-->
<!--									<tr>-->
<!--										<th scope="col">Waktu</th>-->
<!--										<th scope="col">Kategori</th>-->
<!--										<th scope="col">Divisi</th>-->
<!--										<th scope="col">Grup</th>-->
<!--										<th scope="col">Tempat Bertanding</th>-->
<!--										<th scope="col">Tim 1</th>-->
<!--										<th scope="col">Tim 2</th>-->
<!--										<th scope="col">Aksi</th>-->
										<!-- <th scope="col">Laporan</th> -->
<!--									</tr>-->
<!--								</thead>-->
<!--								<tbody>-->
<!--@php $no=0; @endphp-->
<!--@foreach($data as $a)-->
<!--  @if($a->tanggal >= date("Y-m-d"))-->
<!--  	@if($a->u === "U11")-->
<!--	    @if($a->grup === "D")-->
<!--	    	@php  $no++; @endphp-->
<!--									<tr>-->
<!--										<td >{{$a->tanggal}} ({{$a->jam}})</td>-->
<!--										<td >{{$a->kategori}}</td>-->
<!--										<td >{{$a->u}}</td>-->
<!--										<td >{{$a->grup}}</td>-->
<!--										<td >{{$a->tempat}}</td>-->
<!--										<td >{{$a->tim1}}</td>-->
<!--										<td >{{$a->tim2}}</td>-->
<!--										<td >-->
<!--										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>-->
<!--										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>-->
<!--										</td>-->
										<!-- <th scope="col">Laporan</th> -->
<!--									</tr>-->

<!--    	@else-->
<!--    	@endif-->

<!--    @else-->
<!--    @endif-->

<!--  @else-->
<!--  @endif-->

<!--@endforeach-->
<!--								</tbody>-->
<!--							</table>-->
<!--							<p>-->
<!--								<span id="totalrow">{{$no}}</span>-->
<!--								Records Total-->
<!--							</p>-->
<!--						</div>-->
<!--					</div>-->
				</div>
			</div>
			<div id="u-13" class="tab-pane">
				<div class="c-content-tab-3 c-opt-1" role="tabpanel">
					<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

                      <li style="margin-right: 15px;">

                        <a href="#u13-a" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" style="border-radius: 60px; width: 80px;">Grup A</a>

                      </li>

                      <li style="margin-right: 15px;">

                        <a href="#u13-final" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Final</a>

                      </li>

                      <!--<li style="margin-right: 15px;">-->

                      <!--  <a href="#u13-c" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup C</a>-->

                      <!--</li>-->

                      <!--<li style="margin-right: 15px;">-->

                      <!--  <a href="#u13-d" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup D</a>-->

                      <!--</li>-->

                    </ul>
				</div>
				<br>
				<div class="tab-content table-responsive">
					<div class="tab-pane active" role="tabpanel" id="u13-a">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U13 Grup A</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U13")
	    @if($a->grup === "A")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>


    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					<div class="tab-pane "  role="tabpanel" id="u13-final">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U11 Final</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<!--<th scope="col">Kategori</th>-->
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Tim 2</th>
										<th scope="col">Aksi</th>
										<!-- <th scope="col">Laporan</th> -->
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U13")
	    @if($a->grup === "Final")
	    	@php  $no++; @endphp
									<tr>
										<td >{{$a->tanggal}} ({{$a->jam}})</td>
										<!--<td >{{$a->kategori}}</td>-->
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
										</td>
										<td >
			    @foreach($teams as $t)
			        @if($t->id_klasemen == $a->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			                            </td>
										<td >
										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>
										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>
										</td>
										<!-- <th scope="col">Laporan</th> -->
									</tr>

    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
<!--					<div class="tab-pane " role="tabpanel" id="u13-b">-->
<!--						<div class="c-content-tab-3 c-opt-1" role="tabpanel">-->
<!--							<table class="table table-striped">-->
<!--								<thead class="bg-primary text-white">-->
<!--									<tr>-->
<!--										<th scope="col">Waktu</th>-->
<!--										<th scope="col">Kategori</th>-->
<!--										<th scope="col">Divisi</th>-->
<!--										<th scope="col">Grup</th>-->
<!--										<th scope="col">Tempat Bertanding</th>-->
<!--										<th scope="col">Tim 1</th>-->
<!--										<th scope="col">Tim 2</th>-->
<!--										<th scope="col">Aksi</th>-->
										<!-- <th scope="col">Laporan</th> -->
<!--									</tr>-->
<!--								</thead>-->
<!--								<tbody>-->
<!--@php $no=0; @endphp-->
<!--@foreach($data as $a)-->
<!--  @if($a->tanggal >= date("Y-m-d"))-->
<!--  	@if($a->u === "U11")-->
<!--	    @if($a->grup === "B")-->
<!--	    	@php  $no++; @endphp-->
<!--									<tr>-->
<!--										<td >{{$a->tanggal}} ({{$a->jam}})</td>-->
<!--										<td >{{$a->kategori}}</td>-->
<!--										<td >{{$a->u}}</td>-->
<!--										<td >{{$a->grup}}</td>-->
<!--										<td >{{$a->tempat}}</td>-->
<!--										<td >{{$a->tim1}}</td>-->
<!--										<td >{{$a->tim2}}</td>-->
<!--										<td >-->
<!--										    <a class="btn  btn-outline-primary " href="/admin/jadwal/edit/{{$a->id_jadwal}}">Edit</a>-->
<!--										    <a class="btn  btn-outline-secondary " href="{{route('hasil_pertandingan',$a->id_jadwal)}}">Hasil</a>-->
<!--										</td>-->
										<!-- <th scope="col">Laporan</th> -->
<!--									</tr>-->

<!--    	@else-->
<!--    	@endif-->

<!--    @else-->
<!--    @endif-->

<!--  @else-->
<!--  @endif-->

<!--@endforeach-->
<!--								</tbody>-->
<!--							</table>-->
<!--							<p>-->
<!--								<span id="totalrow">{{$no}}</span>-->
<!--								Records Total-->
<!--							</p>-->
<!--						</div>-->
<!--					</div>-->
					<!--<div class="tab-pane " role="tabpanel" id="u13-c">-->
					<!--	<div class="c-content-tab-3 c-opt-1" role="tabpanel">-->
					<!--		<table class="table table-striped">-->
					<!--			<thead class="bg-primary text-white">-->
					<!--				<tr>-->
					<!--					<th scope="col">Waktu</th>-->
					<!--					<th scope="col">Kategori</th>-->
					<!--					<th scope="col">Divisi</th>-->
					<!--					<th scope="col">Grup</th>-->
					<!--					<th scope="col">Tempat Bertanding</th>-->
					<!--					<th scope="col">Tim 1</th>-->
					<!--					<th scope="col">Tim 2</th>-->
					<!--					<th scope="col">Aksi</th>-->
										<!-- <th scope="col">Laporan</th> -->
					<!--				</tr>-->
					<!--			</thead>-->
					<!--			<tbody>-->
					<!--				<tr>-->
					<!--					<td scope="row">22 Agustus 2013 07:30</td>-->
					<!--					<td >League</td>-->
					<!--					<td >U13</td>-->
					<!--					<td >U13</td>-->
					<!--					<td >Lapangan Telkom</td>-->
					<!--					<td >Telsfootball</td>-->
					<!--					<td >Telsfootball</td>-->
										<!-- <th scope="col">Laporan</th> -->
					<!--				</tr>-->
					<!--			</tbody>-->
					<!--		</table>-->
					<!--		<p>-->
					<!--			<span id="totalrow">16</span>-->
					<!--			Records Total-->
					<!--		</p>-->
					<!--	</div>-->
					<!--</div>-->
					<!--<div class="tab-pane" role="tabpanel" id="u13-d">-->
					<!--	<div class="c-content-tab-3 c-opt-1" role="tabpanel">-->
					<!--		<table class="table table-striped">-->
					<!--			<thead class="bg-primary text-white">-->
					<!--				<tr>-->
					<!--					<th scope="col">Waktu</th>-->
					<!--					<th scope="col">Kategori</th>-->
					<!--					<th scope="col">Divisi</th>-->
					<!--					<th scope="col">Grup</th>-->
					<!--					<th scope="col">Tempat Bertanding</th>-->
					<!--					<th scope="col">Tim 1</th>-->
					<!--					<th scope="col">Tim 2</th>-->
					<!--					<th scope="col">Aksi</th>-->
										<!-- <th scope="col">Laporan</th> -->
					<!--				</tr>-->
					<!--			</thead>-->
					<!--			<tbody>-->
					<!--				<tr>-->
					<!--					<td scope="row">22 Agustus 2013 07:30</td>-->
					<!--					<td >League</td>-->
					<!--					<td >U13</td>-->
					<!--					<td >U13</td>-->
					<!--					<td >Lapangan Telkom</td>-->
					<!--					<td >Telsfootball</td>-->
					<!--					<td >Telsfootball</td>-->
										<!-- <th scope="col">Laporan</th> -->
					<!--				</tr>-->
					<!--			</tbody>-->
					<!--		</table>-->
					<!--		<p>-->
					<!--			<span id="totalrow">16</span>-->
					<!--			Records Total-->
					<!--		</p>-->
					<!--	</div>-->
					<!--</div>-->
				</div>
			</div>
			</div>
		</center>
	</div>

</section>
@endsection