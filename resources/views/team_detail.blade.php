@extends('layouts/app')

@section('title', 'Tim Detail')

@section('content')


<section id="participants" style=" background-color: silver;">
    <div class="container-fluid  justify-content-center bg-white">
        <div class="row justify-content-center">      
        <img src="{{url('img/sekolah/'.$team->foto_sekolah)}}" style="border-radius: 20px; padding-top: 20px ; width: 250px;" class=" justify-content-center rounded" alt="{{$team->asal_sekolah}}">
        </div>
        <div class="row justify-content-center" style="padding-top: 20px ;">  

        <p class="h2" >{{$team->asal_sekolah}} </p><br>
        </div><br>
      <table class="table bg-white">
        <tbody>
          <tr>            
            <th scope="col" style="font-size: 1.23rem">Nama Sekolah</th>
            <td style="font-size: 1.33rem">{{$team->asal_sekolah}}</td>
          </tr>
          <tr>
            <th style="font-size: 1.23rem" scope="col">Alamat Sekolah</th>
            <td style="font-size: 1.33rem">{{$team->alamat_sekolah}}</td>
          </tr>
          <tr>
            <th style="font-size: 1.23rem" scope="col">Nomor Telepon</th>
            <td style="font-size: 1.33rem">{{$team->no_hp}}</td>
          </tr>
          <tr>
            <th style="font-size: 1.23rem" scope="col">Nomor Telepon</th>
            <td style="font-size: 1.33rem">{{$team->telepon}}</td>
          </tr>
          <tr>
            <th style="font-size: 1.23rem" scope="col">E-mail</th>
            <td style="font-size: 1.33rem">{{$team->email}}</td>
          </tr>
        </tbody>
      </table>

    </div>

<!-- ---------------- -->        
</section>

@endsection