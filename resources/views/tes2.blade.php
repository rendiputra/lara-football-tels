@extends('layouts/main')

@section('title', 'Top Score')

@section('content')


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
	@php $peringkat = 1;@endphp
	@for($i = 0; $i < 5; $i++)
    	@php
    	    $data = explode('-', $u9_player[$i]);
    	@endphp
			            <tr>
			                <td>{{ $peringkat++}}</td>
			                <td>{{ $data[0] }}</td>
			                <td style="text-transform: capitalize;">{{ $data[1] }}</td>
			                <td>{{ $u9_score[$u9_player[$i]] }}</td>
			            </tr>
	@endfor
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

	@php $peringkat = 1;@endphp
	@for($i = 0; $i < 5; $i++)
    	@php
    	    $data = explode('-', $u11_player[$i]);
    	@endphp
			            <tr>
			                <td>{{ $peringkat++}}</td>
			                <td>{{ $data[0] }}</td>
			                <td style="text-transform: capitalize;">{{ $data[1] }}</td>
			                <td>{{ $u11_score[$u11_player[$i]] }}</td>
			            </tr>
	@endfor			            
			           
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

	@php $peringkat = 1;@endphp
	@for($i = 0; $i < 5; $i++)
    	@php
    	    $data = explode('-', $u13_player[$i]);
    	@endphp
			            <tr>
			                <td>{{ $peringkat++}}</td>
			                <td>{{ $data[0] }}</td>
			                <td style="text-transform: capitalize;">{{ $data[1] }}</td>
			                <td>{{ $u13_score[$u13_player[$i]] }}</td>
			            </tr>
	@endfor	
    		            
    		            <!--<tr>-->
    		            <!--    <td>1</td>-->
    		            <!--    <td>Rizfan</td>-->
    		            <!--    <td>Telesandi Football Club</td>-->
    		            <!--    <td>500</td>-->
    		            <!--</tr>-->
    		        </tbody>
    		    </table><br>
    		    <p>Last Updated At {{ date('d-M-Y') }}</p>
	        </div>
	    </div>
	</div>
	
    <br><br><br>
</section>


@endsection