@extends('../layouts/app')

@section('title', 'List Foto')

@section('content')

<section id="listfoto">
    <div class="container">
        <div class="card"><div class="card-body">
            <h4>List Foto</h4>
            <a href="{{ route('add_foto') }}" class="btn btn-primary">Tambah Foto</a>
            <div class="row justify-content-center">
    @foreach($data as $d)
                <div class="col-lg-3 mb-4">
					<a href="{{ url('/img/gallery/'.$d->foto) }}" data-lightbox="Laptop1">
						<div class="card">
								<img src="{{ url('/img/gallery/'.$d->foto) }}" style="width: 100%">
							<div class="card-body"><center>
								<h5 class="card-title">{{ $d->caption }}</h5></center>
							</div>
						</div>
					</a>
				</div>
	@endforeach
            </div>
        </div></div>
    </div>
</section>


@endsection