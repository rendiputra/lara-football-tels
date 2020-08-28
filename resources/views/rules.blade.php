@extends('layouts/main')

@section('title', 'Peraturan')

@section('content')
<style type="text/css">
    .card_portofolio{
      width: 90%;
      height: auto; 
      background-color: white; 
      border-radius: 20px; 
      padding-top: 20px;
      margin-bottom: 20px;
      transition: 1s;
      position: relative;
      overflow: hidden;
    }
     .card_portofolio:hover{
      width: 90%;
      height: auto; 
      background-color: white; 
      border-radius: 20px; 
      box-shadow: 0px 5px 30px rgba(0, 0, 0, 0.5);
      padding-top: 20px;
      margin-bottom: 20px;
      transition: 1s;
      position: relative;
      overflow: hidden;
    } 
    .bg-img{

    background-image: url('img/tfc.png');

    background-size: 40%;
    background-repeat: no-repeat;
    width: 100%;

    height: 100%;
    background-position: center;

    background-attachment: fixed;

  }
@media (max-width: 767px) {
.bg-img{
    background-image: url('https://www.polytec.com.au/img/products/960-960/white.jpg');
}
}

.dark{

    width: 100%;

    height: 100%;

    background-color: rgba(0,0,0,0.8);

    padding-bottom: 50px;

}
</style>


<section id="rules" style="color: white;">
  <div class="bg-img">
    <div class="dark">
    <div class="container mb-5">


  <div class="row justify-content-center">

    <div class="col-md-12">
      <br>
      <br>
      <br>


    </div>

  </div>
  
  
    <div role="tabpanel" class="tab-panel active" id="tabfc-1">
        
        <ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

              <li class="active">

                <a href="#Indonesia" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-danger mb-3 active" aria-expanded="true" style="border-radius: 60px; width: 150px; margin-right: 15px;">Indonesia</a>

                <a href="#inggris" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-danger mb-3" aria-expanded="true" onclick="showall(); showcat(1);" style="border-radius: 60px; width: 150px; margin-right: 15px;">English</a>

              </li>

            </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="Indonesia">
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <h3 class="text-center text-uppercase">Peraturan</h3>
                    
                            <hr style="width: 50px; border: 2px solid #fff;">
                            <h2 class="">Mini Soccer</h2>
                            <p> &nbsp; </p>
                            <h3 style="font-size: 1.23rem"><b><u>Persyaratan</u></b></h3><br>
                            <ol start="1" >
                                <li style="font-size: 1.23rem">Pemain wajib menyerahkan foto ukuran 3x4 dua lembar, fotocopy akta kelahiran, surat keterangan dari sekolah, dan fotokopi kartu pelajar satu lembar. Untuk SSB, foto 3x4 dua lembar, fotocopy akta kelahiran, surat keterangan SSB, fotokopi NISN
                                sekolah dan SSB.</li>
                                <li style="font-size: 1.23rem">Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting.</li>
                                <li style="font-size: 1.23rem">U-9, U-11, U-13.
                                    <ol start="1" type="a">
                                      <li style="font-size: 1.23rem">Di bawah 9 tahun - pemain harus lahir pada atau setelah tahun 2010.</li>
                                      <li style="font-size: 1.23rem">Di bawah 11 tahun - pemain harus lahir pada atau setelah tahun 2008.</li>
                                      <li style="font-size: 1.23rem">Di bawah 13 tahun - pemain harus lahir pada atau setelah tahun 2006.</li>
                                    </ol>
                                </li>
                            </ol>
                                
            
                            <p> &nbsp; </p>
                            <h2 style="font-size: 1.23rem"><b><u>Peraturan</u></b></h2><br>
            
                            <ol start="1" >
                                <li style="font-size: 1.23rem">Sistem yang digunakan adalah sistem ½ kompetisi.</li>
                                <li style="font-size: 1.23rem">Satu tim terdiri dari 14 pemain (7 pemain inti dan 7 cadangan), 1 orang pelatih, 1
                                asisten, dan 1 orang official.</li>
                                <li style="font-size: 1.23rem">Pemain wajib memakai kostum sepak bola bernomor, kaos kaki, decker,dan sepatu bola.<br>
                                <li style="font-size: 1.23rem">Kuota 16 tim.</li>
                                <li style="font-size: 1.23rem">Tim wajib hadir 30 menit sebelum pertandingan.</li>
                                <li style="font-size: 1.23rem">Istirahat akan diberikan waktu selama 5 menit.</li>
                                <li style="font-size: 1.23rem">Untuk memberi kesempatan kepada semua pemain untuk lebih banyak waktu permainan dan memungkinkan penanganan cedera lebih mudah, semua tim akan diizinkan "mengganti pemain" hingga tidak berbatas yang dapat dilakukan saat pertandingan dan pemain yang telah meninggalkan lapangan dapat kembali beraksi di lapangan.</li>
                                <!--<li style="font-size: 1.23rem">Disetiap paruh pertandingan tidak ada yang boleh melakukan pergantian pemain, kecuali jika ada yang cidera berat dan tidak bisa mengikuti pertandingan kembali.</li>-->
                                <!--<li style="font-size: 1.23rem">Memasuki paruh babak kedua, semua pemain cadangan masuk menggantikan semua pemain yang bermain di babak pertama.</li>-->
                                <li style="font-size: 1.23rem">Jumlah official, 3 orang dengan menggunakan kartu tanda pengenal.</li>
                                <li style="font-size: 1.23rem">Setiap tim wajib memberikan LINE UP sebelum memulai pertandingan.</li>
                                <li style="font-size: 1.23rem">Petunjuk pelaksanaan dan petunjuk teknis akan dibahas pada saat technical meeting.</li>
                                <li style="font-size: 1.23rem">Durasi setiap pertandingan penyisihan:
                                    <ol start="1" type="a">
                                        <li style="font-size: 1.23rem">U9, U11, U13 – 2x10 menit (Istirahat 3 Menit)</li>
                                    </ol>
                                </li>
                                <li style="font-size: 1.23rem">Durasi pertandingan Final U9, U11 dan 13 adalah 2x20 menit
                                    
                                </li>
                            </ol>
            
            
                            <p> &nbsp; </p>
                            <h2 style="font-size: 1.23rem"><b><u></u></b></h2><br>
            
                            <ol  style="font-size: 1.23rem">
                              <li style="font-size: 1.23rem">Aturan "Offside" tidak akan diterapkan pada kelompok usia U9 walaupun "goal hanging" tidak diperkenankan oleh wasit.</li>
                              <li style="font-size: 1.23rem">Aturan "Goalkeeper Pass Back" tidak akan berlaku untuk kelompok usia U9.</li>
                              <li style="font-size: 1.23rem">Untuk kiper, bola mati ditentendang atau Kick In, Kemudian bola hidup yaitu dengan Dilempar.</li>
                              <li style="font-size: 1.23rem">Kesalahan Throw In diulang sekali, oleh pemain yang sama, jika masih salah ganti ke tim lawan.</li>
                              <li>Seorang wasit akan memimpin pertandingan U9, U11, dan U13. Karena ukuran lapangan yang lebih besar, wasit mungkin, menurut kebijaksanaannya, memutuskan untuk menggunakan satu atau dua asisten wasit untuk pertandingan U13 untuk menentukan apakah bola masuk atau keluar dari lapangan permainan.</li>
                              <li>Seorang wasit dan dua asisten wasit akan memimpin pertandingan U11 & U13.</li>
                              <li>Setiap tim akan terdiri dari jumlah pemain sebagai berikut, yang semuanya harus terdaftar dengan benar di sekolah mereka dan TFC 2019 <br>
                                <ol type="a">
                                  <li>U9, U11, dan U13 - 7 Inti - jumlah minimum untuk memulai pertandingan = 5; Jumlah maximum pemain pada saat pertandingan (termasuk pemain pengganti) = 14; Jumlah maksimum terdaftar = 17.</li>
                                </ol>
                              </li>
                              <li>Untuk memberi kesempatan kepada semua pemain untuk lebih banyak waktu permainan dan memungkinkan penanganan cedera lebih mudah, semua tim akan diizinkan "mengganti pemain" hingga tidak berbatas yang dapat dilakukan saat pertandingan dan pemain yang telah meninggalkan lapangan dapat kembali beraksi di lapangan.</li>
                              
                              
                                </li>
                              <li>Pemain tidak diperkenankan berpindah tim, baik naik atau turun, atau dalam kelompok usia yang berbeda. Pemain hanya boleh bermain di tim mereka yang terdaftar. Dalam situasi apapun, pemain tidak akan masuk ke dalam kelompok usia yang lebih muda atau bermain turun dari tim A ke tim B, B ke C dan seterusnya. </li>
                              <li>Semua pemain harus terdaftar dengan benar dan tercantum dalam daftar tim yang terdaftar di situs TFC 2019 sebelum dimulainya proses penilaian tim dan proses pembagian
                              (yang akan berlangsung pada 20 September 2019)
                              </li>
                              <li>Pelatih harus membawa daftar anggota tim (terdaftar di situs web) yang ditandatangani oleh pejabat sekolah yang berwenang untuk mengkonfirmasi bahwa pemain adalah benar berasal dari sekolah tersebut, serta salinan dokumen pemain yang dibutuhkan (paspor atau akte kelahiran) di semua pertandingan untuk tujuan verifikasi pemain oleh panitia TFC.</li>
                              <li>Untuk semua pertandingan Cup, pelatih tim harus membawa daftar tim yang ditandatangani ditambah semua dokumen ID pemain yang dibutuhkan (sesuai poin j di atas). Dokumen-dokumen ini harus disetujui (ditandatangani & dicap) oleh Panitia TFC sebelum kompetisi dimulai. Hanya tim / pemain dengan dokumen yang disetujui TFC yang diizinkan untuk bermain.</li>
                              <li>Jika ditemukan bahwa setiap pemain yang tidak terdaftar dengan benar atau tidak memiliki dokumen ID yang valid pada hari pertandingan tetapi mengikuti pertandingan, maka ini merupakan pelanggaran serius, yang akan ditangani oleh Panitia. Tim yang melanggar akan dieliminasi dari pertandingan dan menerima peringatan resmi dari Panitia; dengan pelanggaran berulang sehingga mengurangi poin dan / atau kemungkinan penangguhan dari pertandingan.
                              </li>
                              <li>Tidak ada tim atau pemain tambahan yang akan diterima setelah batas waktu pendaftaran.</li>
                              <li>Semua pemain harus memakai kaos bernomor yang berbeda, sesuai dengan pendaftaran TFC mereka.</li>
                              <li>Semua pemain harus mengenakan pakaian yang tepat termasuk sepatu sepak bola dan deker. Wasit akan melarang pemain memasuki lapangan bermain tanpa deker.</li>
                              <li>“Untuk keselamatan semua pemain kami, semua pelatih harus memastikan bahwa hanya kancing plastik atau karet yang dibentuk (dibulatkan atau berbilah) yang dikenakan oleh pemain tim mereka. Kancing logam atau sekrup pada kancing nilon dilarang. Selanjutnya, pelatih harus memeriksa kancing pemain secara teratur untuk memastikan bahwa kancing berada dalam kondisi yang aman, karena kancing plastik sering membentuk tepi tajam yang dapat melukai pemain lain.”</li>
                              <li>Panitia hanya memberikan pertolongan pertama pada pemain yang cidera. Untuk penanganan lebih lanjut di bebankan ke official atau pelatih</li>
                              <li>Pemain tidak boleh memakai kacamata dengan lensa kaca saat bermain; spesifikasi olah raga atau Sport Glasses(Kacamata Khusus Olahraga) harus dipakai sebagai gantinya.</li>
                              <li>Slide Tackling / Going to Ground:
                                <ol type="a">
                                  <li>U9,U11,Dan U13: Pemain tidak boleh mencoba melakukan sliding tackle dan wasit akan diinstruksikan untuk mengendalikan ini untuk melindungi semua pemain. Jika terjadi sliding tackle, peringatan akan diberikan kepada pemain yang melanggar. Pelanggaran ke 2 dari pemain yang sama akan mengakibatkan pemain itu dikeluarkan dari lapangan bermain selama sisa waktu yang tersisa. Pelanggaran berulang akan mengakibatkan wasit menginstruksikan pelatih tim untuk menyingkirkan pemain yang melanggar selama sisa pertandingan.</li>
                                </ol>
                              </li>
                              <li>Pelatih area: Selama pertandingan, pelatih (dan pemain) kedua tim harus tetap berada di sisi yang berlawanan dari lapangan atau, jika ini tidak mungkin, mereka harus tetap berada di sisi yang terpisah dari batas garis tengah (half way line). Mereka tidak diperkenankan melewati half way line sebelum pertandingan berakhir.</li>
                              <li>Seorang pemain yang menerima kartu merah, apakah itu kartu merah langsung atau mengikuti dua kartu kuning, akan menerima larangan satu pertandingan. Ini berarti bahwa pemain tidak akan diizinkan untuk bermain di pertandingan berikutnya tim.</li>
                            </ol>
            
                            <p> &nbsp; </p>
                            <h2 style="font-size: 1.23rem"><b><u>TELESANDI CUP 2019</u></b></h2><br>
            
                            <ol start="1" style="font-size: 1.23rem">
                              <li>Undian oleh Panitia akan diadakan untuk menentukan pertandingan Putaran Pertama.</li>
                              <li>Bergantung pada jumlah tim di setiap kelompok umur, mungkin akan ada persyaratan pertandingan Babak Penyisihan untuk dimainkan oleh tim tertentu agar bisa lolos ke undian Babak Pertama.</li>
                              <li>Setelah Putaran Pertama, putaran ke depan tidak akan diundi, namun akan mengikuti format Cup yang berlaku untuk setiap kelompok umur.
                              </li>
                              <li>Pertandingan akan memiliki durasi yang sama. Wasit hanya memimpin jalannya pertandingan, waktu di pegang oleh panitia.</li>
                              <li>Walaupun waktu sudah dinyatakan selesai oleh panitia akan tetapi pertandingan bisa dilanjutkan oleh wasit jika terjadi tendangan pojok dan free kick dengan dua kali sentuhan, setelah itu dinyatakan selesai.</li>
                              <li>Jika pertandingan Cup berakhir dengan hasil imbang, hasilnya akan diputuskan oleh "adu penalti".</li>
                              <li>Fase grup U9 dibagi menjadi 2 Grup, masing-masing juara grup akan masuk ke babak Final.</li>
                              <li>Fase grup U11 dibagi menjadi 3 Grup, masing-masing juara grup dan runner-up terbaik akan masuk ke babak semi-final</li>
                              <li>Fase grup U13 dibagi menjadi 1 Grup, juara grup dan runner-up akan di tandingkan ulang saat final.</li>
                              <li>Pada fase grup poin yang didapat oleh tim yang bertanding adalah:</li>
                              <ol start="1">
                              <li>Menang 3 Poin</li>
                              <li>Seri 1 Poin</li>
                              <li>Kalah 0 Poin</li>
                              </ol>
                              <li>Penentuan peringkat di klasmen pada fase grup dilakukan pada aturan resmi FIFA yakni:
                              </li>
                              <ol start="1">
                              <li>Poin total</li>
                              <li>Selisih Gol total</li>
                              <li>Agresifitas gol memasukan total</li>
                              </ol>
                              <li>Apabila terdapat 2 tim atau lebih, yang memiliki kesamaan dalam 3 kriteria diatas, penentuan peringkat akan ditentukan dengan perbandingan sebagai berikut, secara berurutan:</li>
                              <ol start="a" >
                              <li>Jumlah poin antara tim yang bersangkutan.</li>
                              <li>Selisih gol antar tim yang bersangkutan.</li>
                              <li>Agresifitas gol memasukan antar tim yang bersangkutan.</li>
                              <li>Head to head</li>
                              <li>Jumlah poin fairplay berdasarkan poin waktu yang didapat selama fase grup.</li>
                              </ol>
                            </ol>
            
                            <p> &nbsp; </p>
                            <h2 style="font-size: 1.23rem"><b><u>Jadwal Pertandingan  - Penundaan dan Keterlambatan</u></b></h2><br>
                            <p style="font-size: 1.23rem">Jadwal pertandingan untuk pertandingan Telesandi Cup 2019 akan dipublikasikan di situs TFC. </p>
                            <p style="font-size: 1.23rem">Peraturan berikut akan berlaku :</p>
                            <ol start="1" style="font-size: 1.23rem">
                              <li>Keputusan Panitia mengenai apakah pertandingan akan dijadwalkan ulang adalah final.</li>
                              <li>Tim harus tiba di tempat pertandingan yang ditentukan / lapangan minimal 30 menit sebelum jadwal pertandingan yang dijadwalkan dan menginformasikan kepada Panitia TFC yang bertugas atas kedatangan mereka.</li>
                              <li>Jika ada tim yang datang terlambat dari waktu kick off yang dijadwalkan, pertandingan akan dibatalkan 3-0 dari lawan kecuali pelatih tim tertunda menghubungi Koordinator Tempat Pengawas Pertandingan/Panitia  sebelum dimulainya jadwal dan Pengawas Pertandingan/Panitia telah menyetujui tertunda kick-off.</li>
                              <li>Waktu penundaan yang diperbolehkan maksimum 10 menit. Jika tim gagal tiba dengan pemain yang cukup untuk memulai pertandingan dalam waktu 10 menit setelah waktu mulai yang dijadwalkan, maka pertandingan akan dibatalkan dan oposisi akan mendapat kemenangan 3-0. Jika kedua tim terlambat skor pertandingan akan menjadi 0-3 melawan masing-masing tim.</li>
                              <li>Jika pertandingan ditunda karena keterlambatan satu atau kedua tim, maka total durasi pertandingan akan berkurang dengan jumlah menit dimana kick-off ditunda.</li>
                              <li>Jika tim yang sama terlambat pada lebih dari dua kesempatan, Panitia berhak untuk menangguhkan tim dari Cup</li>
                              <li>Jika lapangan tergenang air, yang dianggap oleh Pengawas Pertandingan tidak aman atau tidak dapat dipergunakan, permainan tidak akan dimulai dan permainan akan ditangguhkan sampai genangan air cukup kering, berdasarkan penilaian Pengawas Pertandingan.</li>
                              <li>Jika terjadi petir di area tersebut, Pengawas Pertandingan memiliki wewenang untuk segera berhenti bermain, untuk menjaga keamanan para pemain, pelatih dan pejabat pertandingan.</li>
                              <li>Jika pertandingan dihentikan pada, atau setelah, setengah waktu (yaitu dari akhir kuartal kedua dan seterusnya), skor pada saat itu akan menjadi skor akhir jika permainan tidak dapat dilanjutkan dalam waktu 15 menit. Setiap pertandingan yang ditinggalkan sebelum paruh waktu akan diulang pada tanggal yang akan diatur kembali.</li>
                              <li>Jika terjadi kondisi cuaca ekstrem sebelum dimulainya program sepak bola akhir pekan, sehingga terjadi genangan air pada lapangan dan / atau banjir jalan akses ke tempat tersebut, Panitia dapat memutuskan untuk menunda semua pertandingan di tempat yang terkena dampak. Panitia akan berusaha untuk memberitahu semua pelatih tim yang terkena dampak meskipun juga merupakan tanggung jawab pelatih untuk merujuk ke situs web dan menghubungi Panitia jika ragu. Semua pertandingan yang ditunda akan dijadwalkan ulang oleh Panitia. </li>
                            </ol>
            
                        </div>
                    </div>
                </div>
            <div role="tabpanel" class="tab-pane" id="inggris">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="text-center text-uppercase">Rules</h3>

                            <hr style="width: 50px; border: 2px solid #fff;">
                            <h2 class="">Mini Soccer</h2>
                            <p> &nbsp; </p>
                            <h3 style="font-size: 1.23rem"><b><u>Requirements</u></b></h3><br>
                            <ol start="1" >
                                <li style="font-size: 1.23rem">Players are required to submit a 3x4 size photo of two sheets, a photocopy of birth certificate, a certificate from the school, and a photocopy of a single student card. For SSB, a two-sheet 3x4 photo, photocopy of birth certificate, SSB certificate, photocopy of the school's NISN and SSB.</li>
                                <li style="font-size: 1.23rem">Implementation instructions and technical instructions will be discussed at the technical meeting.</li>
                                <li style="font-size: 1.23rem">U-9, U-11, U-13.
                                    <ol start="1" type="a">
                                      <li style="font-size: 1.23rem">Under 9 years - players must be born after or on 2010.</li>
                                      <li style="font-size: 1.23rem">Under 11 years - players must be born after or on 2008.</li>
                                      <li style="font-size: 1.23rem">Under 13 years - players must be born after or on 2006.</li>
                                    </ol>
                                </li>
                            </ol>
                                
            
                            <p> &nbsp; </p>
                            <h2 style="font-size: 1.23rem"><b><u>Regulation</u></b></h2><br>
            
                            <ol start="1" >
                                <li style="font-size: 1.23rem">The system used is the ½ competition system.</li>
                                <li style="font-size: 1.23rem">One team consists of 14 players (7 core players and 7 reserves), 1 coach, 1 assistant, and 1 official.</li>
                                <li style="font-size: 1.23rem">Players must wear numbered soccer costumes, socks, deckers and soccer shoes.</li>
                                <li style="font-size: 1.23rem">16 team quota.</li>
                                <li style="font-size: 1.23rem">Teams must be present 30 minutes before the match.</li>
                                <li style="font-size: 1.23rem">Rest will be given time for 5 minutes.</li>
                                <li>To give all players a chance to play more time and allow easier handling of injuries, all teams will be allowed to "change players" to the limit that can be done during matches and players who have left the field can return to action on the field.</li>
                                <!--<li style="font-size: 1.23rem">In each half of the match no one is allowed to make a substitute, except if there is a severe injury and cannot follow the match again.</li>-->
                                <!--<li style="font-size: 1.23rem">Entering the second half of the second round, all backup players enter to replace all the players who played in the first round.</li>-->
                                <li style="font-size: 1.23rem">Official number, 3 people using ID cards.</li>
                                <li style="font-size: 1.23rem">Each team must give LINE UP before starting the match.</li>
                                <li style="font-size: 1.23rem">Implementation instructions and technical instructions will be discussed at the technical meeting.</li>
                                <li style="font-size: 1.23rem">Duration of each match:
                                    <ol start="1" type="a">
                                        <li style="font-size: 1.23rem">U9 – 1x15 minutes</li>
                                        <li style="font-size: 1.23rem">U11, U13 – 1x20 minutes</li>
                                    </ol>
                                </li>
                              <li>The duration of the Final U9, U11 and 13 matches is 2x15 minutes</li>
                            </ol>
            
            
                            <p> &nbsp; </p>
                            <h2 style="font-size: 1.23rem"><b><u>FIFA rules will apply, except under the following circumstances:</u></b></h2><br>
            
                            <ol  style="font-size: 1.23rem">
                              <li style="font-size: 1.23rem">The "Offside" rule will not be applied to the U9, U11, and U13 age groups even though "goal hanging" is not permitted by the referee.</li>
                              <li style="font-size: 1.23rem">The "Goalkeeper Pass Back" rule will not apply to U9, U11 and U13 age groups.</li>
                              <li>A referee will lead the U9, U11 and U13 matches. Due to the larger size of the court, the referee may, in his discretion, decide to use one or two assistant referees for the U13 match to determine whether the ball is in or out of the playing field.</li>
                              <li>A referee and two assistant referees will lead the U13 match.</li>
                              <li>Each team will consist of the following number of players, all of whom must be properly registered at their school and TFC 2019<br>
                                <ol type="a">
                                  <li>U9, U11 and U13 - 7 Core - minimum number to start a match = 5; Maximum number of players at the time of the match (including substitutes) = 14; Maximum number of registered = 17.</li>
                                </ol>
                              </li>
                              <li>To give all players a chance to play more time and allow easier handling of injuries, all teams will be allowed to "change players" to the limit that can be done during matches and players who have left the field can return to action on the field.</li>
                              <li>The duration of match is:<br>
                                <ol type="a">
                                  <li>U9 - 1 x 15 minutes</li>
                                  <li>U11, U13 - 1 x 20 minutes</li>
                                  <li>There will be adequate rest periods between quarters but the delay must be short to ensure that the program in each place can be completed within the specified time. The referee will be instructed to restart the match no later than 5 minutes after the end of the previous quarter.</li>
                                </ol>
                              </li>
                              <li>The duration of the Final U9, U11 and 13 matches is 2x15 minutes</li>
                              <li>Players do not switch, teams go up, or in different age groups. Players can only play in teams that are permitted. In any situation, players will not enter into a younger age group or play from team A to team B, B to C and so on. </li>
                              <li>All players must be properly registered and registered in the list of teams registered on the TFC 2019 website before the start process. Team assessment and distribution process (which will take place on September 20, 2019)
                              </li>
                              <li>The coach must bring the list of team members (registered on the website) transferred by the school official who was asked to prove that the player really came from the school, as well as transfer the required player documents (passport or birth certificate) of the TFC committee.</li>
                              <li>For all Cup matches, the team coach must bring a list of signed teams plus all required player ID documents (as per point j above). These documents must be approved (signed & stamped) by the TFC Committee before the competition begins. Only teams / players with TFC-approved documents are allowed to play.</li>
                              <li>If it is found that any player who is not registered correctly or does not have a valid ID document on the day of the match but participates in the match, this is a serious offense, which will be handled by the Committee. The team that violates will be eliminated from the match and receive an official warning from the Committee; with repeated offenses thereby reducing points and / or possible suspension from the match.</li>
                              <li>No additional teams or players will be accepted after the registration deadline.</li>
                              <li>All players must wear different numbered T-shirts, according to their TFC registration.</li>
                              <li>All players must wear appropriate clothing including soccer shoes and decks. The referee will forbid players from entering the playing field without being close.</li>
                              <li>"For the safety of all our players, all coaches must ensure that only plastic or rubber buttons formed (rounded or bladed) are worn by their team players. Metal buttons or screws on nylon buttons are prohibited. Furthermore, the coach must check the player's buttons regularly to ensure that the buttons are in a safe condition, because plastic buttons often form sharp edges that can hurt other players. "</li>
                              <li>Players may not wear glasses with glass lenses when playing; sports specifications or Sport Glasses should be worn instead.</li>
                              <li>Slide Tackling / Going to Ground:
                                <ol type="a">
                                  <li>U9, U11, and U13: Players may not attempt sliding tackles and the referee will be instructed to control this to protect all players. If a sliding tackle occurs, a warning will be given to the offending player. A second violation of the same player will result in the player being expelled from the playing field for the remaining time left. Repeated violations will result in the referee instructing the team coach to get rid of the offending player for the rest of the match.</li>
                                </ol>
                              </li>
                              <li>Coach area: During the match, the coach (and player) both teams must stay on the opposite side of the field or, if this is not possible, they must stay on the side separate from the halfway line. They are not allowed to cross the half way line before the game ends.</li>
                              <li>A player who receives a red card, whether it is a direct red card or follows two yellow cards, will receive a one-match ban. This means that players will not be allowed to play in the next team match.</li>
                            </ol>
            
                            <p> &nbsp; </p>
                            <h2 style="font-size: 1.23rem"><b><u>TELESANDI CUP 2019</u></b></h2><br>
            
                            <ol start="1" style="font-size: 1.23rem">
                              <li>Sweepstakes by the Committee will be held to determine the First Round match.</li>
                              <li>Depending on the number of teams in each age group, there might be preliminary Round matches to be played by certain teams in order to qualify for the First Round draw.</li>
                              <li>After the First Round, the next round will not be drawn, but will follow the Cup format that applies to each age group.</li>
                              <li>The match will have the same duration.</li>
                              <li>If the Cup match ends with a draw, the result will be decided by "shootout" according to point 3.h. above.</li>
                              <li>When players play for one team in a Cup they will be "cup-tied" and will not be allowed to play for different teams.</li>
                            </ol>
            
                            <p> &nbsp; </p>
                            <h2 style="font-size: 1.23rem"><b><u>Match Schedule - Delays and Delays</u></b></h2><br>
                            <p style="font-size: 1.23rem">The schedule for the 2019 Telesandi Cup match will be published on the TFC website.</p>
                            <p style="font-size: 1.23rem">The following rules will apply:</p>
                            <ol start="1" style="font-size: 1.23rem">
                              <li>The Committee's decision as to whether the match will be rescheduled is final.</li>
                              <li>Teams must arrive at the designated venue / field at least 30 minutes before the scheduled match schedule and inform the TFC Committee on duty of their arrival.</li>
                              <li>If a team arrives late from the scheduled kick-off time, the match will be canceled 3-0 from the opponent unless the team coach is delayed contacting the Match Supervisor / Committee Place Coordinator before the start of the schedule and the Match / Committee Supervisor has agreed to the delayed kick-off.</li>
                              <li>The maximum allowable delay is 10 minutes. If the team fails to arrive with enough players (see Rule 2e) to start the match within 10 minutes of the scheduled start time, then the match will be canceled and the opposition will get a 3-0 win. If both teams are late the match score will be 0-3 against each team</li>
                              <li>If a match is postponed due to a delay of one or both teams, the total duration of the match will be reduced by the number of minutes where the kick-off is postponed.</li>
                              <li>If the same team is late on more than two occasions, the Committee has the right to suspend the team from the Cup.</li>
                              <li>If the field is flooded, which is considered by the Game Supervisor to be unsafe or cannot be used, the game will not start and the game will be suspended until the puddle is dry enough, according to the Match Supervisor's assessment.</li>
                              <li>If there is lightning in the area, the Game Supervisor has the authority to immediately stop playing, to maintain the safety of the players, coaches and officials of the match.</li>
                              <li>If the match is stopped at, or after, half time (ie from the end of the second quarter onwards), the score at that time will be the final score if the game cannot be continued within 15 minutes. Any matches left before half-time will be repeated on the date that will be reset.</li>
                              <li>If extreme weather conditions occur prior to the start of the weekend football program, resulting in puddles on the field and / or flood access roads to the venue, the Committee may decide to postpone all matches in the affected area. The committee will endeavor to notify all the affected team coaches although it is also the responsibility of the trainer to refer to the website and contact the Committee if in doubt. All postponed matches will be rescheduled by the Committee.</li>
                            </ol>
            
                        </div>
                    </div>
                </div>
        </div>
        <!-- -------- -->
    </div>    
    </div>
    </div>
    </div>
</section>

<section id="sponsor" style="background: #ECECEC;">
   
</section>
@endsection