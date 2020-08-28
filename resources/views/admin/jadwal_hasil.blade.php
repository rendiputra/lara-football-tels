@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hasil Pertandingan</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group row justify-content-center">
                        <div class="col col-md-5 col-sm-10 col-12 text-center">
                            <h4>{{ $team1->nama_teams }}</h4> {{ count($player1_goal) }}
                        </div>
                        <div class="col col-md-1 col-sm-10 col-12 text-center">
                            <h6>VS</h6>
                        </div>
                        <div class="col col-md-5 col-sm-10 col-12 text-center">
                            <h4>{{ $team2->nama_teams }}</h4> {{ count($player2_goal) }}
                        </div>
                    </div>
                    <hr>
    @if(empty($hasil))
                    <form class="form-group row justify-content-center" method="POST" action="{{ route('hasil_pertandingan_act',$data->id_jadwal) }}">
                        @csrf
                        
                        <input type="hidden" name="klasemen1" value="{{ $data->tim1 }}">
                        <input type="hidden" name="klasemen2" value="{{ $data->tim2 }}">
                        <div class="col col-md-6 col-sm-10 col-12">
                            <div class="card p-3">
                                <label>Goal</label>
                                <div id="goal_row">
                                    <div  class="row mb-2">
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <select class="form-control form-control-sm" name="goal1[]">
                                                <option value="" selected disabled>--Pencetak Goal--</option>
                @foreach($player1 as $p1)
                
                                                <option value="{{ $p1->id_players }}">{{ $p1->nama_players }}</option>
                
                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <a onclick="add_row()" href="#" class="btn btn-primary btn-sm">+</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="goal">
                                    
                                </div>
                            </div>
                            <div class="card p-3">
                                <label>Kartu Kuning</label>
                                <div id="kk1_row">
                                    <div  class="row mb-2">
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <select class="form-control form-control-sm" name="kk1[]">
                                                <option value="" selected disabled>--Kartu Kuning--</option>
                @foreach($player1 as $p1)
                
                                                <option value="{{ $p1->id_players }}">{{ $p1->nama_players }}</option>
                
                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <a onclick="add_kk1()" href="#" class="btn btn-primary btn-sm">+</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="kk1">
                                    
                                </div>
                            </div>
                            <div class="card p-3">
                                <label>Kartu Merah</label>
                                <div id="km1_row">
                                    <div  class="row mb-2">
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <select class="form-control form-control-sm" name="km1[]">
                                                <option value="" selected disabled>--Kartu Merah--</option>
                @foreach($player1 as $p1)
                
                                                <option value="{{ $p1->id_players }}">{{ $p1->nama_players }}</option>
                
                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <a onclick="add_km1()" href="#" class="btn btn-primary btn-sm">+</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="km1">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-6 col-sm-10 col-12">
                            <div class="card p-3">
                                <label>Goal</label>
                                <div id="goal2_row">
                                    <div  class="row mb-2">
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <select class="form-control form-control-sm" name="goal2[]">
                                                <option value="" selected disabled>--Pencetak Goal--</option>
                @foreach($player2 as $p1)
                
                                                <option value="{{ $p1->id_players }}">{{ $p1->nama_players }}</option>
                
                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <a onclick="add2_row()" href="#" class="btn btn-primary btn-sm">+</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="goal2">
                                    
                                </div>
                            </div>
                            <div class="card p-3">
                                <label>Kartu Kuning</label>
                                <div id="kk2_row">
                                    <div  class="row mb-2">
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <select class="form-control form-control-sm" name="kk2[]">
                                                <option value="" selected disabled>--Kartu Kuning--</option>
                @foreach($player2 as $p1)
                
                                                <option value="{{ $p1->id_players }}">{{ $p1->nama_players }}</option>
                
                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <a onclick="add_kk2()" href="#" class="btn btn-primary btn-sm">+</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="kk2">
                                    
                                </div>
                            </div>
                            <div class="card p-3">
                                <label>Kartu Merah</label>
                                <div id="km2_row">
                                    <div  class="row mb-2">
                                        <div class="col-md-10 col-sm-10 col-10">
                                            <select class="form-control form-control-sm" name="km2[]">
                                                <option value="" selected disabled>--Kartu Merah--</option>
                @foreach($player2 as $p1)
                
                                                <option value="{{ $p1->id_players }}">{{ $p1->nama_players }}</option>
                
                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2">
                                            <a onclick="add_km2()" href="#" class="btn btn-primary btn-sm">+</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="km2">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-12 col-sm-12 col-12 mt-2">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
    @else
                    <h5>Pencetak Goal</h5>
                    <div class="form-group row">
                        <div class="col col-md-6 col-sm-12 col-12">
                            <label>Team 1</label>
                            <div class="form-group">
        @for($i = 0; $i < count($player1_goal); $i++)
                                <input class="form-control mb-3" style="text-transform:capitalize;" type="text" readonly value="{{ $player1_goal[$i] }}">
        @endfor
                            </div>
                        </div>
                        <div class="col col-md-6 col-sm-12 col-12">
                            <label>Team 2</label>
                            <div class="form-group">
        @for($i = 0; $i < count($player2_goal); $i++)
                                <input class="form-control mb-3" style="text-transform:capitalize;" type="text" readonly value="{{ $player2_goal[$i] }}">
        @endfor
                            </div>
                        </div>
                    </div>
        <!--******************** Kartu Kuning ******************-->
                    <h5>Kartu Kuning</h5>
                    <div class="form-group row">
                        <div class="col col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Team 1</label>
        @for($i = 0; $i < count($player1_kk); $i++)
                                <input class="form-control mb-3" style="text-transform:capitalize;" type="text" readonly value="{{ $player1_kk[$i] }}">
        @endfor
                            </div>
                        </div>
                        <div class="col col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Team 2</label>
        @for($i = 0; $i < count($player2_kk); $i++)
                                <input class="form-control mb-3" style="text-transform:capitalize;" type="text" readonly value="{{ $player2_kk[$i] }}">
        @endfor
                            </div>
                        </div>
                    </div>
        <!--******************** Kartu Merah ******************-->
                    <h5>Kartu Merah</h5>
                    <div class="form-group row">
                        <div class="col col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Team 1</label>
        @for($i = 0; $i < count($player1_km); $i++)
                                <input class="form-control mb-3" style="text-transform:capitalize;" type="text" readonly value="{{ $player1_km[$i] }}">
        @endfor
                            </div>
                        </div>
                        <div class="col col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Team 2</label>
        @for($i = 0; $i < count($player2_km); $i++)
                                <input class="form-control mb-3" style="text-transform:capitalize;" type="text" readonly value="{{ $player2_km[$i] }}">
        @endfor
                            </div>
                        </div>
                    </div>
    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    function add_row(){
        var goal = document.getElementById('goal_row').innerHTML;
        var new_row = document.getElementById('goal').innerHTML;
        
        document.getElementById('goal').innerHTML = new_row + goal;
    }
    function add_kk1(){
        var kk1 = document.getElementById('kk1_row').innerHTML;
        var new_kk1 = document.getElementById('kk1').innerHTML;
        
        document.getElementById('kk1').innerHTML = new_kk1 + kk1;
    }
    function add_km1(){
        var km1 = document.getElementById('km1_row').innerHTML;
        var new_km1 = document.getElementById('km1').innerHTML;
        
        document.getElementById('km1').innerHTML = new_km1 + km1;
    }
    // 
        function add2_row(){
        var goal2 = document.getElementById('goal2_row').innerHTML;
        var new_row2 = document.getElementById('goal2').innerHTML;
        
        document.getElementById('goal2').innerHTML = new_row2 + goal2;
    }
    function add_kk2(){
        var kk2 = document.getElementById('kk2_row').innerHTML;
        var new_kk2 = document.getElementById('kk2').innerHTML;
        
        document.getElementById('kk2').innerHTML = new_kk2 + kk2;
    }
    function add_km2(){
        var km2 = document.getElementById('km2_row').innerHTML;
        var new_km2 = document.getElementById('km2').innerHTML;
        
        document.getElementById('km2').innerHTML = new_km2 + km2;
    }
</script>
@endsection
