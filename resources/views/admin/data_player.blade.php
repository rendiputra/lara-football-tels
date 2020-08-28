@extends('layouts.app')

@section('title', 'Data Pemain')



@section('content')

<div class="container">
    
    
  <div class="row">
    <div class="col-md-4 text-center">
        <div class="mb-4"></div>
        <div class="card_portofolio">
        @if($data->foto_teams == null)
          <img style="height: 180px;" src="{{ url('img/nologo.png') }}">
          @else
          <img style="height: 180px;" src="{{ url('img/team/'.$data->foto_teams) }}">
          @endif
        </div>
    </div>

    <div class="col-md-8"><br>
      <div class="table-responsive">
        <table class="table bg-white" >
          <tbody>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Nama Tim</th>
              <td style="font-size: 1.33rem">{{ $data->nama_teams}} || <a href="/edit_team/{{ $data->id_teams }}">Edit</a></td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Divisi</th>
              <td style="font-size: 1.33rem">{{ $data->u}}</td>
            </tr>
            
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Nama Pelatih</th>
              <td style="font-size: 1.33rem">{{ $data->nama_pelatih}}</td>
            </tr>
            
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Nama Asisten</th>
              <td style="font-size: 1.33rem">{{ $data->nama_asisten}}</td>
            </tr>
            
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">No. Handphone</th>
              <td style="font-size: 1.33rem">{{ $data->no_hp}}</td>
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
    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header">Data Pemain</div>



                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif

                    <div class="table-responsive">

                        <table class="table table-bordered">

                            <thead>

                                <tr>

                                    <td>No</td>

                                    <td>Nama Pemain</td>

                                    <td>Foto Pemain</td>

                                    <td>NP</td>

                                    <td>Posisi</td>

                                    <td>Tanggal Lahir</td>

                                    <td>NISN</td>

                                    <td>Aksi</td>

                                </tr>

                            </thead>

                            <tbody>
@php $no = 1; @endphp                                
@foreach($data2 as $m)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $m->nama_players }}</td>
                                <td><img src="{{ asset('img/teams') }}/{{ $m->foto_players }}" style="width: 100px;"></td>
                                <td>{{ $m->no_punggung }}</td>
                                <td>{{ $m->posisi }}</td>
                                <td>{{ date('d F Y', strtotime($m->tanggal_lahir)) }}</td>
                                <td>{{ $m->nisn }}</td>
                                <td><a class="btn btn-sm btn-warning" href="/admin/data_player/edit/{{ $m->id_players }}">Edit</a></td>
                            </tr>
@endforeach                            

                                @for($i=count($data2)+1; $i<=17 ; $i++)

                                <tr>

                                    <td>{{ $i }}</td>

                                    <td>-</td>

                                    <td>-</td>

                                    <td>-</td>

                                    <td>-</td>

                                    <td>-</td>

                                    <td>-</td>

                                    <td><a class="btn btn-sm btn-primary" href="/user/insert_player/{{ $data->id_teams }}">Tambah</a></td>

                                </tr>

                                @endfor

                            </tbody>

                        </table>

                    </div>



                </div>

            </div>

        </div>

    </div>

</div>

@endsection

