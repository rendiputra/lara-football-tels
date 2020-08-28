<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <!-- fav -->

    <link rel="apple-touch-icon" href="{{asset('img/tfc.png')}}" sizes="180x180">

    <link rel="icon" href="{{asset('img/tfc.png')}}" sizes="32x32" type="image/png">

    <link rel="icon" href="{{asset('img/tfc.png')}}" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="{{asset('img/tfc.png')}}" color="#563d7c">

    <link rel="icon" href="{{asset('img/tfc.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">



    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>TELESANDI FOOTBALL CUP 2019</title>


    <!--Data Table-->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
     
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


    <!-- Bootstrap -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">

  <!-- Lightbox -->
  <link rel="stylesheet" href="https://syntx.id/lightbox/dist/css/lightbox.min.css">

    <script src="https://kit.fontawesome.com/78d1706a73.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>


<style>
body{
  font-family: 'Lexend Deca', sans-serif;
}

#loading{
    position: fixed;
    width: 100%;
    height: 100vh;
    background-color: #fff;
    z-index: 9999;
}
.loading{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    height: 40px;
    display: flex;
    align-items: center;
}


@keyframes  loading {
  0%{
    height: 0;
  }
  50%{
    height: 40px;
  }
  100%{
    height: 0;
  }
}


@font-face {

    font-family: 'Tw Cen MT';

    font-style: normal;

    font-weight: normal;

    src: local('Tw Cen MT'), url('Tw Cen MT.woff') format('woff');

}

.carousel::-webkit-scrollbar {

    width: 2px;

    height: 2px;

} 



/* Track */

.carousel::-webkit-scrollbar-track {

  background: #f1f1f1; 

}

 

/* Handle */

.carousel::-webkit-scrollbar-thumb {

  background: #888; 

}


/* ICON */
        .item .icon-acc .eaea {
        	font-size: 25px;
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    color: #fff;
		    -webkit-transform: translate(-50%, -50%);
		    -ms-transform: translate(-50%, -50%);
		    transform: translate(-50%, -50%);
		}
		.icon-acc {
		    position: absolute;
		    content: '';
		    top: 0;
		    left: 0;
		    width: 30px;
		    height: 30px;
		    line-height: 30px;
		    border-radius: 100px;
		    font-size: 14px;
		    text-align: center;
		    background-color: #1f2861;;
		    transition: .5;
		}
		.partners #accordion .item .data h6 {
			font-size: 17px;
			line-height: 30px;
			cursor: default;
		}
		.btn-acc:hover{
			text-decoration: none;
		}
		.card-header .btn-acc .item .icon-acc{
			-webkit-transform: rotate(90deg);
			-moz-transform: rotate(90deg);
			transform: rotate(-90deg);
			transition: .5s;
		} 
		.card-header.active .btn-acc .item .icon-acc{
			-webkit-transform: rotate(0deg);
			-moz-transform: rotate(0deg);
			transform: rotate(0deg);
		} 



/* Handle on hover */

.carousel::-webkit-scrollbar-thumb:hover {

  background: #555; 

}

/* Global Variables */

:root {

      /* Tile Dimensions */

      --carousel-tile-spacing: 10px;

      --carousel-tile-width:   250px;

      --carousel-tile-height:  calc(var(--carousel-tile-width) / (16 / 12));



      /* Growth Factor */

      --carousel-growth-factor: 1.5;



      /* Fade to Opacity */

      --carousel-fade-opacity:   0.25;

      --carousel-normal-opacity: 1;



      /* Automatic Offsets - DO NOT ALTER */

      --carousel-offset-left:  calc(-1 * (var(--carousel-tile-width) * (var(--carousel-growth-factor) - 1) / 2));

      --carousel-offset-right: calc(var(--carousel-tile-width) * (var(--carousel-growth-factor) - 1));



      /* Transition Speeds */

      --carousel-transition-1: 1s;

      --carousel-transition-2: 0.5s;

      --carousel-transition-3: 0.3s;



}



/* Carousel Container */

.carousel {

      margin: 0;

      box-sizing: border-box;

      width: 100%;

      overflow-x: auto;

      overflow-y: hidden;



}



/* Carousel Row */

.carousel-row {

      white-space: nowrap;

      margin-top: calc((var(--carousel-tile-height) * (var(--carousel-growth-factor) - 1)) / 2);

      margin-bottom: calc((var(--carousel-tile-height) * (var(--carousel-growth-factor) - 1)) / 2);

      margin-left: calc((var(--carousel-tile-width) * (var(--carousel-growth-factor) - 1)) / 2);

      margin-right: calc((var(--carousel-tile-width) * (var(--carousel-growth-factor) - 1)) / 2);

      transition: var(--carousel-transition-2);

}



/* Content Tile */

.carousel-tile {

      position: relative;

      display: inline-block;

      width: var(--carousel-tile-width);

      height: var(--carousel-tile-height);

      margin-right: var(--carousel-tile-spacing);

      transition: var(--carousel-transition-2);

      -webkit-transform-origin: center left;

      transform-origin: center left;

      cursor: pointer;

      cursor: hand;

}



/* Add Extra Margin to Last Carousel Tile */

.carousel-tile:last-of-type {

      margin-right: calc(var(--carousel-tile-width)/2.3);

}



/* Ensure All Elements Inside Tile are Block */

.carousel-tile * {

      display: block;

}



/* Carousel Row on Hover */

.carousel-row:hover {

      -webkit-transform: translate3d(var(--carousel-offset-left), 0, 0);

      transform: translate3d(var(--carousel-offset-left), 0, 0);

}



/* Content Tile on Carousel Row Hover */

.carousel-row:hover .carousel-tile {

      opacity: var(--carousel-fade-opacity);

}



/* Content Tile on Hover on Carousel Row Hover */

.carousel-row:hover .carousel-tile:hover {

      -webkit-transform: scale(var(--carousel-growth-factor));

      transform: scale(var(--carousel-growth-factor));

      opacity: var(--carousel-normal-opacity);

}



/* Content Tile on Hover */

.carousel-tile:hover ~ .carousel-tile {

      -webkit-transform: translate3d(var(--carousel-offset-right), 0, 0);

      transform: translate3d(var(--carousel-offset-right), 0, 0);

}



.kofer {

    background-image: url("img/lapangan.jpg");

    background-size: cover;

    width: 100%;

    height: 100%;



}

.kofer::before{

  background-color: rgba(0, 0, 0, 0.37);

  content: '';

  display: block;

  height: 100%;

  position: absolute;

  width: 100%;

}



#header{

    width: 100%;

    height: 100vh;

}



.bg-img{

    background-image: url('img/lapangan.jpg');

    background-size: cover;

    width: 100%;

    height: 100vh;

    background-attachment: fixed;

}

.dark{

    width: 100%;

    height: 100vh;

    background-color: rgba(0,0,0,0.5);

    padding-bottom: 50px;

}
.bg-img2{

    background-image: url('img/lapangan.jpg');

    background-size: cover;

    width: 100%;

    height: auto;

    background-attachment: fixed;

}

.dark2{

    width: 100%;

    height: auto;

    background-color: rgba(0,0,0,0.5);

    padding-bottom: 50px;

}



.center{

    position: absolute;

    left: 50%;

    top: 50%;

    transform: translate(-50%,-50%);

}



.navbar-dark, .bg-dark{

  background-color: #1f2861 !important;

}

.syntels.scrolled {

  background-color: #1f2861 !important;

  transition: background-color 200ms linear;

}
.biru {
  color: #1f2861;
}

</style>

<body>

<!--<section id="loading">-->
<!--  <div class="loading">-->
<!--    <div class="spinner-grow biru"></div>-->
<!--  </div>-->
<!--</section>-->

<section id="header">

    <div class="bg-img animated fadeIn">

            <div class="dark">

                <center>

                <div class="center">
                    <img src="{{asset('img/tfc.png')}}" class="animated bounceInDown" width="200" height="200">

                    <h4 class="animated bounceInUp" style="color: white; font-family: 'Tw Cen MT'">Telesandi Football Cup</h4>

                    <div style="top: 50vh; position: absolute;" class="container text-center">

                        <a style="color: white;" class="page-scroll" href="#pendaftaran"><i class="fa-2x fas faa-bounce animated fa-chevron-down"></i></a>

                    </div>

                </div>

                </center>

            </div>

        </div>

</section>





<nav class="navbar syntels navbar-expand-lg navbar-dark bg-dark sticky-top">

    <div class="container">

        <a class="navbar-brand animate fadeIn" href="/">

           <img src="{{asset('img/tfc.png')}}" width="50" height="50" class="d-inline-block align-top" alt="">

          </a>

          <a class="navbar-brand" href="/">

            <b>TFC 2019</b>

          </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="navbar-nav ml-auto">

                <a style="margin-right: 10px;" class="nav-item nav-link active page-scroll" href="#header">Beranda</a>
                
                <!--<a style="margin-right: 10px;" class="nav-item nav-link page-scroll" href="#juknis">Juknis</a>-->

                <a style="margin-right: 10px;" class="nav-item nav-link page-scroll" href="/participants">Peserta</a>

                <!--<a style="margin-right: 10px;" class="nav-item nav-link" href="/fixtures">Jadwal</a>-->

                <a style="margin-right: 10px;" class="nav-item nav-link" href="/cup">CUP</a>

                <!--<a style="margin-right: 10px;" class="nav-item nav-link" href="/result">Hasil</a>-->

                <!--<a style="margin-right: 10px;" class="nav-item nav-link" href="/rules">Peraturan</a>-->

                <a style="margin-right: 10px;" class="nav-item nav-link" href="/galeri">Galeri</a>
                <a style="margin-right: 10px;" class="nav-item nav-link page-scroll" href="#maps">Venue</a>



            <!-- Authentication Links -->

            @guest

                    <a class="nav-item nav-link btn btn-danger my-2 my-sm-0" href="{{ route('login') }}" style="border-radius: 40px; width: 70px; margin-right: 15px; color: white;">{{ __('Login') }}</a>

    <!--                 @if (Route::has('register'))

                    <a class="nav-item nav-link btn btn-outline-danger my-2 my-sm-0" href="{{ route('register') }}" style="border-radius: 40px; width: 70px; margin-right: 15px;">{{ __('Register') }}</a>

                @endif -->

            @else

                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                        {{ Auth::user()->email }} <span class="caret"></span>

                    </a>



                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        @if(Auth::user()->isAdmin == TRUE)
                            <a href="/admin/dash" class="dropdown-item">Dashboard</a>
                            <a href="/usercreatedlorem" class="dropdown-item">Buat User</a>
                            <a href="/admin/klasemen" class="dropdown-item">Manage Klasemen</a>
                            <a href="/admin/jadwal" class="dropdown-item">Manage Jadwal</a>
                            
                        @else
                            <a class="dropdown-item @if(Request::is('home','home/*')) active @endif" href="/user/dash">
                                {{ __('Dashboard') }}
                            </a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                      <!--<a class="dropdown-item" href="/user/dash">-->

                      <!--      {{ __('Dashboard') }}-->

                      <!--  </a>-->

                      <!--  <a class="dropdown-item" href="{{ route('logout') }}"-->

                      <!--     onclick="event.preventDefault();-->

                      <!--                   document.getElementById('logout-form').submit();">-->

                      <!--      {{ __('Logout') }}-->

                      <!--  </a>-->



                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                            @csrf

                        </form>

                    </div>

                </li>

            @endguest



            </div>

        </div>

    </div>

</nav>



<!--    <section id="juknis" class="juknis">-->
<!--        <div class="container mb-5">-->
<!--            <div class="row justify-content-center" style="margin-top: 80px;">-->
<!--                <div class="col col-12 col-md-10 col-xs-10 text-center mb-4">-->
<!--                    <div class="header-section">-->

<!--        <h3 class="text-center text-uppercase">Petunjuk Teknis                                                      -->
<!--        </h3>-->

<!--        <hr style="width: 50px; border: 2px solid #1f2861;">-->

<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row justify-content-center">-->
<!--                <div class="col col-12 col-md-6 col-xs-6">-->
<!--                    <div class="section-desc partners">-->
<!--                       <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">-->

<!--                       	 <div class="card" style="border: none;">-->

						    <!-- Card header -->
<!--						    <div class="card-header" role="tab" id="headingOne1" style="background-color: #fff; border: none;">-->
<!--						      <a class="btn-acc" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne0" aria-expanded="true"-->
<!--						        aria-controls="collapseOne0">-->

<!--						        <div class="item" style="position: relative; padding-left: 45px;">-->
<!--						        	 <div class="icon-acc asade">	-->
<!--						        	    <i class="fas fa-angle-down rotate-icon eaea"></i>-->
<!--							        </div>-->
<!--							         <h6 class="section-text mb-0" style="font-size: 20px; color: #1f2861;">-->
							       
<!--							        	PENDAFTARAN-->
							        	
<!--							        </h6>-->
<!--						        </div>-->
						        
						       
						        
<!--						      </a>-->
<!--						    </div>-->

						    <!-- Card body -->
<!--						    <div id="collapseOne0" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">-->
<!--						      <div class="card-body">-->
<!--						      	<ul>-->
<!--						          <li>-->
<!--						          	<h6 style="color: #404040"><b>TANGGAL :</b></h6>-->
<!--						          		<ul> 	<li>2 September 2019 &ndash; 30 September 2019</li> </ul>-->
			                        	
<!--			                    	</li>-->
<!--						      	</ul>-->
<!--						      </div>-->
<!--						    </div>-->

<!--						  </div>-->

						  <!-- Accordion card -->
<!--						  <div class="card" style="border: none;">-->

						    <!-- Card header -->
<!--						    <div class="card-header active" role="tab" id="headingOne1" style="background-color: #fff; border: none;">-->
<!--						      <a class="btn-acc" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"-->
<!--						        aria-controls="collapseOne1">-->

<!--						        <div class="item" style="position: relative; padding-left: 45px;">-->
<!--						        	 <div class="icon-acc asade">			-->
<!--						        	    <i class="fas fa-angle-down rotate-icon eaea"></i>	        		-->
<!--							        </div>-->
<!--							         <h6 class="section-text mb-0" style="font-size: 20px; color: #1f2861;">-->
							       
<!--							        	TECHNICAL MEETING -->
							        	
<!--							        </h6>-->
<!--						        </div>-->
						        
						       
						        
<!--						      </a>-->
<!--						    </div>-->

						    <!-- Card body -->
<!--						    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">-->
<!--						      <div class="card-body">-->
<!--						      	<ul>   <li>   	<h6 style="color: #404040"><b>HARI & TANGGAL :</b></h6>     	<ul>         	<li>Kamis, 3 Oktober 2019</li>     	</ul> 	</li>   <li>   	<h6 style="color: #404040"><b>WAKTU :</b></h6>     <ul>         <li>10.00 &ndash; selesai</li>     </ul>   </li>   <li>   	<h6 style="color: #404040"><b>TEMPAT :</b></h6>     <ul>         <li>AULA SMK Telekomunikasi Telesandi Bekasi</li>     </ul>   </li> </ul>-->
						      	
<!--						      </div>-->
<!--						    </div>-->

<!--						  </div>-->
						  <!-- Accordion card -->

						  <!-- Accordion card -->
<!--						  <div class="card" style="border: none;">-->

						    <!-- Card header -->
<!--						    <div class="card-header" role="tab" id="headingTwo2" style="border: none; background-color: #fff;">-->
<!--						      <a class="collapsed btn-acc" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"-->
<!--						        aria-expanded="false" aria-controls="collapseTwo2">-->
<!--						         <div class="item" style="position: relative; padding-left: 45px;">-->
<!--						        	 <div class="icon-acc asade">	        		-->
<!--						        	    <i class="fas fa-angle-down rotate-icon eaea"></i>-->
<!--							        </div>-->
<!--							         <h6 class="section-text mb-0" style="font-size: 20px; color: #1f2861;">-->
							       
<!--							        	PELAKSANAAN LOMBA-->
							        	
<!--							        </h6>-->
<!--						        </div>-->
<!--						      </a>-->
<!--						    </div>-->

						    <!-- Card body -->
<!--						    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">-->
<!--						      <div class="card-body">-->
<!--								<ul>-->
<!--  <li>-->
<!--  	<h6 style="color: #404040"><b>TANGGAL :</b></h6>-->
<!--    	<ul>-->
<!--        	<li>5 Oktober 2019 s.d. 26 Oktober 2019</li>-->
<!--    	</ul>-->
<!--	</li>-->
<!--  <li>-->
<!--  	<h6 style="color: #404040"><b>WAKTU :</b></h6>-->
<!--    <ul>-->
<!--        <li>08.00 &ndash; 17.00 WIB</li>-->
<!--    </ul>-->
<!--  </li>-->
<!--  <li>-->
<!--  	<h6 style="color: #404040"><b>TEMPAT :</b></h6>-->
<!--    <ul>-->
<!--        <li>Spotels Arena</li>-->
<!--    </ul>-->
<!--  </li>-->
<!--</ul>-->

						       
<!--						      	</ul>-->
<!--						      </div>-->
<!--						    </div>-->
<!--						  </div>-->


						  <!-- Accordion card -->
<!--						  <div class="card" style="border: none;">-->

						    <!-- Card header -->
<!--						    <div class="card-header" role="tab" id="headingTwo2" style="border: none; background-color: #fff;">-->
<!--						      <a class="collapsed btn-acc" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo3"-->
<!--						        aria-expanded="false" aria-controls="collapseTwo3">-->
<!--						         <div class="item" style="position: relative; padding-left: 45px;">-->
<!--						        	 <div class="icon-acc asade">-->
<!--						        	    <i class="fas fa-angle-down rotate-icon eaea"></i>-->
							        						        		
<!--							        </div>-->
<!--							         <h6 class="section-text mb-0" style="font-size: 20px; color: #1f2861;">-->
							       
<!--							        	KONTAK PERSON-->
							        	
<!--							        </h6>-->
<!--						        </div>-->
<!--						      </a>-->
<!--						    </div>-->

						    <!-- Card body -->
<!--						    <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">-->
<!--						      <div class="card-body">-->
<!--						      	<ul>-->
<!--						      	    <li>-->
<!--						      	    	<h6 style="color: #404040"><b>No. Hp / Whatsapp :</b></h6>-->
<!--						      	    	<ul>-->

										
<!--			                            	<li><a href="https://wa.me/6281282335099" target="_blank" style="color: black; text-decoration: underline;">081282335099 (Pak Doto)</a></li>-->
<!--			                            	<li><a href="https://wa.me/628706881633" target="_blank" style="color: black; text-decoration: underline;">085706881633 (Adrian)</a></li>-->
<!--			                        	</ul>-->
<!--						      	    </li>-->
<!--						      	</ul>-->
						      	
<!--						      </div>-->
<!--						    </div>-->
<!--						  </div>-->
<!--						</div>-->
						<!-- Accordion wrapper -->

                        
                        
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col col-12 col-md-5 col-xs-5">-->
<!--                    <div class="img-juknis">-->
<!--                        <center>-->
<!--                            <img src="{{asset('/img/juknis.png')}}" alt="IMG JUKNIS" height="auto" width="80%" max-width="100%">-->
<!--                        </center>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    
<section id="pendaftaran" style="background-color: #1f2861 !important" class="text-light">

  <div class="container">
  
    <div class="c-content-title">

      <center><br><br>  <br>  

        <h1>Telah Dibuka</h1>

        <hr  width="  50px" style="border:2px solid white"> <br>  

        <h3>Ayo segera daftarkan Tim kalian untuk mengikuti Telesandi Football Cup (Mini Soccer)</h3><br>  
      
        <h6>Klik tombol daftar untuk menghubungi panitia pendaftaran (<a href="tel:6281282335099" style="color: white; font-weight: bold; text-decoration: underline;">081282335099</a> Pak Doto)</h6><br>  

        <a href="https://wa.me/6281282335099?text=Hallo, Saya ingin mendaftarkan tim saya di TFC 2019" class="btn btn-danger btn-lg btn-block " style="border-radius:60px;" target="_blank">Daftar Sekarang</a><br>  <br>  <br>  

      </center>

    </div>

  </div>

</section>

<section id="top_score">
    
    <div class="container">
        
        <center>
            
			<br><br><br><h1>Top Score</h1>
        
        </center>
        
    </div>
    
    <div class="container">
		<div class="c-content-tab-3 c-opt-1" role="tabpanel">
			<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

              <li class="active">

                <a href="#U9" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3 active" aria-expanded="true" style="border-radius: 60px; width: 50px; margin-right: 15px;">U9</a>

                <a href="#U11" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" onclick="showall(); showcat(1);" style="border-radius: 60px; width: 50px; margin-right: 15px;">U11</a>

                <a href="#U13" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" onclick="showall(); showcat(1);" style="border-radius: 60px; width: 50px;">U13</a>

              </li>

            </ul>
		</div>
		<div class="tab-content ">

			<!-- U9 -->
			<div role="tabpanel" class="tab-pane active" id="U9">
				<div class="c-content-title-1">
					<h1 align="center">
						<b>U9 Telesandi Football Cup</b><br>
					</h1>
				</div>
				<div class="container table-responsive">
				    <div class="col-lg-12">
				    <table class="text-center table table-striped gue">
				        <thead>
				            <tr>
				                <td>No</td>
				                <td>Nama</td>
				                <td>Club</td>
				                <td>Gol</td>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>1</td>
				                <td>Rizfan</td>
				                <td>Telesandi Football Club</td>
				                <td>500</td>
				            </tr>
				        </tbody>
				    </table>
				</div>
				</div>
			</div>
			<!-- U11 -->
			<div role="tabpanel" class="tab-pane" id="U11">
				<div class="c-content-title-1">
					<h1 align="center">
						<b>U11 Telesandi Football Cup</b><br>
					</h1>
				</div>
				<div class="container table-responsive">
				    <div class="col-lg-12">
				    <table class="text-center table table-striped gue" width="1051px">
				        <thead>
				            <tr>
				                <td>No</td>
				                <td>Nama</td>
				                <td>Club</td>
				                <td>Gol</td>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>1</td>
				                <td>Rizfan</td>
				                <td>Telesandi Football Club</td>
				                <td>500</td>
				            </tr>
				        </tbody>
				    </table>
				</div>
				</div>
			</div>
			<!-- U13 -->
			<div role="tabpanel" class="tab-pane" id="U13">
				<div class="c-content-title-1">
					<h1 align="center">
						<b>U13 Telesandi Football Cup</b><br>
					</h1>
				</div>
				<div class="container table-responsive">
				    <div class="col-lg-12">
				    <table class="text-center table table-striped gue" width="1051px">
				        <thead>
				            <tr>
				                <td>No</td>
				                <td>Nama</td>
				                <td>Club</td>
				                <td>Gol</td>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>1</td>
				                <td>Rizfan</td>
				                <td>Telesandi Football Club</td>
				                <td>500</td>
				            </tr>
				        </tbody>
				    </table>
				</div>
				</div>
		</div>
	    </div>
	</div>
    <br><br><br>
</section>

<!-- 
<section id="pendaftaran"  style="background-color: #1f2861 !important" class="text-light" > 

  <div class="container">
  
    <div class="c-content-title">

      <center><br><br>  <br>  

        <h1>Telah Dibuka</h1>

        <hr  width="  50px" class="text-light" style="border:2px solid black"> <br>  

        <h3>Ayo Segera Daftarkan Tim Kamu untuk Mengikuti Telesandi Football Cup (Mini Soccer)!</h3><br>  <br>  
        
        <a href="/register" class="btn btn-danger  btn-lg btn-block " style="border-radius:60px;">Daftar</a><br>  <br>  

        <h6>Klik Tombol Daftar untuk Daftarkan Tim Kamu</h6><br>  
        
        <br>  <br>  <br>  

      </center>

    </div>

  </div>

</section> -->

<section id="tentang">

  <div class="bg-img2">  
    <div class="dark2">
    <div class="container">
      <br>
      <br>

      <div class="row justify-content-center">
        
        <div class="col col-md-6 col-sm-10 col-12 text-center"> 
  
          <img src="{{asset('img/tfc.png')}}" width="70%" height="auto" >
  
        </div>

        <div class="col col-md-6 col-sm-10 col-12  justify-content-center" style="color: white;"> 

          <div class="header-section"> <br> <br>  

              <p class="section-title">Tentang</p>

              <h4 class="section-text text-left">Telesandi Football Cup</h4>

              <p class="align-self-center section-desc"><strong>Telesandi Football Cup</strong> adalah sebuah ajang perlombaan sepak bola yang diadakan oleh <b>SMK Telekomunikasi Telesandi Bekasi.</b> </p>
              
              <p><b>TFC</b> bertujuan untuk membuat semangat para pemain bola muda berani tampil dan unjuk kemampuan di lapangan serta menambah kepercayaan diri para pemain bola muda tersebut.</p>

              <p><b>Telesandi Football Cup</b> juga berguna untuk mencari bibit-bibit unggul para pemain muda yang memiliki potensi untuk berprestasi di dunia sepak bola.</p>

          </div>

        </div>

      </div>

    </div>
</div>
</div>
</section>


<section id="galeri">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-sm-12 mb-4" style="margin-top: 80px;">

                <h3 class="text-center text-uppercase">Galeri</h3>

                <hr style="width: 50px; border: 2px solid #1f2861;">

            </div>

            <!-- <div class="col-sm-3 mb-4">

              <img src="{{asset('img/lapangan.jpg')}}" class="card-img-top" alt="...">

                <h5 class="text-center">Card title</h5>

            </div>

            <div class="col-sm-3 mb-4">

              <img src="{{asset('img/lapangan.jpg')}}" class="card-img-top" alt="...">

                <h5 class="text-center">Card title</h5>

            </div> -->

            <div class="carousel">

                <div class="carousel-row">

                      <div class="carousel-tile"><a href="{{asset('compressjpeg')}}/1.JPG" data-lightbox="Laptop1"><img src="{{asset('compressjpeg')}}/1.JPG" style="width: 90%;" ></a></div>

                      <div class="carousel-tile"><a href="{{asset('compressjpeg')}}/4.JPG" data-lightbox="Laptop1"><img src="{{asset('compressjpeg')}}/4.JPG" style="width: 90%;"></a></div>

                      <div class="carousel-tile"><a href="{{asset('compressjpeg')}}/2.JPG" data-lightbox="Laptop1"><img src="{{asset('compressjpeg')}}/2.JPG" style="width: 90%;"></a></div>

                      <div class="carousel-tile"><a href="{{asset('compressjpeg')}}/3.JPG" data-lightbox="Laptop1"><img src="{{asset('compressjpeg')}}/3.JPG" style="width: 90%;"></a></div>

                      <div class="carousel-tile"><a href="{{asset('compressjpeg')}}/5.JPG" data-lightbox="Laptop1"><img src="{{asset('compressjpeg')}}/5.JPG" style="width: 90%;"></a></div>

                </div>

            </div>

        </div>

        <br><br><br><br>

    </div>    

</section>

<section id="maps">
	<div class="container">
		<div class="row">
            <div class="col-sm-12 mb-5" style="margin-top: 20px;">

                <h3 class="text-center text-uppercase">Venue</h3>

                <hr style="width: 50px; border: 2px solid #1f2861;">

            </div>
        </div>
    </div>
	<div class="container-fluid" style="margin: 0; padding: 0;">
		<div style="margin-top: -150px; position: absolute; padding: 73px 10px 10px 12px; margin: 10px;">
			<p style="font-size: 12px;">Pak Mardoto (0812-8233-5099)</p>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.088927839129!2d107.06053298738047!3d-6.252012849881446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f64bfed98e1%3A0x1ed98bddfb107496!2sSpotels%20Arena!5e0!3m2!1sen!2sid!4v1568198952652!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.5773467301465!2d107.05880311407533!3d-6.2530148954738625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ff041f1a54d%3A0x67353d6d07e61501!2sSyntax%20Telesandi!5e0!3m2!1sid!2sid!4v1568170751489!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>-->
	</div>
</section>

<section id="sponsor">
	<div class="container mb-5"  style="margin-top: 80px;">
		<div class="row">
			<div class="col-md-12 text-center mb-5">
                <h3 class="text-center text-uppercase">Sponsor</h3>
                <hr style="width: 50px; border: 2px solid #1f2861;">

				<img src="https://peoplepng.com/wp-content/uploads/2019/04/logo-telkomsel-terbaru-png-4.png" style="width: 300px;">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-center mb-5">
                <h3 class="text-center text-uppercase">Media Partner</h3>
                <hr style="width: 50px; border: 2px solid #1f2861;">
				<img style="width: 130px;" src="https://telesandifestival.com/images/partner/1567410142.jpg">
				<img style="width: 100px;" src="https://telesandifestival.com/images/partner/1567876914.jpeg"><br>
				<img style="width: 200px;" src="https://telesandifestival.com/images/partner/1568806884.jpg">
			</div>
			<div class="col-md-6 text-center">
                <h3 class="text-center text-uppercase">Support</h3>
                <hr style="width: 50px; border: 2px solid #1f2861;">
				<img style="width: 150px;" src="/img/bekicode3.png">
				<img style="width: 80px;" src="/img/20190913_203252.png"><br>
				<img style="width: 70px;" src="/img/footballtels.jpg">
				<img style="width: 120px;" src="/img/ammos.jpg">
			</div>
</section>

    <footer class="bg-dark" style="background-color: #3a3a3a !important; padding: 25px 0px 0px 0px;">

      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-4">

            <center><img src="{{asset('img/tfc.png')}}" style="width: 200px;"></center>

          </div>

          <div class="col-md-8">

            <h3 style="color: white;">Kontak Kami</h3>

            <hr style="left: 10; top:30px; position: absolute; width: 50px; border: 2px solid #1f2861;">

            <div class="row">  

              <div class="col-lg-6">  

                <table>

                <tr>

                  <td>

                    <i class="fas fa-map-marked-alt text-center" style="background-color: #fff; padding: 10px; border-radius: 100%; width: 38px; height: 38px;"></i>

                  </td>

                  <td>

                    <p style="color: white; margin-top: 20px; margin-left: 20px;">Mekarsari Raya Jl. KH. Mochammad, Tambun Selatan Bekasi, Indonesia.</p>

                  </td>

                </tr>

                <tr>

                  <td>

                    <i class="fas fa-phone-alt text-center" style="background-color: #fff; padding: 10px; border-radius: 100%; width: 38px; height: 38px;"></i>

                  </td>

                  <td>

                    <p style="color: white; margin-top: 20px; margin-left: 20px;">0812-8233-5099 (Pak Doto)<br>0857-0688-1633 (Adrian Rizki)<br>0896-8289-0925 (Fauzan)</p>

                  </td>

                </tr>

                </table>

              </div>

              <div class="col-lg-6">  

                <table>

                <tr>

                  <td>

                    <i class="fas fa-envelope-open-text text-center" style="background-color: #fff; padding: 10px; border-radius: 100%; width: 38px; height: 38px;"></i>

                  </td>

                  <td>

                    <p style="color: white; margin-top: 20px; margin-left: 20px;"><a style="color: white;" href="mailto:telsscup@gmail.com">telsscup@gmail.com</a></p>

                  </td>

                </tr>

                <tr>

                  <td>

                    <i class="fab fa-instagram text-center" style="background-color: #fff; padding: 10px; border-radius: 100%; width: 38px; height: 38px;"></i>

                  </td>

                  <td>

                    <p style="color: white; margin-top: 20px; margin-left: 20px;"><a style="color: white;" href="https://instagram.com/telesandi.festival">@telesandi.festival</p>
                    
                  </td>

                </tr>

                </table>
              </div>

            </div>

          </div>

        </div>

      </div>

      <p style="background-color: #2b2b2b !important; color: #fff; padding: 15px; margin: 0;" class="text-center">&copy; 2019 <a href="/" style="color: #fff; text-decoration: none;">Telesandi Football Cup</a>. All rights reserved.</p>

    </footer>

  <!-- Lightbox -->
  <script src="https://syntx.id/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="{{asset('js/bootstrap.min.js')}}"></script>    

    <script src="{{asset('js/carousel.js')}}"></script>    

    <script>

    $(function () {

        $(document).scroll(function () {

            var $nav = $(".syntels");

            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

        });

    });



    $('.page-scroll').click(function(e){

          if (this.hash !== "") {

              e.preventDefault();

              var hash = this.hash;



              $('html, body').animate({

                  scrollTop: $(hash).offset().top - 75

              }, 1000);

          }

      });



      $('.custom-file-input').on('change', function() { 

   let fileName = $(this).val().split('\\').pop(); 

   $(this).next('.custom-file-label').addClass("selected").html(fileName); 

});

    $(window).on('load', function(){
    //     document.getElementById("loading").style.display = 'none';
        $(".item-logo").addClass('animated zoomInDown');
        $(".header-content").addClass('animated slideInUp');
        $(".item-header").addClass('animated fadeInLeft');
    });
    </script>

<script>
	 $('.collapse').on('show.bs.collapse', function () {
	    $(this).siblings('.card-header').addClass('active');
	  });

	  $('.collapse').on('hide.bs.collapse', function () {
	    $(this).siblings('.card-header').removeClass('active');
	  });
</script>


<script>
$(document).ready(function() {
    $('.gue').DataTable({
        "paging": false
    });
} );
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.js"></script>-->
</body>

</html>