@extends('../layouts/main')



@section('title', 'Telesandi Football Cup')

@section('active', 'Active')



@section('content')

<style>



.card_portofolio{

      height: 280px; 

      background-color: white; 

      border-radius: 5px; 

      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);

      padding: 47px 0px 0px 0px;

      margin-bottom: 20px;

      transition: 1s;

      position: relative;

      overflow: hidden;

    }



</style>

<section id="peserta" style="background-color: #f7f7f7 !important; width: 100%; height: 100%;">

<br><br><br>

<div class="container">

  <div class="row justify-content-center">

    <div class="col-md-12">

      <h3 class="text-center text-uppercase">Detail Tim</h3>

        <hr style="width: 50px; border: 2px solid #1f2861;">
    </div>

  </div>

  <div class="row">
    <div class="col-lg-4 text-center">
        <div class="mb-4"></div>
        <div class="card_portofolio">
        @if($data2->foto_teams == null)
          <img style="height: 180px;" src="{{ url('img/nologo.png') }}">
          @else
          <img style="height: 180px;" src="{{ url('img/team/'.$data2->foto_teams) }}">
          @endif
          </div>
    </div>

    <div class="col-lg-8"><br>
      <div class="table-responsive">
        <table class="table bg-white">
          <tbody>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Nama Tim</th>
              <!--<button class="btn btn-lg btn-primary" type="button" data-toggle="collapse" data-target="#collapseForm" aria-expanded="false" aria-controls="collapseForm">Go to Form now!</button>-->
              <td style="font-size: 1.33rem"><a style="color: blue; text-decoration: underline" data-toggle="collapse" href="#collapseForm" role="button" aria-expanded="false" aria-controls="collapseForm">{{ $data2->nama_teams}}</a>
              
              </td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Divisi</th>
              <td style="font-size: 1.33rem">{{ $data2->u}}</td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Nama Pelatih</th>
              <td style="font-size: 1.33rem">{{ $data2->nama_pelatih}}</td>
            </tr>
            
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Nama Asisten</th>
              <td style="font-size: 1.33rem">{{ $data2->nama_asisten}}</td>
            </tr>
            
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">No. Handphone</th>
              <td style="font-size: 1.33rem">{{ $data2->no_hp}}</td>
            </tr>
            <!-- <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">E-mail</th>
              <td style="font-size: 1.33rem">{//{ $data->email}}</td>
            </tr> -->
          </tbody>
        </table>
      </div>

    </div>

    

  </div>

    <div class="row">
        <div class="col-md-12">
            <div class="collapse" id="collapseForm">
                <br>
                <br>
              <div class="card card-body">
              
    <div class="col-md-12">

      <h3 class="mt-3 text-center text-uppercase">Detail Pemain</h3>

        <hr style="width: 50px; border: 2px solid #1f2861;">
        <div class="mb-5"></div>
    </div>
              
                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead>

                                <tr>

                                    <td>No</td>

                                    <td>NISN</td>
                                    
                                    <td>Nama Pemain</td>

                                    <td>Foto Pemain</td>

                                    <td>NP</td>

                                    <td>Posisi</td>

                                    <td>Tanggal Lahir</td>



                                </tr>

                            </thead>

                            <tbody>
@php $no = 1; @endphp                                
@foreach($data3 as $m)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $m->nisn }}</td>
                                <td>{{ $m->nama_players }}</td>
                                <td><img src="{{ asset('img/teams') }}/{{ $m->foto_players }}" style="width: 100px;"></td>
                                <td>{{ $m->no_punggung }}</td>
                                <td>{{ $m->posisi }}</td>
                                <td>{{ date('d F Y', strtotime($m->tanggal_lahir)) }}</td>
                            </tr>
@endforeach                            



                            </tbody>

                        </table>

                    </div>
              
              
              
              </div>
            </div>  
        </div>
    </div>
</div>

<br><br>

</section>



@endsection