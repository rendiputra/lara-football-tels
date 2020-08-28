@extends('layouts/main')

@section('title', 'CUP')

@section('content')

<section id="telscup">
	<div class="c-content-title-1">
		<center>
			<br><br><br><h1>Telesandi Football Cup</h1>
			<hr width="50px" style="border:2px solid black" >
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

		<!--CONTENT-->

		<div class="tab-content table-responsive">

			<!-- U9 -->
			<div role="tabpanel" class="tab-pane active" id="U9">
				<div class="c-content-title-1">
					<h1 align="center">
						<b>U9 Telesandi Football Cup</b><br>
					</h1>
				</div>
				<div class="container">
					<b>
						<h3 align="center">Babak Penyisihan</h3>
					</b>
					<h6 align="center">Akan Bertanding pada tanggal 5 Oktober 2019</h6>

					<div>
							<table class="text-center table table-striped" width="50%">
								<tbody>
									<tr>
										<td colspan="6" align="center">U9 Grup A</td>
									</tr>
									<tr class="tes">
										<td><b>P1</b></td>
										<td>SSB AQUA HAIER B</td>
										<td>vs</td>
										<td>AL AZHAR KEMANG</td>	
										<td>07.00 - 07.25</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2">
										<td><b>P2</b></td>
										<td>AL AZHAR SUMARECON MERAH</td>
										<td>vs</td>
										<td>BEMO FC</td>
										<td>07.00 - 07.25</td>
										<td>Lap. 2</td>
									</tr>
									<tr class="tes">
										<td><b>P3</b></td>
										<td>MAESTRO</td>
										<td>vs</td> 
										<td>SSB AQUA HAIER B</td>
										<td>07.50 - 08.15</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2">
										<td><b>P4</b></td>
										<td>BEMO FC</td>
										<td>vs</td> 
										<td>AL AZHAR KEMANG</td>
										<td>07.50 - 08.15</td>
										<td>Lap. 2</td>
									</tr>
									<tr class="tes">
										<td><b>P5</b></td>
										<td>AL AZHAR SUMARECON MERAH</td> 
										<td>vs</td>
										<td>MAESTRO</td>
										<td>08.40 - 09.05</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2">
										<td><b>P6</b></td>
										<td>SSB AQUA HAIER B</td>
										<td>vs</td> 
										<td>BEMO FC</td>
										<td>08.40 - 09.05</td>
										<td>Lap. 2</td>
									</tr>
									<tr class="tes">
										<td><b>P7</b></td>
										<td>AL AZHAR KEMANG</td>
										<td>vs</td> 
										<td>MAESTRO</td>
										<td>09.30 - 09.55</td>
										<td>Lap.1</td>
									</tr>
									<tr class="tes2">
										<td><b>P8</b></td>
										<td>AL AZHAR SUMARECON MERAH</td>
										<td>vs</td> 
										<td>SSB AQUA HAIER B</td>
										<td>09.30 - 09.55</td>
										<td>Lap.2</td>
									</tr>
									<tr class="tes">
										<td><b>P9</b></td>
										<td>BEMO FC</td>
										<td>vs</td> 
										<td>MAESTRO</td>
										<td>10.20 - 10.45</td>
										<td>Lap.1</td>
									</tr>
									<tr class="tes2">
										<td><b>P10</b></td>
										<td>AL AZHAR KEMANG</td> 
										<td>vs</td>
										<td>AL AZHAR SUMARECON MERAH</td>	
										<td>10.20 - 10.45</td>
										<td>Lap.2</td>
									</tr>
								</tbody>
							</table>
					</div><br><br>

					<b>
						<h3 align="center">Babak Penyisihan</h3>
					</b>
					<h6 align="center">Akan Bertanding pada tanggal 5 Oktober 2019</h6>
					<br><br>
					<div>
						<!-- <div class="col-md-10"> -->
							<table class="text-center table table-striped" width="50%">
								<tbody>
									<tr>
										<td colspan="6" align="center">U9 Grup B</td>
									</tr>
									<tr class="tes" style="border:1px solid #ddd;">
										<td><strong>P1</strong></td>
										<td>SSB AQUA HAIER A</td>
										<td>vs</td>
										<td>SSB BAHTERA</td>
										<td>07.25 - 07.50</td>
										<td>Lap. 1</td>
									</tr>
									<tr style="border:1px solid #ddd;">
										<td><strong>P2</strong></td>
										<td>AL AZHAR SUMARECON HIJAU</td>
										<td>vs</td>
										<td>SSB TUNAS PRIMA</td>
										<td>07.25 - 07.50</td>
										<td>Lap.2</td>
									</tr>
									<tr class="tes" style="border:1px solid #ddd;">
										<td >
											<strong>P3</strong>
										</td>
										<td>BRAZILIA</td>
										<td>vs</td>
										<td>PETROSTREAM</td>
										<td>08.15 - 08.40</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2" style="border:1px solid #ddd;">
										<td >
											<strong>P4</strong>
										</td>
										<td>SSB BAHTERA</td>
										<td>vs</td>
										<td>AL AZHAR SUMARECON HIJAU</td>
										<td>08.15 - 08.40</td>
										<td>Lap. 2</td>
									</tr>
									<tr class="tes" style="border:1px solid #ddd;">
										<td >
											<strong>P5</strong>
										</td>
										<td>SSB TUNAS PRIMA</td>
										<td>vs</td>
										<td>BRAZILIA</td>
										<td>09.05 - 09.30</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2" style="border:1px solid #ddd;">
										<td >
											<strong>P6</strong>
										</td>
										<td>PETROSTREAM</td>
										<td>vs</td>
										<td>SSB AQUA HAIER A</td>
										<td>09.05 - 09.30</td>
										<td>Lap. 2</td>
									</tr>
									<tr class="tes" style="border:1px solid #ddd;">
										<td >
											<strong>P7</strong>
										</td>
										<td>AL AZHAR SUMARECON HIJAU</td>
										<td>vs</td>
										<td>BRAZILIA</td>
										<td>09.55 - 10.20</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2" style="border:1px solid #ddd;">
										<td >
											<strong>P8</strong>
										</td>
										<td>SSB AQUA HAIER A</td>
										<td>vs</td>
										<td>SSB TUNAS PRIMA</td>
										<td>09.55 - 10.20</td>
										<td>Lap. 2</td>
									</tr>
									<tr class="tes" style="border:1px solid #ddd;">
										<td >
											<strong>P9</strong>
										</td>
										<td>SSB BAHTERA</td>
										<td>vs</td>
										<td>PETROSTREAM</td>
										<td>10.45 - 11.10</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2" style="border:1px solid #ddd;">
										<td >
											<strong>P10</strong>
										</td>
										<td>BRAZILIA </td>
										<td>vs</td>
										<td>SSB AQUA HAIER A</td>
										<td>10.45 - 11.10</td>
										<td>Lap. 2</td>
									</tr>
									<tr class="tes" style="border:1px solid #ddd;">
										<td >
											<strong>P11</strong>
										</td>
										<td>SSB TUNAS PRIMA </td>
										<td>vs</td>
										<td>SSB BAHTERA</td>
										<td>12.30 - 12.55</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2" style="border:1px solid #ddd;">
										<td >
											<strong>P12</strong>
										</td>
										<td>PETROSTREAM </td>
										<td>vs </td>
										<td>AL AZHAR SUMARECON HIJAU</td>
										<td>12.30 - 12.55</td>
										<td>Lap. 2</td>
									</tr>
									<tr class="tes" style="border:1px solid #ddd;">
										<td >
											<strong>P13</strong>
										</td>
										<td>SSB TUNAS PRIMA </td>
										<td>vs </td>
										<td>PETROSTREAM</td>
										<td>13.20 - 13.25</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2" style="border:1px solid #ddd;">
										<td >
											<strong>P14</strong>
										</td>
										<td>BRAZILIA </td>
										<td>vs </td>
										<td>SSB BAHTERA</td>
										<td>13.20 - 13.25</td>
										<td>Lap. 2</td>
									</tr>
									 <tr class="tes" style="border:1px solid #ddd;">
										<td >
											<strong>P15</strong>
										</td>
										<td>AL AZHAR SUMARECON HIJAU </td>
										<td>vs </td>
										<td>SSB AQUA HAIER A</td>
										<td>13.25 - 13.50</td>
										<td>Lap. 1</td>
									</tr>
									<!--<tr class="tes2" style="border:1px solid #ddd;">
										<td >
											<strong>P16</strong>
										</td>
										<td>Tim B</td>
										<td>VS</td>
										<td>Tim E</td>
										<td>08.00</td>
									</tr>
									<tr class="tes" style="border:1px solid #ddd;">
										<td >
											<strong>P17</strong>
										</td>
										<td>Tim A</td>
										<td>VS</td>
										<td>Tim D</td>
										<td>08.00</td>
									</tr>
									<tr class="tes2" style="border:1px solid #ddd;">
										<td >
											<strong>P18</strong>
										</td>
										<td>Tim B</td>
										<td>VS</td>
										<td>Tim C</td>
										<td>08.00</td>
									</tr>
									<tr class="tes" style="border:1px solid #ddd;">
										<td >
											<strong>P19</strong>
										</td>
										<td>Tim A</td>
										<td>VS</td>
										<td>Tim D</td>
										<td>08.00</td>
									</tr>
									<tr class="tes2" style="border:1px solid #ddd;">
										<td >
											<strong>P20</strong>
										</td>
										<td>Tim B</td>
										<td>VS</td>
										<td>Tim C</td>
										<td>08.00</td>
									</tr> -->
								</tbody>
							</table>
						<!-- </div> -->
					</div><br><br>
				<!-- 
					<b>
						<h3 align="center">Babak Final</h3>
					</b>
					<h6 align="center">Akan Bertanding pada tanggal 26 Oktober 2019</h6>
					<br><br>
					<div>
						<table class="table table-striped text-center">
							
							<tr>
								<td colspan="5" align="center">Pertandingan Final U9</td>
							</tr>
								<tr class="tes text-center" style="border:1px solid #ddd;">
									<td >
										<strong>F1</strong>
									</td>
									<td>Tim A</td>
									<td>VS</td>
									<td>Tim B</td>
									<td>08.00</td>
								</tr>

						</table><br><br>
					</div>
 -->
				</div>
			</div>

			<!-- U11 -->

			<div role="tabpanel" class="tab-pane" id="U11">
				<div class="c-content-title-1">
					<h1 align="center">
						<b>U11 Telesandi Football Cup</b><br>
					</h1>
				</div>
				<div class="container">
					<b>
						<h3 align="center">Babak Penyisihan</h3>
					</b>
					<h6 align="center">Akan Bertanding pada tanggal 5 Oktober 2019</h6>

					<div>
						<table class="text-center table table-striped" width="50%">
						    <tbody>
								<tr>
									<td colspan="6" align="center">U11 Grup A</td>
								</tr>
								<tr class="tes">
									<td><b>P1</b></td>
									<td>MAESTRO</td>
									<td>vs </td>
									<td>SSB PROTSTEM PUTIH</td>
									<td>14.00 - 14.25</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes2">
								    <td><b>P2</b></td>
								    <td>ASSES </td>
								    <td>vs </td>
								    <td>AL AZHAR KEMANG</td>
								    <td>14.30 - 14.55</td>
								    <td>Lap. 1</td>
								</tr>
								<tr class="tes">
									<td><b>P3</b></td>
									<td>SSB PROTSTEM PUTIH </td>
									<td>vs</td>
									<td>ASSES</td>
									<td>15.10 - 15.35</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes2">
								    <td><b>P4</b></td>
								    <td>AL AZHAR KEMANG </td>
								    <td>vs </td>
								    <td>MAESTRO</td>
								    <td>15.40 - 16.05</td>
								    <td>Lap. 1</td>
								</tr>
								<tr class="tes">
								    <td><b>P5</b></td>
								    <td>MAESTRO </td>
								    <td>vs </td>
								    <td>ASSES</td>
								    <td>16.50 - 17.15</td>
								    <td>Lap. 1</td>
								</tr>
								<tr class="tes2">
									<td><b>P6</b></td>
									<td>SSB PROTSTEM PUTIH </td>
									<td>vs </td>
									<td>AL AZHAR KEMANG</td>
									<td>16.20 - 16.45</td>
									<td>Lap. 1</td>
								</tr>
						    </tbody>
						</table>
					</div><br><br>

					<b>
						<h3 align="center">Babak Penyisihan</h3>
					</b>
					<h6 align="center">Akan Bertanding pada tanggal 6 Oktober 2019</h6>
					<br><br>
					<div>
							<table class="text-center table table-striped" width="50%">
								<tbody>
									<tr>
										<td colspan="6" align="center">U11 Grup B</td>
									</tr>
									<tr class="tes">
										<td><b>P1</b></td>
										<td>BAHTERA </td><td>vs</td> 
										<td>SSB TUNAS PRIMA BIRU</td>	
										<td>07.00 - 07.25</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2">
										<td><b>P2</b></td>
										<td>INDONESIA EAGLE </td>
										<td>vs </td>
										<td >PROSTEM KUNING</td>
										<td>07.50 - 08.15</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes">
										<td><b>P3</b></td>
										<td>SSB TUNAS PRIMA BIRU </td>
										<td>vs </td>
										<td>INDONESIA EAGLE</td>
										<td>08.40 - 09.05</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2">
										<td><b>P4</b></td>
										<td>BAHTERA </td>
										<td>vs </td>
										<td>PETROSTREAM KUNING</td>
										<td>09.30 - 09.55</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes">
										<td><b>P5</b></td>
										<td>SSB TUNAS PRIMA BIRU </td>
										<td>vs </td>
										<td>PETROSTREAM KUNING</td>
										<td>10.20 - 10.45</td>
										<td>Lap.1</td>
									</tr>
									<tr class="tes2">
										<td><b>P6</b></td>
										<td>BAHTERA </td>
										<td>vs </td>
										<td>INDONESIA EAGLE</td>
										<td>11.10 - 11.35</td>
										<td>Lap. 1</td>
									</tr>
								</tbody>
							</table>
					</div><br><br>
					<div>
							<table class="text-center table table-striped" width="50%">
								<tbody>
									<tr>
										<td colspan="6" align="center">U11 Grup C</td>
									</tr>
									<tr class="tes">
										<td><b>P1</b></td>
										<td>BINTANG PULO SIRIH </td>
										<td>vs </td>
										<td>BINTANG RDH</td>	
										<td>07.25 - 07.50</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2">
										<td><b>P2</b></td>
										<td>TUNAS PRIMA B </td>
										<td>vs </td>
										<td>FSA PRIVAT</td>
										<td>08.15 - 08.40</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes">
										<td><b>P3</b></td>
										<td>PJSS </td>
										<td>vs </td>
										<td>BINTANG PULO SIRIH</td>
										<td>09.05 - 09.30</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2">
										<td><b>P4</b></td>
										<td>FSA PRIVAT </td>
										<td>vs </td>
										<td>BINTANG RDH</td>
										<td>09.55 - 10.20</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes">
										<td><b>P5</b></td>
										<td>TUNAS PRIMA B </td>
										<td>vs </td>
										<td>PJSS</td>
										<td>10.45 - 11.10</td>
										<td>Lap.1</td>
									</tr>
									<tr class="tes2">
										<td><b>P6</b></td>
										<td>BINTANG PULO SIRIH </td>
										<td>vs </td>
										<td>FSA PRIVAT</td>
										<td>12.30 - 12.55</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes">
										<td><b>P7</b></td>
										<td>BINTANG RDH </td>
										<td>vs </td>
										<td>PJSS</td>
										<td>12.55 - 13.20</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes2">
										<td><b>P8</b></td>
										<td>TUNAS PRIMA B </td>
										<td>vs </td>
										<td>BINTANG PULO SIRIH</td>
										<td>13.20 - 13.45</td>
										<td>Lap. 1</td>
									</tr>
									<tr class="tes">
										<td><b>P9</b></td>
										<td>FSA PRIVAT </td>
										<td>vs </td>
										<td>PJSS</td>
										<td>13.45 - 14.10</td>
										<td>Lap.1</td>
									</tr>
									<tr class="tes2">
										<td><b>P10</b></td>
										<td>BINTANG RDH </td>
										<td>vs </td>
										<td>TUNAS PRIMA B</td>
										<td>14.10 - 14.35</td>
										<td>Lap. 1</td>
									</tr>
								</tbody>
							</table>
					</div><br><br>
				
					<!--<b>-->
					<!--	<h3 align="center">Babak Final</h3>-->
					<!--</b>-->
					<!--<h6 align="center">Akan Bertanding pada tanggal 26 Oktober 2019</h6>-->
					<!--<br><br>-->
					<!--<div>-->
					<!--	<table class="table table-striped text-center">-->
							
					<!--		<tr>-->
					<!--			<td colspan="5" align="center">Pertandingan Final U11</td>-->
					<!--		</tr>-->
					<!--			<tr class="tes text-center" style="border:1px solid #ddd;">-->
					<!--				<td >-->
					<!--					<strong>F1</strong>-->
					<!--				</td>-->
					<!--				<td>Tim A</td>-->
					<!--				<td>VS</td>-->
					<!--				<td>Tim B</td>-->
					<!--				<td>08.00</td>-->
					<!--			</tr>-->

					<!--	</table><br><br>-->
					<!--</div>-->

				</div>
			</div>


             <!--U13-->
			
			<div role="tabpanel" class="tab-pane" id="U13">
				<div class="c-content-title-1">
					<h1 align="center">
						<b>U13 Telesandi Football Cup</b><br>
					</h1>
				</div>
				<div class="container">
					<b>
						<h3 align="center">Babak Penyisihan</h3>
					</b>
					<h6 align="center">Akan Bertanding pada tanggal 13 Oktober 2019</h6>

					<div>
						<table class="text-center table table-striped" width="50%">
						    <tbody>
								<tr>
									<td colspan="6" align="center">U13 Grup A</td>
								</tr>
								<tr class="tes">
									<td><b>P1</b></td>
									<td>LITARA FC</td>
									<td>vs </td>
									<td>SSB AQUA HAIER</td>
									<td>07.00 - 07.25</td>
									<td>Lap. 1</td>
								</tr><!-- 
								<tr class="tes2">
									<td><b>P2</b></td>
									<td>INDONESIA EAGLE</td>
									<TD>vs</TD>
									<td>SSB REMAJA SEBELAS</td>
									<td>07.25 - 07.50</td>
									<td>Lap. 1</td>
								</tr> -->
								<tr class="tes2">
									<td><b>P2</b></td>
									<td>SSB BAHTERA</td>
									<td>vs</td>
									<td>SSB ASSES</td>
									<td>07.25 - 07.50</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes">
									<TD><B>P3</B></TD>
									<td>SSB PUTRA UTAMA</td>
									<td>vs</td>
									<td>LITARA FC</td>
									<td>07.50 - 08.15</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes2">
									<td><b>P4</b></td>
									<td>SSB AQUA HAIER</td>
									<td>vs</td>
									<td>INDONESIA EAGLE</td>
									<td>08.15 - 08.40</td>
									<td>Lap. 1</td>
								</tr><!-- 
								<tr class="tes2"> 
									<td><b>P6</b></td>
									<td>SSB REMAJA SEBELAS</td>
									<td>vs</td>
									<td>SSB BAHTERA</td>
									<td></td>
									<td>Lap. 1</td>
								</tr> -->
								<tr class="tes">
									<td><b>P5</b></td>
									<td>SSB ASSES</td>
									<td>vs</td>
									<td>SSB PUTRA UTAMA</td>
									<td>08.40 - 09.05</td>
									<td>Lap.1</td>
								</tr><!-- 
								<tr class="tes2">
									<td><b>P8</b></td>
									<td>SSB REMAJA SEBELAS</td>
									<td>vs</td>
									<td>SSB AQUA HAIER</td>
									<td>09.55 - 10.20</td>
									<td>Lap. 1</td>
								</tr> -->
								<tr class="tes2">
									<td><b>P6</b></td>
									<td>INDONESIA EAGLE</td>
									<td>vs</td>
									<td>LITARA FC</td>
									<td>09.05 - 09.30</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes">
									<td><b>P7</b></td>
									<td>SSB AQUA HAIER</td>
									<td>vs</td>
									<td>SSB PUTRA UTAMA</td>
									<td>09.30 - 09.55</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes2">
									<td><b>P8</b></td>
									<td>LITARA FC</td>
									<td>vs</td>
									<td>SSB ASSES</td>
									<td>09.55 - 10.20</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes">
									<td><b>P9</b></td>
									<td>SSB BAHTERA</td>
									<td>vs</td>
									<td>INDONESIAN EAGLE</td>
									<td>10.20 - 10.45</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes2">
									<td><b>P10</b></td>
									<td>SSB PUTRA UTAMA</td>
									<td>vs</td>
									<td>SSB BAHTERA</td>
									<td>10.45 - 11.10</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes">
									<td><b>P11</b></td>
									<td>SSB ASSES</td>
									<td>vs</td>
									<td>SSB AQUA HAIER</td>
									<td>11.10 - 11.35</td>
									<td>Lap. 1</td>
								</tr><!-- 
								<tr class="tes">
									<td><b>P15</b></td>
									<td>SSB REMAJA SEBELAS</td>
									<td>vs</td>
									<td>LITARA FC</td>
									<td>13.45 - 14.10</td>
									<td>Lap. 1</td>
								</tr> -->
								<tr class="tes2">
									<td><b>P12</b></td>
									<td>INDONESIAN EAGLE</td>
									<td>vs</td>
									<td>SSB PUTRA UTAMA</td>
									<td>12.30 - 12.55</td>
									<TD>Lap. 1</TD>
								</tr>
								<tr class="tes">
									<td><b>P13</b></td>
									<td>LITARA FC</td>
									<td>vs</td>
									<td>SSB BAHTERA</td>
									<td>12.55 - 13.20</td>
									<td>Lap. 1</td>
								</tr><!-- 
								<tr class="tes2">
									<td><b>P18</b></td>
									<td>SSB ASSES</td>
									<td>vs</td>
									<td>SSB REMAJA SEBELAS</td>
									<td>15.00 - 15.25</td>
									<td>Lap. 1</td>
								</tr> -->
								<tr class="tes2">
									<td><b>P14</b></td>
									<td>SSB AQUA HAIER</td>
									<td>vs</td>
									<td>SSB BAHTERA</td>
									<td>13.20 - 13.45</td>
									<td>Lap. 1</td>
								</tr>
								<tr class="tes">
									<td><b>P15</b></td>
									<td>SSB ASSES</td>
									<td>vs</td>
									<td>INDONESIAN EAGLE</td>
									<td>13.45 - 14.10</td>
									<td>Lap. 1</td>
								</tr><!-- 
								<tr class="tes">
									<td><b>P21</b></td>
									<td>SSB PUTRA UTAMA</td>
									<td>vs</td>
									<td>SSB REMAJA SEBELAS</td>
									<td>16.15 - 16.35</td>
									<td>Lap. 1</td>
								</tr> -->
								</tbody>
							</table>
					</div><br><br>
				
					<!--<b>-->
					<!--	<h3 align="center">Babak Final</h3>-->
					<!--</b>-->
					<!--<h6 align="center">Akan Bertanding pada tanggal 26 Oktober 2019</h6>-->
					<!--<br><br>-->
					<!--<div>-->
					<!--	<table class="table table-striped text-center">-->
							
					<!--		<tr>-->
					<!--			<td colspan="5" align="center">Pertandingan Final U13</td>-->
					<!--		</tr>-->
					<!--			<tr class="tes text-center" style="border:1px solid #ddd;">-->
					<!--				<td >-->
					<!--					<strong>F1</strong>-->
					<!--				</td>-->
					<!--				<td>Tim A</td>-->
					<!--				<td>VS</td>-->
					<!--				<td>Tim B</td>-->
					<!--				<td>08.00</td>-->
					<!--			</tr>-->

					<!--	</table><br><br>-->
					<!--</div>-->

				</div>
			</div>


		</div>

	</div>
</section>

@endsection