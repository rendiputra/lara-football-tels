@extends('layouts.app')


@section('title', 'Masukan Data Pemain')


@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Masukan Data Pemain</div>



                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

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

                    <form method="POST" action="{{ route('insert_player') }}" class="form-prevent" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id_teams" value="{{ $player->id_teams }}">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">

                                    <label for="nisn">NISN</label>

                                    <input class="form-control" id="nisn" type="number" name="nisn" required="" onkeyup="getDataNISN()">

                                </div>
                                <div id="alert" class="alert alert-danger" style="display:none;">
                                    <p>NISN Tidak ditemukan!</p>
                                </div>

                            </div>
                            
                            <div class="col-md-12">

                                <div class="form-group">

                                    <label for="namapemain">Nama Pemain</label>

                                    <input class="form-control" id="namapemain" type="text" name="nama_players" required="" placeholder="Nama pemain akan muncul secara otomatis" readonly>

                                </div>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="fotopemain">Foto Pemain<small class="text-danger"> *Pastikan foto 3x4</small></label><br>

                                    <div class="custom-file">

                                        <input type="file" id="fotopemain" class="custom-file-input" name="foto_players" required>

                                        <label class="custom-file-label" for="fotopemain">Choose file</label>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="nopunggung">Nomor Punggung</label>

                                    <input class="form-control" id="nopunggung" type="number" name="no_punggung" required="" maxlength="2" max="99">

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="posisi">Posisi</label>

                                    <!--<input class="form-control" id="posisi" type="text" name="posisi" required="">-->
                                    <select class="form-control" id="posisi" name="posisi" required="">
                                        <option disabled selected>Pilih Posisi</option>
                                        <option>GK</option>
                                        <option>CB</option>
                                        <option>LB</option>
                                        <option>RB</option>
                                        <option>DMF</option>
                                        <option>AMF</option>
                                        <option>CMF</option>
                                        <option>CF</option>
                                        <option>WF</option>
                                        <option>SS</option>
                                    </select>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label for="tanggallahir">Tanggal Lahir</label>

		@if($player->u == "U9")
                                    <input class="form-control" id="tanggallahir" type="date" name="tanggal_lahir" min="2010-01-01" required="" readonly>
        @endif
		@if($player->u == "U11")
                                    <input class="form-control" id="tanggallahir" type="date" name="tanggal_lahir" min="2008-01-01" required="" readonly>
        @endif
		@if($player->u == "U13")
                                    <input class="form-control" id="tanggallahir" type="date" name="tanggal_lahir" min="2006-01-01" required="" readonly>
        @endif
                                </div>

                            </div>

                        </div>

                        <div class="form-group">
                            
						@if(Session::get('error'))
                                <div id="alert3" class="alert alert-danger">
						            <p>{{ Session::get('error') }}</p>
                                </div>
						@endif
                                <div id="alert2" class="alert alert-danger" style="display:none;">
                                    <p>Tanggal lahir tidak sesuai dengan Divisi {{ $player->u }}!</p>
                                </div>
<input id="tglah" type="text" name="tglah" style="width: 0.1px; height: 0.1px; border: none;" readonly>
                            <button id="button" type="submit" class="btn btn-primary btn-block button-prevent">Simpan</button>
                        <div id="data"></div>
                        </div>

                    </form>



                </div>

            </div>

        </div>

    </div>

</div>


@endsection
@section('js')
      <script>
         function getDataNISN() {
            $.ajax({
               type:'GET',
               url:'{{ url('/') }}/user/getdata/nisn/'+document.getElementById('nisn').value,
               dataType: 'json',
               success:function(data) {
                   if(data.name && data.lahir){
                        document.getElementById('alert').style.display = 'none';
                        document.getElementById('namapemain').value = data.name;
                        // document.getElementById('tglah').value = data.lahir;
                        document.getElementById("button").disabled = false;
                        
                        // var tgl = document.getElementById("tglah").value;
                        var tgl = data.lahir;
                        var strArray = tgl.split(" ");
                        var max = <?php if($player->u == "U9"){ echo '2010'; }else if($player->u == "U11"){ echo '2008'; }else if($player->u == "U13"){ echo '2006'; } ?>;
                        if(parseInt(strArray[2]) < parseInt(max)){
                            
                        document.getElementById('tanggallahir').value = 'Y-m-d';
                        document.getElementById('alert2').style.display = 'block';
                        document.getElementById('alert3').style.display = 'none';
                        }else{
                            
                            var bulan = strArray[1];
                            if(bulan == "Januari"){
                                bulan = "01";
                            }
                            if(bulan == "Februari"){
                                bulan = "02";
                            }
                            if(bulan == "Maret"){
                                bulan = "03";
                            }
                            if(bulan == "April"){
                                bulan = "04";
                            }
                            if(bulan == "Mei"){
                                bulan = "05";
                            }
                            if(bulan == "Juni"){
                                bulan = "06";
                            }
                            if(bulan == "Juli"){
                                bulan = "07";
                            }
                            if(bulan == "Agustus"){
                                bulan = "08";
                            }
                            if(bulan == "September"){
                                bulan = "09";
                            }
                            if(bulan == "Oktober"){
                                bulan = "10";
                            }
                            if(bulan == "Nopember"){
                                bulan = "11";
                            }
                            if(bulan == "Desember"){
                                bulan = "12";
                            }
                        document.getElementById('alert2').style.display = 'none';
                            document.getElementById('tanggallahir').value = strArray[2] + "-" + bulan + "-" + strArray[0];
                        }
                   }else{       
                        document.getElementById('alert').style.display = 'block';
                        document.getElementById('alert2').style.display = 'none';
                        document.getElementById('alert3').style.display = 'none';
                        document.getElementById('namapemain').value = '';
                        document.getElementById('tanggallahir').value = 'Y-m-d';
                        document.getElementById("button").disabled = true;
                   }
               }
            });
         }
         
      </script>
@endsection
