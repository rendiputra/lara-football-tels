@extends('../layouts/main')



@section('title', 'Telesandi Football Cup')

@section('active', 'Active')



@section('content')

<style>

.card_portofolio{

      height: 245px; 

      background-color: white; 

      border-radius: 20px; 

      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);

      padding: 30px;

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

      <h3 class="text-center text-uppercase">Peserta</h3>

        <hr style="width: 50px; border: 2px solid #1f2861;">

    </div>

  </div>

  <div class="row">

  @foreach ($participant as $participant)

    <div class="col-md-3">

      <div class="card_portofolio">
        <a href="/detail_tim/{{$participant->id_teams}}">
          <!--<img src="images/logo_portofolio/bekasi-guide.jpg" alt="logo" style="position: relative; width: 100px; height: auto; top: 22%;">-->

        @if($participant->foto_teams == null)
        
          <center><img src="{{asset('img/nologo.png')}}" alt="logo" style="height: 130px; top: 20px;"></center>
        @else
          <center><img src="{{asset('img/team')}}/{{$participant->foto_teams}}" alt="logo" style="height: 130px; top: 20px;"></center>
        @endif
          <!-- <div style="width: 120px; height: 120px; background-color: rgb(206, 221, 221); border-radius: 100px;"></div> -->

          <br>

          <p class="text-center" style="color: #2b2be8;">{{$participant->nama_teams}} - {{ $participant->u }}</p>

      </div>
      </a>
    </div>

  @endforeach

  </div>

</div>

<br><br>

</section>



@endsection