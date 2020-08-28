<table border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>Waktu</th>
            <th>Divisi</th>
            <th>Grup</th>
            <th>Tempat</th>
            <th>Tim 1</th>
            <th>Tim 2</th>
            <th>Hadir</th>
            <th>Main</th>
            <th>Input</th>
        </tr>
    </thead>
    <tbody>
@foreach($jadwal as $j)
        <tr>
            <td>{{ $j->tanggal }} {{ $j->jam }}</td>
            <td>{{ $j->u}}</td>
            <td>{{ $j->grup }}</td>
            <td>{{ $j->tempat }}</td>
            <td>
			    @foreach($team as $t)
			        @if($t->id_klasemen == $j->tim1)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
            </td>
            <td>
			    @foreach($team as $t)
			        @if($t->id_klasemen == $j->tim2)
			                                   {{ $t->nama_teams }}
			        @endif
			    @endforeach
			   </td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
@endforeach
    </tbody>
</table>