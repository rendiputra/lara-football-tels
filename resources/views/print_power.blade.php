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
                <img class="pattern" src="https://football.syntx.id/img/tfc.png">
    <div class="page">
        <div class="subpage">
            <table border="1" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama SSB</th>
                        <th>NISN</th>
                        <th>Nama Peserta</th>
                        <!--<th>STATUS</th>-->
                    </tr>
                </thead>
                <tbody>
@php $no = 1; @endphp
@foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_teams }}</td>
                        <td>{{ $d->nisn }}</td>
                        <td>{{ $d->nama_players }}</td>
                    </tr>
@endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>