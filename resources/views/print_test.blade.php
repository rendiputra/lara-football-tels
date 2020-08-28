<!DOCTYPE html>
<html>
<head>
	<title>Test Print</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<style type="text/css">
	body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .pattern{
                position: fixed;
                bottom:   20%;
                left:     10%;
                /** The width and height may change 
                    according to the dimensions of your letterhead
                **/
                width:    150mm;
                height:   150mm;
                opacity: 0.2;

                /** Your watermark should be behind every content**/
                z-index:  -1000;
    }
    #rahasia{
        position: absolute;
        top: 5;
        right:5;
    }
	</style>
</head>
<body>
<script type="text/php">
    if (isset($pdf)) {
        $x = 265;
        $y = 814;
        $text = "Page {PAGE_NUM} of {PAGE_COUNT}";
        $font = null;
        $size = 12;
        $color = array(0,0,0);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>    
                <img class="pattern" src="https://football.syntx.id/img/tfc.png">
    <div class="page">
        <div class="subpage">
        	<div class="justify-content-center">
                <p id="rahasia"><b>DOKUMEN RAHASIA</b></p>
        		<center>
                    <h5>PENDAFTARAN ULANG</h5>
                    <h3>TELESANDI FOOTBALL 2019</h3>
                </center><br>
        		<p>Dengan adanya surat ini, maka dinyatakan sah pembayaran telesandi cup dan memenuhi persyaratan perlombaan tersebut. Saat Technical meeting harap membawa bukti surat ini, Terima Kasih.</p>
<br>
        		<table width="100%" border='1' cellpadding="10" cellspacing="0" style="background-color: rgba(0,0,0,0)">
                    <tr>
                        <th style="width: 35%">Nama Tim</th>
                        <td>{{ $data->nama_teams }}</td>
                    </tr>
        			<tr>
        				<th style="width: 35%">Penanggung Jawab</th>
        				<td>{{ $data->nama_pelatih }}</td>
        			</tr>
        			<tr>
        				<th style="width: 35%">Nomor Yang Dapat Dihubungi</th>
        				<td>{{ $data->no_hp }}</td>
        			</tr>
                    <tr>
                        <th style="width: 35%">Divisi</th>
                        <td>{{ $data->u }}</td>
                    </tr>
                    <tr>
                        <th style="width: 35%">Kode Validasi</th>
                        <td>{{ $data->kode_daftarulang }}</td>
                    </tr>
        		</table><br>
        		<br>
        		<hr>
        		<br>
                    <center><h3>DAFTAR PEMAIN</h3></center>
                    <br>

                <table width="100%" border="1" cellpadding="10" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 10%">NISN</th>
                            <th>Nama Pemain</th>
                            <th style="width: 3%">NP</th>
                            <th style="width: 23%">Tanggal Lahir</th>
                            <th style="width: 13%">Posisi</th>
                        </tr>
                    </thead>
                    <tbody>
@foreach($data2 as $d)
                        <tr>
                            <td>{{ $d->nisn }}</td>
                            <td>{{ $d->nama_players }}</td>
                            <td>{{ $d->no_punggung }}</td>
                            <td>{{date('d F Y', strtotime($d->tanggal_lahir))}}</td>
                            <td>{{ $d->posisi }}</td>
                        </tr>
@endforeach
                    </tbody>
                </table>
        	</div>
        </div>
    </div>
</body>
</html>