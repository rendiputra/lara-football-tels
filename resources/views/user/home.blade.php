<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda belum memiliki tim! <a href="/addteam">Klik disini</a> untuk membuat tim!.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 -->
 <script type="text/javascript">
    window.location="user/dash"
</script>