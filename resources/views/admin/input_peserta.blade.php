@extends('layouts.app')
@section('title', 'Admin')

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
	<!-- khusus admin untuk mengupload peserta yang daftar offline -->

	<div class="container">
		<div class="spacer"></div>
		<div class="card">
			<div style="padding: 20px">
				<h3>Daftar Team yang terdaftar</h3>
				<hr>
				@if(Session::get('sukses'))
				<div class="alert alert-success">
				{{ Session::get('sukses')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				@endif
				@if(Session::get('eror'))
				<div class="alert alert-danger">
				{{ Session::get('eror')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
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
				<h4><a href="/admin/create_team" class="btn btn-primary btn-curve"> Tambah Tim </a><br></h4>
				<div class="container">
					<div class="table-responsive">
						<table class="table table-bordered gue">
						    <br>
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Team</th>
									<th>Kode</th>
									<th>Divisi</th>
									<th style="width: 40px;">Status</th>
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
		}@endphp
		
								<tr>
									<td>{{ $no++ }}</td>
									<td>{{ $data->nama_teams }}</td>
									<td>{{ $data->kode_daftarulang }}</td>
									<td>{{ $data->u }}</td>
									<td>
	@if($data->pembayaran == TRUE)
										<!--<div class="btn btn-success btn-curve">Menuggu Daftar Ulang</div>-->
	@if($jumlah <= 13)										
										<div class="btn btn-warning disabled" style="border-radius: 0px;">Pemain belum lengkap</div>
	@endif
						                {{ $jumlah}}/17
	@else
										<div class="btn btn-danger btn-curve">Belum Melakukan Pembayaran</div>
	@endif
									</td>
									<td>
	@if($data->pembayaran == TRUE)
	
										<a href="/edit_team/{{ $data->id_teams }}" class="btn btn-warning btn-curve" style="margin-bottom: 5px;">
										    
										    Profil Tim</a>
										    
										<a href="/user/data_player/{{ $data->id_teams }}" class="btn btn-primary btn-curve" style="margin-bottom: 5px;">Manage Tim</a>
										<a href="{{ route('id_card',$data->id_teams) }}" class="btn btn-info btn-curve" style="margin-bottom: 5px;">Cetak Name Tag</a>
										<a href="{{ route('reregis',$data->id_teams) }}" class="btn btn-success btn-curve">Cetak Daftar Ulang</a>


	@else
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#valide">
											Valid
										</button>
									</td>
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