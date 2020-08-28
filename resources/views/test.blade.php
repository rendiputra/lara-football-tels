
<!DOCTYPE html>

<html lang="id">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <!-- fav -->

    <link rel="apple-touch-icon" href="https://telesandifootballcup.com/img/tfc.png" sizes="180x180">

    <link rel="icon" href="https://telesandifootballcup.com/img/tfc.png" sizes="32x32" type="image/png">

    <link rel="icon" href="https://telesandifootballcup.com/img/tfc.png" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="https://telesandifootballcup.com/img/tfc.png" color="#563d7c">

    <link rel="icon" href="https://telesandifootballcup.com/img/tfc.png">



    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Top Score - TFC 2019</title>


    <!--Data Table-->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
     
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


    <!-- Bootstrap -->

    <link href="https://telesandifootballcup.com/css/bootstrap.min.css" rel="stylesheet">

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

@keyframes    loading {
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
           <img src="https://telesandifootballcup.com/img/tfc.png" width="50" height="50" class="d-inline-block align-top" alt="">
          </a>
          <a class="navbar-brand" href="/">
            <b>TFC 2019</b>
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a style="margin-right: 10px;" class="nav-item nav-link " href="/">Beranda</a>
            
                <!--<a style="margin-right: 10px;" class="nav-item nav-link page-scroll" href="/">Juknis</a>-->
                <a style="margin-right: 10px;" class="nav-item nav-link " href="/participants">Peserta</a>
                <a style="margin-right: 10px;" class="nav-item nav-link " href="/fixtures">Jadwal</a>
                <!--<a style="margin-right: 10px;" class="nav-item nav-link " href="/cup">CUP</a>-->
                <a style="margin-right: 10px;" class="nav-item nav-link " href="/result">Hasil</a>
                <a style="margin-right: 10px;" class="nav-item nav-link  active " href="/top_score">Top Score</a>



                <a style="margin-right: 10px;" class="nav-item nav-link " href="/rules">Peraturan</a>
                <a style="margin-right: 10px;" class="nav-item nav-link " href="/galeri">Galeri</a>
                <!--<a style="margin-right: 10px;" class="nav-item nav-link page-scroll" href="/">Venue</a>-->

            <!-- Authentication Links -->
                            <li class="nav-item dropdown ">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        loremadmon1 <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a href="/admin/dash" class="dropdown-item">Dashboard</a>
                            <a href="/usercreatedlorem" class="dropdown-item">Buat User</a>
                            <a href="/admin/klasemen" class="dropdown-item">Manage Klasemen</a>
                            <a href="/admin/jadwal" class="dropdown-item">Manage Jadwal</a>
                            
                                                <a class="dropdown-item" href="https://telesandifootballcup.com/logout"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        
                        <!---->
                        <!--    <a href="/admin/klasemen" class="dropdown-item">Manage Klasemen</a>-->
                        <!--    <a href="/admin/jadwal" class="dropdown-item">Manage Jadwal</a>-->
                        <!--    -->
                        <!--</a>-->
                        <!--<a class="dropdown-item" href="https://telesandifootballcup.com/logout"-->
                        <!--   onclick="event.preventDefault();-->
                        <!--                 document.getElementById('logout-form').submit();">-->
                        <!--    Logout-->
                        <!--</a>-->

                        <form id="logout-form" action="https://telesandifootballcup.com/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="gRM0QkzifbrkE3uOr6aboMmKiJYqDJfMz7s1P5zy">                        </form>
                    </div>
                </li>
                        </div>
        </div>
    </div>
</nav>



  

<section id="top_score">
    
    <div class="container">
        
        <center>
            
			<br><br><br><h1>Top Score</h1>
        
        </center>
        
    </div>
    
	<div class="container table-responsive">
			    <center>
        	        <h3 class="p-3">Divisi U9</h3>
        	        <p>Top Score 5 Besar,<b>Sementara</b> untuk Divisi U9</p>
	            </center>
            <table class="text-center table table-striped " width="1051px" style="padding: 15px;">
			        <thead>
			            <tr>
			                <td>Peringkat</td>
			                <td>Nama Team</td>
			                <td>Nama Pemain</td>
			                <td>Gol</td>
			            </tr>
			        </thead>
			        <tbody>
	    				            <tr>
			                <td>1</td>
			                <td>SSB Tunas Prima </td>
			                <td style="text-transform: capitalize;"> Safaraz Dafa Azalia Ramadhan</td>
			                <td>10</td>
			            </tr>
		    				            <tr>
			                <td>2</td>
			                <td>SSB Maestro FC </td>
			                <td style="text-transform: capitalize;"> Muhammad Rizky</td>
			                <td>10</td>
			            </tr>
	    				            <tr>
			                <td>3</td>
			                <td>Petrostream Soccer School </td>
			                <td style="text-transform: capitalize;"> Muhammad Bintang Susanto</td>
			                <td>6</td>
			            </tr>
	    				            <tr>
			                <td>4</td>
			                <td>Bemo FC </td>
			                <td style="text-transform: capitalize;"> Firza Arifin Pratama</td>
			                <td>6</td>
			            </tr>
	    				            <tr>
			                <td>5</td>
			                <td>Al Azhar Kemang </td>
			                <td style="text-transform: capitalize;"> Muhammad Adhyaksa Arrayyanperdana</td>
			                <td>6</td>
			            </tr>
				            <!--<tr>-->
			            <!--    <td>1</td>-->
			            <!--    <td>Rizfan</td>-->
			            <!--    <td>Telesandi Football Club</td>-->
			            <!--    <td>500</td>-->
			            <!--</tr>-->
			        </tbody>
			    </table><hr>
			    <center>
        	        <h3 class="p-3">Divisi U11</h3>
        	        <p>Top Score 5 Besar, <b>Sementara</b> untuk Divisi U11</p>
	            </center>
	            <table class="text-center table table-striped" width="1051px" style="padding: 15px;">
			        <thead>
			            <tr>
			                <td>No</td>
			                <td>Nama Team</td>
			                <td>Nama Pemain</td>
			                <td>Gol</td>
			            </tr>
			        </thead>
			        <tbody>

	    				            <tr>
			                <td>1</td>
			                <td>SSB Bintang RDH </td>
			                <td style="text-transform: capitalize;"> Bayu Aji Ardiyansyah</td>
			                <td>5</td>
			            </tr>
		    				            <tr>
			                <td>2</td>
			                <td>SSB Bintang RDH </td>
			                <td style="text-transform: capitalize;"> Navis Arie Wibowo</td>
			                <td>5</td>
			            </tr>
	    				            <tr>
			                <td>3</td>
			                <td>Al Azhar Kemang </td>
			                <td style="text-transform: capitalize;"> M. Ihsan Kamil</td>
			                <td>4</td>
			            </tr>
	    				            <tr>
			                <td>4</td>
			                <td>SSB Bintang RDH </td>
			                <td style="text-transform: capitalize;"> M. Robih Maylano Baskara</td>
			                <td>4</td>
			            </tr>
	    				            <tr>
			                <td>5</td>
			                <td>SSB PJSS </td>
			                <td style="text-transform: capitalize;"> Hafiz Rafadyandra</td>
			                <td>4</td>
			            </tr>
				            
			           
			            <!--<tr>-->
			            <!--    <td>1</td>-->
			            <!--    <td>Rizfan</td>-->
			            <!--    <td>Telesandi Football Club</td>-->
			            <!--    <td>500</td>-->
			            <!--</tr>-->
			        </tbody>
			    </table><hr>
			    <center>
        	        <h3 class="p-3">Divisi U13</h3>
        	        <p>Top Score 5 Besar, <b>Sementara</b> untuk Divisi U13</p>
	            </center>
                <table class="text-center table table-striped  " width="1051px" style="padding: 15px;">
    		        <thead>
    		            <tr>
    		                <td>No</td>
			                <td>Nama Team</td>
			                <td>Nama Pemain</td>
    		                <td>Gol</td>
    		            </tr>
    		        </thead>
    		        <tbody>

		    				            <tr>
			                <td>1</td>
			                <td>SSB Aqua Haier </td>
			                <td style="text-transform: capitalize;"> Jalasena Putra Permana</td>
			                <td>3</td>
			            </tr>
	    				            <tr>
			                <td>2</td>
			                <td>SSB Aqua Haier </td>
			                <td style="text-transform: capitalize;"> Rizky Fadly Hidayat</td>
			                <td>2</td>
			            </tr>
	    				            <tr>
			                <td>3</td>
			                <td>SSB Aqua Haier </td>
			                <td style="text-transform: capitalize;"> Muhamad Rakha A</td>
			                <td>2</td>
			            </tr>
	    				            <tr>
			                <td>4</td>
			                <td>SSB Asses </td>
			                <td style="text-transform: capitalize;"> MUHAMMAD FAIZ RAMADHAN</td>
			                <td>2</td>
			            </tr>
	    				            <tr>
			                <td>5</td>
			                <td>SSB Putra Utama </td>
			                <td style="text-transform: capitalize;"> Ikhsan Fatoni</td>
			                <td>2</td>
			            </tr>
		
    		            
    		            <!--<tr>-->
    		            <!--    <td>1</td>-->
    		            <!--    <td>Rizfan</td>-->
    		            <!--    <td>Telesandi Football Club</td>-->
    		            <!--    <td>500</td>-->
    		            <!--</tr>-->
    		        </tbody>
    		    </table><br>
    		    <p>Last Updated At 26-Oct-2019</p>
	        </div>
	    </div>
	</div>
	
    <br><br><br>
</section>





    <footer class="bg-dark" style="background-color: #3a3a3a !important; padding: 25px 0px 0px 0px;">

      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-4">

            <center><img src="https://telesandifootballcup.com/img/tfc.png" style="width: 200px;"></center>

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

    <script src="https://telesandifootballcup.com/js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="https://telesandifootballcup.com/js/bootstrap.min.js"></script>    

    <script src="https://telesandifootballcup.com/js/carousel.js"></script>    

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