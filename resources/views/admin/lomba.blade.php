@extends('layouts.user')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div id="list" class="col col-md-10 col-sm-11 col-12">
				<div class="card" style="padding: 20px">
					<h4>Data Lomba</h4><hr>
					<div class="container">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th class="align-middle">No</th>
										<th class="align-middle">Nama Lomba</th>
										<th class="align-middle">Total Pemain</th>
										<th class="align-middle">Biaya Pendaftaran</th>
										<th class="align-middle">CP 1</th>
										<th class="align-middle">CP 2</th>
									</tr>
								</thead>
								<tbody>
@php $no = 1 @endphp
@foreach($data as $d)
									<tr>
										<td class="align-middle">{{$no++}}</td>							
										<td>{{ $d->nama_lomba }}</td>
										<td>{{ $d->total_pemain }}</td>
										<td>{{ $d->biaya_pendaftaran }}</td>
										<td>{{ $d->cp_1 }}</td>
										<td>{{ $d->cp_2 }}</td>
									</tr>
@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<a href="#" class="btn btn-primary" id="btn">Tambah Lomba</a>
				</div>
			</div>

		{{-- TAMBAH LOMBA --}}


			<div id="add_lomba" class="col col-md-8 col-sm-10 col-10">
				<div class="card" style="padding: 20px">
					<h4>Tambah Lomba</h4><hr>
					<div class="container">
						<form method="POST" action="{{ route('lomba_tambah') }}" enctype="multipart/form-data">
							<input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<label>Nama Lomba</label>
								<input class="form-control" type="text" name="nama_lomba">
							</div>
							<div class="form-group">
								<label>Juknis</label>
								<textarea class="form-control" name="juknis" id="juknis"></textarea>
							</div>
							<div class="form-group">
								<label>Syarat</label>
								<textarea class="form-control" name="syarat" id="syarat"></textarea>
							</div>
							<div class="form-group">
								<label>Total Pemain</label>
								<input class="form-control" type="number" name="total_pemain">
							</div>
							<div class="form-group">
								<label>Biaya Pendaftaran</label>
								<input class="form-control" type="number" name="biaya">
							</div>
							<div class="form-group">
								<label>Logo Lomba</label>
								<input class="form-control" type="file" name="img">
							</div>
							<div class="form-group">
								<label>Contact Person</label>
								<input class="form-control" type="text" name="cp_1" placeholder="Contact Person 1"><br>
								<input class="form-control" type="text" name="cp_2" placeholder="Contact Person 2">
							</div>
							<button class="btn btn-primary">Tambah</button>
							<a href="{{url('cup/admin/lomba')}}" class="btn btn-secondary">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>

		{{--  --}}
	</div>
@endsection
@section('js')
		<script type="text/javascript">
					document.getElementById('add_lomba').style.display = 'none';
			$(document).ready(function(){
				$('#btn').click(function(){
					document.getElementById('add_lomba').style.display = 'block';
					document.getElementById('list').style.display = 'none';
				})
			});
		</script>
		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	    <script>
	        CKEDITOR.replace( 'juknis' );
	        CKEDITOR.replace( 'syarat' );
	    </script>
@endsection