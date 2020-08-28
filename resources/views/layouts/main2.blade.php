<!DOCTYPE html>
<html lang="en">
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

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/78d1706a73.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<style>
.syntels.scrolled {
  background-color: #1f2861 !important;
  transition: background-color 200ms linear;
}

.jumbotron {
  position: relative;
  overflow: hidden;
  background-color:black;
}
.jumbotron video {
  position: absolute;
  z-index: 1;
  top: 0;
  width:100%;
  height:100%;
  /*  object-fit is not supported on IE  */
  object-fit: cover;
  opacity:0.5;
}
.jumbotron .container {
  z-index: 2;
  position: relative;
}

/* BOUNCE */

@-webkit-keyframes bounce {
  0%, 10%, 20%, 50%, 80% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }

  40% {
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px);
  }

  60% {
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}

@keyframes bounce {
  0%, 10%, 20%, 50%, 80% {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  40% {
    -webkit-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    transform: translateY(-15px);
  }

  60% {
    -webkit-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}

.faa-bounce.animated,
.faa-bounce.animated-hover:hover,
.faa-parent.animated-hover:hover > .faa-bounce {
  -webkit-animation: bounce 2s ease infinite;
  animation: bounce 2s ease infinite;
}

</style>

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
                  scrollTop: $(hash).offset().top - 130
              }, 1000);
          }
      });

      $('.custom-file-input').on('change', function() { 
   let fileName = $(this).val().split('\\').pop(); 
   $(this).next('.custom-file-label').addClass("selected").html(fileName); 
});
    </script>

</body>
</html>