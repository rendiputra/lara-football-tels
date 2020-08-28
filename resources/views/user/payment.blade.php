@extends('layouts.app')

@section('title', 'Pembayaran')

@section('css')
<style type="text/css">
	.waktu{
		padding:20px ;font-size: 1.6em; background-color: #f0f0f0;
	}
</style>
@endsection
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-md-6 col-sm-10 col-12">
				<div class="spacer"></div>
				<div class="text-center">
					<h5>Keterangan Pembayaran</h5>
					<p>Mohon segera lakukan pembayaran sebelum:</p>
					<div class="waktu">
						<b>{{ date('d F Y H:i:s', strtotime($payment->tgl_kadaluarsa)) }}</b><br>
					</div><br>
					<p>Nominal yang harus dibayarkan:</p>
					<h3>Rp.{{ number_format($payment->biaya_pendaftar + $payment->kode_unik,2) }}</h3><br>
					<p class="alert alert-danger" style="color:red">Mohon transfer sesuai dengan angka diatas! 3 digit terakhir merupakan kode yang membantu pengkonfirmasian pembayaran!</p>
					<p>Pembayaran dapat dilakukan dengan transfer ke:</p>
					<!--<h3 class="text-left">BCA</h3>-->
					<h3 class="text-left"><img src="http://1.bp.blogspot.com/-qJXouKzK-Pk/VhRtc2jL5cI/AAAAAAAAHAc/xEJWs5oPruw/s1600/logo-bca.png" alt="" width="15%" max-width="100%" height="auto" class="img-fluid"></h3>
					<p style="padding:20px ;font-size: 1.6em; background-color: #f0f0f0"><b>8420834030</b> a.n <b>RIO MAHABELY B</b></p>
				</div>
			</div>
			<div class="col-xl-6 col-md-6 col-sm-10 col-12">
				<div class="spacer"></div>
				<div class="text-center">
					<h5>Konfirmasi Pembayaran</h5>
					<p>Sudah Melakukan Pembayaran? Lengkapi form dibawah ini.</p>
					<div class="card" style="padding: 20px;">
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
						<form method="POST" action="{{ route('up_bukti')}}" enctype="multipart/form-data">
							@csrf
							<input type="hidden" name="id_users" value="{{ $payment->id_users }}">
							<input type="hidden" name="id_teams" value="{{ $payment->id_teams }}">
							<div class="form-group">
								<label>Nama Pengirim</label>
								<input type="text" name="pengirim" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Bukti Transfer</label>
                                    <div class="custom-file">

                                        <input type="file" id="fototim" class="custom-file-input" name="img" required>

                                        <label class="custom-file-label text-left" for="fototim">Choose file</label>

                                    </div>
							</div>
							<button class="btn btn-primary">Kirim Bukti</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>
@endsection
