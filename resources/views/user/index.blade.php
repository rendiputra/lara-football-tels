
@if(Auth::user()->isAdmin == TRUE)
<script>window.location='https://telesandifootballcup.com/admin/dash';</script>
@endif
@extends('layouts.app')
@section('title', 'Dashboard')

@section('css')
<style type="text/css">
	.btn-curve{
		padding-left:20px;
		padding-right:20px;
		border-radius:10px;
	}
</style>
@endsection
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="card">
			<div style="padding: 20px">
				<h3>Daftar Tim yang diikuti</h3>
				<hr>
				<div class="container">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Foto Tim</th>
									<th>Nama Tim</th>
									<th>Divisi</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
@php $no = 1 @endphp
@foreach($user_data as $data)
@php
$jumlah = 0;
foreach($data3 as $d){
	if($d->id_teams == $data->id_teams){
		$jumlah++;
	}
}
$status = "";
foreach ($data2 as $v) {
	if($v->id_teams == $data->id_teams){
		$status = "uncheck";
	}
}
@endphp
								<tr>
									<td>{{ $no++ }}</td>
									@if($data->foto_teams == null)
									<td><img src="{{asset('img/nologo.png')}}" style="width: 100px;"></td>
									@else
									<td><img src="{{asset('img/team')}}/{{ $data->foto_teams }}" style="width: 100px;"></td>
									@endif
									<td><a href="/detail_tim/{{$data->id_teams}}">{{ $data->nama_teams }}</a></td>
									<td>{{ $data->u }}</td>
									<td>
									    
	@if($jumlah <= 1)										
										<div class="btn btn-warning" style="border-radius: 0px; cursor:default;">Pemain belum lengkap</div>
	@else
										<div class="btn btn-success" style="border-radius: 0px; cursor:default; margin-bottom: 5px;">Menuggu Daftar Ulang</div>
	@endif
									</td>
									<td>
									    
										<a href="/edit_team/{{ $data->id_teams }}" class="btn btn-warning btn-curve" style="margin-bottom: 5px;">
    @if($data->no_hp == 0 or $data->nama_pelatih == "-" or $data->nama_asisten == "-")
										    Lengkapi
    @else
										    Edit
	@endif									    
										    Profil Tim</a>
										<a href="/user/data_player/{{ $data->id_teams }}" class="btn btn-primary btn-curve" style="margin-bottom: 5px;">Mengelola Pemain</a>
										<!--<a href="/rules" class="btn btn-secondary btn-curve" style="margin-bottom: 5px;">Peraturan Lomba</a>-->
    @if($jumlah >= 1)
										<a href="{{ route('reregis',$data->id_teams) }}" class="btn btn-success btn-curve">Cetak Daftar Ulang</a>
    @endif

									</td>
								</tr>
@endforeach
							</tbody>
						</table>
					</div>
				</div>	
			</div>
		</div>
	</div>
@endsection