@extends('layouts/app')
@section('title', 'Admin')
@section('css')
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div class="col col-md-10 col-sm-10 col-12">
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
				<div class="card" style="padding: 20px;">
					<h5>Tim yang telah terdaftar</h5><br>
					<div class="table-responsive">
						<table id="table" class="table table-bordered">
							<thead>
								<tr>
									<th>Nama Team</th>
									<th>Divisi</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
		@if(count($user_data) <1)
			<tr>
				<td colspan="5" class="text-center">Tidak ada Team</td>
			</tr>
		@endif
	@foreach($user_data as $p)
								<tr>
									<td>{{$p->nama_teams}}</td>
									<td>{{$p->u}}</td>
									<td>
										<a href="/detail_tim/{{$p->id_users}}" class="btn btn-primary">Detail</a>		
									</td>
								</tr>
	@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="spacer"></div><br>
		<div class="row justify-content-center">
			<div class="col col-md-10 col-sm-10 col-12">
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
				
			</div>
		</div>
	</div>
@endsection
@section('js')
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').DataTable();
		});
	</script>
@endsection