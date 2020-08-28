<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
	<title>Test Print</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">
	@page { margin-top: -1.2cm; margin-left: 0; margin-right: 0; margin-bottom: 0; }
	body {
        width: 210mm;
        height: 297mm;
        margin: 0;
        padding: 0;
        font: 12pt "Tahoma";
    }
    #rahasia{
        position: absolute;
        top: 5;
        right:5;
    }
    .nama{
        position: relative;
        left: 13.33cm;
        top: 1.59cm;
        width: 13cm;
        font-size: 9px;
        font-family: Impact;
        color: white;
    }
    .team{
        position: relative;
        left: 13.00cm;
        top: 1.60cm;
        width: 13cm;
        font-size: 9px;
        font-family: Impact;
        color: white;
    }
    .u{
        position: relative;
        left: 12.10cm;
        top: 1.83cm;
        width: 13cm;
        font-size: 9px;
        font-family: Impact;
        color: white;
    }
    .nisn{
        position: relative;
        left: 11.95cm;
        top: 1.80cm;
        width: 13cm;
        font-size: 9px;
        font-family: Impact;
        color: white;
    }
    .no{
        position: relative;
        left: 13.17cm;
        top: 1.85cm;
        width: 13cm;
        font-size: 9px;
        font-family: Impact;
        color: white;
    }
    .gambar{
        position: absolute;
        left: 9.39cm;
        top: 1.68cm;
        width: 1.50cm;
        height: 1.55cm;
        font-family: Impact;
        color: white;
        background-color:white;
    }
    .relative{
        position: relative;
        top: 0cm;
        left: 0;
        width: 210mm; 
        height: 20mm;
    }
	</style>
</head>
<body>
    <table>
@php $i=1; @endphp

@foreach($data as $d)
            <tr>
                <td>
                    <div class="relative">
                        <img class="gambar" src="data:image/png;base64,{{DNS2D::getBarcodePNG('https://telesandifootballcup.com/checker/'.$lomba->id_teams.'/'.$d->nisn.'/'.str_replace(' ', '%20', $d->nama_players), 'QRCODE')}}" alt="barcode" />
                        <div class="nama"><b>{{ $d->nama_players }}</b></div>
                        <div class="team"><b>{{ $lomba->nama_teams }}</b></div>
                        <div class="u"><b>{{ $lomba->u }}</b></div>
                        <div class="nisn"><b>{{ $d->nisn }}</b></div>
                        <div class="no"><b>{{ $d->no_punggung }}</b></div>
                        @if($lomba->u == 'U9')
                        <img class="bg" style="margin:2px;width: 210mm; height: 20mm;" src="{{ public_path('img/gelang u9.jpg') }}">
                        @endif
                        @if($lomba->u == 'U11')
                        <img class="bg" style="margin:2px;width: 210mm; height: 20mm;" src="{{ public_path('img/gelang u11.jpg') }}">
                        @endif
                        @if($lomba->u == 'U13')
                        <img class="bg" style="margin:2px;width: 210mm; height: 20mm;" src="{{ public_path('img/gelang u13.jpg') }}">
                        @endif
                    </div>
                </td>
            </tr>
@php
$i++;
@endphp
@endforeach
    </table>
</body>
</html>