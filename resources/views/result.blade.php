@extends('layouts/app')

@section('title', 'Telesandi Soccer')

@section('content')

<section id="fixtures">
	
	<div class="container">
		@if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
         @endif

         @if (session('eror'))
            <div class="alert alert-danger" role="alert">
                {{ session('eror') }}
            </div>
         @endif
         @if (session('upsukses'))
            <div class="alert alert-success" role="alert">
                {{ session('upsukses') }}
            </div>
         @endif

         @if (session('uperor'))
            <div class="alert alert-danger" role="alert">
                {{ session('uperor') }}
            </div>
         @endif
		<div class="c-content-title-1">
			<center>
				<h1 >Hasil Pertandingan</h1>
				<hr class="bg-primary" width="	50px" style="border:2px solid">
			</center>
		</div>	
		<div class="c-content-tab-3 c-opt-1" role="tabpanel">
			<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

              <li class="active">

                <a href="#u-9" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3 active" aria-expanded="true" style="border-radius: 60px; width: 50px; margin-right: 15px;">U9</a>

                <a href="#u-11" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" onclick="showall(); showcat(1);" style="border-radius: 60px; width: 50px; margin-right: 15px;">U11</a>

                <a href="#u-13" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" onclick="showall(); showcat(1);" style="border-radius: 60px; width: 50px;">U13</a>

              </li>

            </ul>

		<center>
			<div class="tab-content">
			<div id="u-9" class="tab-pane active">
				<div class="c-content-tab-3 c-opt-1" role="tabpanel">
					<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

                      <li style="margin-right: 15px;">

                        <a href="#u9-1" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" style="border-radius: 60px; width: 80px;">Grup A</a>


                        <a href="#u9-2" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup B</a>
                      </li>

                    </ul>
				</div>
				

				<div class="tab-content table-responsive">
					<div class="tab-pane active" role="tabpanel" id="u9-1">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
        				    
        				    <br>
				            <h2>U9 Grup A</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<th scope="col">Jam</th>
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Skor</th>
										<th scope="col">Tim 2</th>
										
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U9")
	    @if($a->grup === "A")
	    	@php  $no++; @endphp
	    	@foreach($hasil as $h)
    	    	@if($h->id_jadwal == $a->id_jadwal)
    			
									<tr>
										<td >{{$a->tanggal}} </td>
										<td >{{$a->jam}} </td>
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim1)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    		            @if($t->id_klasemen == $a->tim1)
    		                @php 
    		                    $goal1_player = [];
                                $goal2_player = [];
                                
    		                    $goal1 = $h->score1;
                                $goal2 = $h->score2;
                                
                                if($goal1 == "null"){
                                    //$goal1_player = array(0 => '-'); 
                                } else {
        		                    $goal1_player = json_decode($goal1);
        		                }
        		                
        		                if($goal2 == "null"){
                                    //$goal2_player = array(0 => '-');
                                } else {
                                    $goal2_player = json_decode($goal2);
        		                }
        		                
        		                //dd($goal2_player);
        		                echo count($goal1_player); 
    		                          echo'<b> : </b>';
        		                echo count($goal2_player);
        		              
        		            @endphp
    		            @endif
    		        @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim2)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
			                            </td>
    			    @endif
    		   	@endforeach							
									</tr>
            

    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					
					
					<div class="tab-pane " role="tabpanel" id="u9-2">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
				            <div class="text-left">
				            
        				    <br>
				            <h2>U9 Grup B</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<th scope="col">Jam</th>
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Skor</th>
										<th scope="col">Tim 2</th>
										
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U9")
	    @if($a->grup === "B")
	    	@php  $no++; @endphp
	    	@foreach($hasil as $h)
    	    	@if($h->id_jadwal == $a->id_jadwal)
    			
									<tr>
										<td >{{$a->tanggal}} </td>
										<td >{{$a->jam}} </td>
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim1)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    		            @if($t->id_klasemen == $a->tim1)
    		                @php 
    		                    $goal1_player = [];
                                $goal2_player = [];
                                
    		                    $goal1 = $h->score1;
                                $goal2 = $h->score2;
                                
                                if($goal1 == "null"){
                                    //$goal1_player = array(0 => '-'); 
                                } else {
        		                    $goal1_player = json_decode($goal1);
        		                }
        		                
        		                if($goal2 == "null"){
                                    //$goal2_player = array(0 => '-');
                                } else {
                                    $goal2_player = json_decode($goal2);
        		                }
        		                
        		                //dd($goal2_player);
        		                echo count($goal1_player); 
    		                          echo'<b> : </b>';
        		                echo count($goal2_player);
        		              
        		            @endphp
    		            @endif
    		        @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim2)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
			                            </td>
			    @endif
		   	@endforeach			
									</tr>


    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="u-11" class="tab-pane">
				<div class="c-content-tab-3 c-opt-1" role="tabpanel">
					<ul  class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

                      <li style="margin-right: 15px;">

                        <a href="#u11-1" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" style="border-radius: 60px; width: 80px;">Grup A</a>

                      </li>

                      <li style="margin-right: 15px;">

                        <a href="#u11-2" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup B</a>

                      </li>

                      <li style="margin-right: 15px;">

                        <a href="#u11-3" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Grup C</a>

                      </li>

                      <li style="margin-right: 15px;">

                        <a href="#u11-Semi" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="false" style="border-radius: 60px; width: 80px;">Semi Final</a>

                      </li>

                    </ul>
				</div>
				<br>
				<div class="tab-content table-responsive">
					<div class="tab-pane active" role="tabpanel" id="u11-1">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U11 Grup A</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<th scope="col">Jam</th>
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Skor</th>
										<th scope="col">Tim 2</th>
										
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U11")
	    @if($a->grup === "A")
	    	@php  $no++; @endphp
	    	@foreach($hasil as $h)
    	    	@if($h->id_jadwal == $a->id_jadwal)
    			
									<tr>
										<td >{{$a->tanggal}} </td>
										<td >{{$a->jam}} </td>
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim1)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    		            @if($t->id_klasemen == $a->tim1)
    		                @php 
    		                    $goal1_player = [];
                                $goal2_player = [];
                                
    		                    $goal1 = $h->score1;
                                $goal2 = $h->score2;
                                
                                if($goal1 == "null"){
                                    //$goal1_player = array(0 => '-'); 
                                } else {
        		                    $goal1_player = json_decode($goal1);
        		                }
        		                
        		                if($goal2 == "null"){
                                    //$goal2_player = array(0 => '-');
                                } else {
                                    $goal2_player = json_decode($goal2);
        		                }
        		                
        		                //dd($goal2_player);
        		                echo count($goal1_player); 
    		                          echo'<b> : </b>';
        		                echo count($goal2_player);
        		              
        		            @endphp
    		            @endif
    		        @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim2)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
			                            </td>
    			    @endif
    		   	@endforeach		
									</tr>


    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					<div class="tab-pane " role="tabpanel" id="u11-2">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U11 Grup B</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<th scope="col">Jam</th>
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Skor</th>
										<th scope="col">Tim 2</th>
										
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U11")
	    @if($a->grup === "B")
	    	@php  $no++; @endphp
	    	@foreach($hasil as $h)
    	    	@if($h->id_jadwal == $a->id_jadwal)
    			
									<tr>
										<td >{{$a->tanggal}} </td>
										<td >{{$a->jam}} </td>
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim1)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    		            @if($t->id_klasemen == $a->tim1)
    		                @php 
    		                    $goal1_player = [];
                                $goal2_player = [];
                                
    		                    $goal1 = $h->score1;
                                $goal2 = $h->score2;
                                
                                if($goal1 == "null"){
                                    //$goal1_player = array(0 => '-'); 
                                } else {
        		                    $goal1_player = json_decode($goal1);
        		                }
        		                
        		                if($goal2 == "null"){
                                    //$goal2_player = array(0 => '-');
                                } else {
                                    $goal2_player = json_decode($goal2);
        		                }
        		                
        		                //dd($goal2_player);
        		                echo count($goal1_player); 
    		                          echo'<b> : </b>';
        		                echo count($goal2_player);
        		              
        		            @endphp
    		            @endif
    		        @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim2)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
			                            </td>
    			    @endif
    		   	@endforeach				
									</tr>


    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					<div class="tab-pane "  role="tabpanel" id="u11-3">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U11 Grup C</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<th scope="col">Jam</th>
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Skor</th>
										<th scope="col">Tim 2</th>
										
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U11")
	    @if($a->grup === "C")
	    	@php  $no++; @endphp
	    	@foreach($hasil as $h)
    	    	@if($h->id_jadwal == $a->id_jadwal)
    			
									<tr>
										<td >{{$a->tanggal}} </td>
										<td >{{$a->jam}} </td>
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim1)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    		            @if($t->id_klasemen == $a->tim1)
    		                @php 
    		                    $goal1_player = [];
                                $goal2_player = [];
                                
    		                    $goal1 = $h->score1;
                                $goal2 = $h->score2;
                                
                                if($goal1 == "null"){
                                    //$goal1_player = array(0 => '-'); 
                                } else {
        		                    $goal1_player = json_decode($goal1);
        		                }
        		                
        		                if($goal2 == "null"){
                                    //$goal2_player = array(0 => '-');
                                } else {
                                    $goal2_player = json_decode($goal2);
        		                }
        		                
        		                //dd($goal2_player);
        		                echo count($goal1_player); 
    		                          echo'<b> : </b>';
        		                echo count($goal2_player);
        		              
        		            @endphp
    		            @endif
    		        @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim2)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
			                            </td>
    			    @endif
    		   	@endforeach				
									</tr>


    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
					<div class="tab-pane "  role="tabpanel" id="u11-Semi">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>Semi Final U11</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<th scope="col">Jam</th>
										<th scope="col">Divisi</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Skor</th>
										<th scope="col">Tim 2</th>
										
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U11")
	    @if($a->grup === "Semi")
	    	@php  $no++; @endphp
	    	@foreach($hasil as $h)
    	    	@if($h->id_jadwal == $a->id_jadwal)
    			
									<tr>
										<td >{{$a->tanggal}} </td>
										<td >{{$a->jam}} </td>
										<td >{{$a->u}}</td>
										<td >{{$a->tempat}}</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim1)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    		            @if($t->id_klasemen == $a->tim1)
    		                @php 
    		                    $goal1_player = [];
                                $goal2_player = [];
                                
    		                    $goal1 = $h->score1;
                                $goal2 = $h->score2;
                                
                                if($goal1 == "null"){
                                    //$goal1_player = array(0 => '-'); 
                                } else {
        		                    $goal1_player = json_decode($goal1);
        		                }
        		                
        		                if($goal2 == "null"){
                                    //$goal2_player = array(0 => '-');
                                } else {
                                    $goal2_player = json_decode($goal2);
        		                }
        		                
        		                //dd($goal2_player);
        		                echo count($goal1_player); 
    		                          echo'<b> : </b>';
        		                echo count($goal2_player);
        		              
        		            @endphp
    		            @endif
    		        @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim2)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
			                            </td>
    			    @endif
    		   	@endforeach				
									</tr>


    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="u-13" class="tab-pane">
				<div class="c-content-tab-3 c-opt-1" role="tabpanel">
					<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">

                      <li style="margin-right: 15px;">

                        <a href="#u13-a" role="tab" data-toggle="tab" class="c-font-16 c-font-uppercase btn btn-sm btn-primary mb-3" aria-expanded="true" style="border-radius: 60px; width: 80px;">Grup A</a>

                      </li>
                    </ul>
				</div>
				<br>
				<div class="tab-content table-responsive">
					<div class="tab-pane active" role="tabpanel" id="u13-a">
						<div class="c-content-tab-3 c-opt-1" role="tabpanel">
						    <div class="text-left">
				            <h2>U13 Grup A</h2>
				            </div>
							<table class="table table-striped">
								<thead class="bg-primary text-white">
									<tr>
										<th scope="col">Waktu</th>
										<th scope="col">Jam</th>
										<th scope="col">Divisi</th>
										<th scope="col">Grup</th>
										<th scope="col">Tempat Bertanding</th>
										<th scope="col">Tim 1</th>
										<th scope="col">Skor</th>
										<th scope="col">Tim 2</th>
										
									</tr>
								</thead>
								<tbody>
@php $no=0; @endphp
@foreach($data as $a)
  	@if($a->u === "U13")
	    @if($a->grup === "A")
	    	@php  $no++; @endphp
	    	@foreach($hasil as $h)
    	    	@if($h->id_jadwal == $a->id_jadwal)
    			
									<tr>
										<td >{{$a->tanggal}} </td>
										<td >{{$a->jam}} </td>
										<td >{{$a->u}}</td>
										<td >{{$a->grup}}</td>
										<td >{{$a->tempat}}</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim1)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    		            @if($t->id_klasemen == $a->tim1)
    		                @php 
    		                    $goal1_player = [];
                                $goal2_player = [];
                                
    		                    $goal1 = $h->score1;
                                $goal2 = $h->score2;
                                
                                if($goal1 == "null"){
                                    //$goal1_player = array(0 => '-'); 
                                } else {
        		                    $goal1_player = json_decode($goal1);
        		                }
        		                
        		                if($goal2 == "null"){
                                    //$goal2_player = array(0 => '-');
                                } else {
                                    $goal2_player = json_decode($goal2);
        		                }
        		                
        		                //dd($goal2_player);
        		                echo count($goal1_player); 
    		                          echo'<b> : </b>';
        		                echo count($goal2_player);
        		              
        		            @endphp
    		            @endif
    		        @endforeach
										</td>
										<td >
    			    @foreach($teams as $t)
    			        @if($t->id_klasemen == $a->tim2)
    			                              {{ $t->nama_teams }}
    			        @endif
    			    @endforeach
			                            </td>
    			    @endif
    		   	@endforeach		
									</tr>


    @else
    @endif

  @else
  @endif

@endforeach
								</tbody>
							</table>
							<p>
								<span id="totalrow">{{$no}}</span>
								Records Total
							</p>
						</div>
					</div>
				</div>
			</div>
			</div>
		</center>
	</div>

</section>
@endsection