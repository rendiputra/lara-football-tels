@guest
<script>window.location='https://telesandifootballcup.com/';</script>
@endguest


@extends('layouts.app')

@section('content')



<style>



.card_portofolio{

      height: 300px; 

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

<section id="peserta">

<br><br>

<div class="container">

  <div class="row justify-content-center">

    <div class="col-md-12">

      <h3 class="text-center text-uppercase">Detail Pemain <br> {{ $data->nama_teams }}</h3>

        <hr style="width: 50px; border: 2px solid #1f2861;">
    </div>

  </div>

  <div class="row">
    <div class="col-lg-4 text-center">
        <div class="mb-4"></div>
        <div class="card_portofolio">
          <img style="height: 300px; margin-top: -45px;" src="{{ url('img/teams/'.$data2->foto_players) }}">
          </div>
    </div>

    <div class="col-lg-8"><br>
      <div class="table-responsive">
        <table class="table bg-white">
          <tbody>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Nama Pemain</th>
              <!--<button class="btn btn-lg btn-primary" type="button" data-toggle="collapse" data-target="#collapseForm" aria-expanded="false" aria-controls="collapseForm">Go to Form now!</button>-->
              <td style="font-size: 1.33rem">{{ $data2->nama_players}}</td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Divisi</th>
              <td style="font-size: 1.33rem">{{ $data->u}}</td>
            </tr>
            <tr>
                @php
                    $dateOfBirth = $data2->tanggal_lahir;
                    $today = date('Y-m-d');
                    $diff = date_diff(date_create($dateOfBirth), date_create($today));
                @endphp
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Umur</th>
              <td style="font-size: 1.33rem">{{ $diff->format('%y') }} Tahun | {{ date('d F Y', strtotime($data2->tanggal_lahir)) }}</td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">NP/Posisi</th>
              <td style="font-size: 1.33rem">{{ $data2->no_punggung}}/{{ $data2->posisi }}</td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">NISN</th>
              <td style="font-size: 1.33rem">{{ $data2->nisn}}</td>
            </tr>
            <tr>
                
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

    
</div>
<br>
<br>


@endsection