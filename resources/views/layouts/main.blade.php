<!DOCTYPE html>

<html lang="id">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <!-- fav -->

    <link rel="apple-touch-icon" href="{{asset('img/tfc.png')}}" sizes="180x180">

    <link rel="icon" href="{{asset('img/tfc.png')}}" sizes="32x32" type="image/png">

    <link rel="icon" href="{{asset('img/tfc.png')}}" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="{{asset('img/tfc.png')}}" color="#563d7c">

    <link rel="icon" href="{{asset('img/tfc.png')}}">



    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title') - TFC 2019</title>


    <!--Data Table-->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
     
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


    <!-- Bootstrap -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/78d1706a73.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>



<body>

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

.tes{
    background-color:#ff8a80;    
}
.tes2{
    background-color:#ba68c8;    
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
.syntels.scrolled {

  background-color: #1f2861 !important;

  transition: background-color 200ms linear;

}

.navbar-dark, .bg-dark{

  background-color: #1f2861 !important;

}

.biru {
  color: #1f2861;
}
</style>

<!--<section id="loading">-->
<!--  <div class="loading">-->
<!--    <div class="spinner-grow biru"></div>-->
<!--  </div>-->
<!--</section>    -->
<nav class="navbar syntels navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
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
                <a style="margin-right: 10px;" class="nav-item nav-link @if(Request::is('/','/*')) active @endif" href="/">Beranda</a>
            
                <!--<a style="margin-right: 10px;" class="nav-item nav-link page-scroll" href="/">Juknis</a>-->
                <a style="margin-right: 10px;" class="nav-item nav-link @if(Request::is('participants','participants*')) active @endif" href="/participants">Peserta</a>
                <a style="margin-right: 10px;" class="nav-item nav-link @if(Request::is('fixtures','fixtures*')) active @endif" href="/fixtures">Jadwal</a>
                <!--<a style="margin-right: 10px;" class="nav-item nav-link @if(Request::is('cup','cup*')) active @endif" href="/cup">CUP</a>-->
                <a style="margin-right: 10px;" class="nav-item nav-link @if(Request::is('result','result*')) active @endif" href="/result">Hasil</a>
                <a style="margin-right: 10px;" class="nav-item nav-link @if(Request::is('top_score','top_score*')) active @endif" href="/top_score">Top Score</a>



                <a style="margin-right: 10px;" class="nav-item nav-link @if(Request::is('rules','rules*')) active @endif" href="/rules">Peraturan</a>
                <a style="margin-right: 10px;" class="nav-item nav-link @if(Request::is('galeri','galeri*')) active @endif" href="/galeri">Galeri</a>
                <!--<a style="margin-right: 10px;" class="nav-item nav-link page-scroll" href="/">Venue</a>-->

            <!-- Authentication Links -->
            @guest
                    <a class="nav-item nav-link btn btn-danger my-2 my-sm-0" href="{{ route('login') }}" style="border-radius: 40px; width: 70px; margin-right: 15px; color: white;">{{ __('Login') }}</a>
    <!--                 @if (Route::has('register'))
                    <a class="nav-item nav-link btn btn-outline-danger my-2 my-sm-0" href="{{ route('register') }}" style="border-radius: 40px; width: 70px; margin-right: 15px;">{{ __('Register') }}</a>
                @endif -->
            @else
                <li class="nav-item dropdown @if(Request::is('home','home/*')) active @endif">
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
                        
                        <!--@if(Auth::user()->isAdmin == TRUE)-->
                        <!--    <a href="/admin/klasemen" class="dropdown-item">Manage Klasemen</a>-->
                        <!--    <a href="/admin/jadwal" class="dropdown-item">Manage Jadwal</a>-->
                        <!--    @else-->
                        <!--<a class="dropdown-item @if(Request::is('home','home/*')) active @endif" href="/user/dash">-->
                        <!--    {{ __('Dashboard') }}-->
                        <!--    @endif-->
                        <!--</a>-->
                        <!--<a class="dropdown-item" href="{{ route('logout') }}"-->
                        <!--   onclick="event.preventDefault();-->
                        <!--                 document.getElementById('logout-form').submit();">-->
                        <!--    {{ __('Logout') }}-->
                        <!--</a>-->

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



  @yield('content')



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

      <p style="background-color: #2b2b2b !important; color: #fff; padding: 15px; margin: 0;" class="text-center">&copy; 2019 <a href="/" style="color: #fff; text-decoration: none;">Telesandi Festival</a>. All rights reserved.</p>

    </footer>

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

                  scrollTop: $(hash).offset().top - 155

              }, 1000);

          }

      });



      $('.custom-file-input').on('change', function() { 

   let fileName = $(this).val().split('\\').pop(); 

   $(this).next('.custom-file-label').addClass("selected").html(fileName); 

});

// $(window).on('load', function(){
//     // document.getElementById("loading").style.display = 'none';
//     $(".item-logo").addClass('animated zoomInDown');
//     $(".header-content").addClass('animated slideInUp');
//     $(".item-header").addClass('animated fadeInLeft');
// });
$(function () {
    $('#collapseForm').on('shown.bs.collapse', function (e) {
            $('html,body').animate({
                scrollTop: $('#collapseForm').offset().top -80
            }, 500); 
    }); 
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


</body>

</html>