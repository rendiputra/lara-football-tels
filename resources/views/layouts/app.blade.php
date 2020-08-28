<!DOCTYPE html>
<html lang="id">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - TFC 2019</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->


<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/w/bs4/dt-1.10.18/datatables.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/w/bs4/dt-1.10.18/datatables.js"></script>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/78d1706a73.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" href="{{asset('img/tfc.png')}}" sizes="180x180">
    <link rel="icon" href="{{asset('img/tfc.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{asset('img/tfc.png')}}" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="{{asset('img/tfc.png')}}" color="#563d7c">
    <link rel="icon" href="{{asset('img/tfc.png')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
body{
    font-family: 'Lexend Deca', sans-serif;
}

.card_portofolio{

      height: 290px; 

      background-color: white; 

      border-radius: 5px; 

      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);

      padding: 54px 0px 0px 0px;

      margin-bottom: 20px;

      transition: 1s;

      position: relative;

      overflow: hidden;

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
.navbar-dark, .bg-dark{
  background-color: #1f2861 !important;
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
<!--</section>    -->
    <div id="app">

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
                <li class="nav-item dropdown @if(Request::is('user/dash','user/dash/*')) active @endif">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>    
    <script src="{{asset('js/carousel.js')}}"></script>    
<script>
$('.custom-file-input').on('change', function() { 
    let fileName = $(this).val().split('\\').pop(); 
    $(this).next('.custom-file-label').addClass("selected").html(fileName); 
});

$(window).on('load', function(){
//     document.getElementById("loading").style.display = 'none';
    $(".item-logo").addClass('animated zoomInDown');
    $(".header-content").addClass('animated slideInUp');
    $(".item-header").addClass('animated fadeInLeft');
    
    (function(){
        $('.form-prevent').on('submit', function(){
         $('.button-prevent').attr('disabled', 'true');   
        })
    })();
});

function rand() {
    document.getElementById("password").value = generateRandStr();
}

function generateRandStr() {
    var candidates = "ABCDEFGHIJKLMNOPQRSTUVWXY123456789";
    var result = "", rand;
    for (var i = 0; i < 3; i++) {
        for (var j = 0; j < 3; j++) {
            rand = Math.floor(Math.random() * candidates.length);
            result += candidates.charAt(rand);
        }
        if (i != 3) {
            result += "";
        }
    }
    return result;
}


function GeeksForGeeks() { 
/* Get the text field */
var copyGfGText = document.getElementById("email"); 
var copyGfGText2 = document.getElementById("password"); 

var copyGfGText3 = "Username: " + copyGfGText.value + " | Password: " + copyGfGText2.value; 

    document.getElementById("gabung").value = copyGfGText3;
    
var copyGfGText4 = document.getElementById("gabung");
    
/* Select the text field */
copyGfGText4.select(); 

/* Copy the text inside the text field */
document.execCommand("copy"); 

document.getElementById("gabung").style.display = "none";

/* Alert the copied text */
}


</script>    

<script>
$(document).ready(function() {
    $('.gue').DataTable({
        "paging": false
    });
} );
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.js"></script>



@yield('js')
</body>
</html>
