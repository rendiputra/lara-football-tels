<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use DB;

// Model

use App\Participant;




class FrontController extends Controller

{

    //tampil klasemen
    public function index()
    {   
        $data = DB::table('klasemen')
                ->orderByRaw('poin DESC,sg DESC')
                ->get();
        $jadwalUP = DB::table('jadwal')
                ->orderBy('tanggal', 'asc')
                ->orderBy('jam', 'asc')
                ->get();
        $jadwalDOWN = DB::table('jadwal')
                ->orderBy('tanggal', 'DESC')
                ->orderBy('jam', 'DESC')
                ->get();
        
        $team = DB::table('klasemen')
                ->get();
                
                  
        $data2 = DB::table('jadwal')
                ->orderBy('tanggal', 'asc')
                ->orderBy('jam', 'asc')
                ->get();
                
        return view('index',['data'=>$data,'jadwalUP'=>$jadwalUP,'jadwalDOWN'=>$jadwalDOWN,'teams'=>$team, 'data2'=>$data2]);
    }
    public function participants()

    {

        $participant = DB::table('users')
            ->join('teams', 'users.id_users', 'teams.id_users')
            ->where([
                    ['teams.pembayaran', '=', 1],
            ])
           ->get();

        return view('participants',['participant'=>$participant]);

    }

    public function detail_sekolah($id_teams)

    {


        $data = DB::table('users')
                // ->where('id_users',$id_users)
                ->first();


        $data2 = DB::table('teams')
                ->join('users','teams.id_users','users.id_users')
                ->where([
                    ['teams.id_teams', '=', $id_teams],
                    ['teams.pembayaran', '=', 1],
                ])
                ->first();


        $data3 = DB::table('players')
                ->join('teams','players.id_teams','teams.id_teams')
                ->where('players.id_teams',$id_teams)
                ->get();


        // return $data2;
        if(!empty($data2->id_teams)){
            return view('detail_sekolah',['data'=>$data, 'data2'=>$data2, 'data3'=>$data3]);
        }
            return abort(404);

    }
    public function getStr($string,$start,$end){
        $str = explode($start,$string);
        $str = explode($end,$str[1]);
        return $str[0];
    }
    
    public function check_nisn($nisn)
    {
        $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://nisn.data.kemdikbud.go.id/page/data?nisn='.$nisn);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
            
            $headers = array();
            $headers[] = 'Connection: keep-alive';
            $headers[] = 'Pragma: no-cache';
            $headers[] = 'Cache-Control: no-cache';
            $headers[] = 'Upgrade-Insecure-Requests: 1';
            $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36';
            $headers[] = 'Sec-Fetch-Mode: navigate';
            $headers[] = 'Sec-Fetch-User: ?1';
            $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
            $headers[] = 'Sec-Fetch-Site: none';
            $headers[] = 'Accept-Encoding: gzip, deflate, br';
            $headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
            $headers[] = 'Cookie: _ga=GA1.3.660601744.1569213866; ASP.NET_SessionId=vyvwod31mt14h3221avkkyqr';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            
            $name = $this->getStr($result,'<span id="contentCenter_lRes1Nama">','</span>');
            $lahir = $this->getStr($result,'<span id="contentCenter_lRes1TglLahir">','</span>');
            if(empty($name)){
                $data = array('status'=>'error');
            }else{
                $data = array('status'=>'success','name'=>$name,'lahir'=>$lahir);
            }
            
            return json_encode($data);
            curl_close($ch);
    }
    
    public function checker($id_teams,$nisn,$nama_players)
    {
                
        $data = DB::table('teams')
            ->join('users','teams.id_users','users.id_users')
            ->join('players','teams.id_teams','players.id_teams')
            ->where('teams.id_teams',$id_teams)
            ->first();
            
        $data_2 = DB::table('players')
                ->where([
                    'nisn'=>$nisn,
                    'nama_players'=>$nama_players,
                    ])
                ->first();
                
    if (!$data OR !$data_2) {
         return abort(404);
    }
        return view('admin.checkplayer',['data'=>$data, 'data2'=>$data_2]);
        
    }
    
    /*
    |--------------------------------------------------------------------------
    | Jadwal
    |--------------------------------------------------------------------------
    |
    | Manage Jadwal Pertandingan
    |
    */

    //tampil jadwal
    public function jadwal()
    {   
        $data = DB::table('jadwal')
                ->orderBy('tanggal', 'asc')
                ->orderBy('jam', 'asc')
                ->get();
        $team = DB::table('klasemen')
                ->get();
        
        return view('fixtures',['data'=>$data,'teams'=>$team]);
    }
    
    //tampil Hasil
    public function hasil()
    {   
        
        $data = DB::table('jadwal')
                ->get();
        $team = DB::table('klasemen')
                ->get();
        $hasil = DB::table('hasil_pertandingan')
                ->get();
        
        return view('result',[
                        'data'=>$data,
                        'hasil'=>$hasil,
                        'teams'=>$team,
                        ]);
    }
    public function get_top_goalkeeper(){
            $data = DB::table('hasil_pertandingan')->get();
            $u9_data = [];
            $u11_data = [];
            $u13_data = [];
    }
    public function get_top_score(){
            $data = DB::table('hasil_pertandingan')->get();
            $array = []; //U9 
            $array1 = []; //U11
            $array2 = []; //U13
            $no = 1;
            foreach($data as $d){
                $team1 = json_decode($d->score1);
                $team2 = json_decode($d->score2);
                // echo $no++ .'. ';
                // print_r($team1);
                if($team1 == NULL){
                    
                }else{
                    for($i = 0; $i < count($team1); $i++){
                        $data = DB::table('players')->where('id_players',$team1[$i])->first();
                        $teams = DB::table('teams')->where('id_teams',$data->id_teams)->first();
                        if($teams->u == "U9"){
                            array_push($array,$teams->nama_teams  .' - '.$data->nama_players);
                        }else if($teams->u == "U11"){
                            array_push($array1,$teams->nama_teams  .' - '.$data->nama_players);
                        }else if($teams->u == "U13"){
                                array_push($array2,$teams->nama_teams  .' - '.$data->nama_players);
                        }
                        
                    }
                }

                if($team2 == NULL){
                    
                }else{
 
                    for($i = 0; $i < count($team2); $i++){
                        $data = DB::table('players')->where('id_players',$team2[$i])->first();
                        $teams2 = DB::table('teams')->where('id_teams',$data->id_teams)->first();
                        if($teams2->u == "U9"){
                            array_push($array,$teams2->nama_teams  .' - '.$data->nama_players);
                        }else if($teams2->u == "U11"){
                            array_push($array1,$teams2->nama_teams  .' - '.$data->nama_players);
                        }else if($teams2->u == "U13"){
                                array_push($array2,$teams2->nama_teams  .' - '.$data->nama_players);
                                
                        }
                    }
                }
            }
            $array = array_count_values($array);
            arsort($array);
            $array_player = array_keys($array);
            $array1 = array_count_values($array1);
            arsort($array1);
            $array1_player = array_keys($array1);
            $array2 = array_count_values($array2);
            arsort($array2);
            $array2_player = array_keys($array2);
            
            // $poweranger_enemy = ['u9'=>$array,'u11'=>$array1,'u13'=>$array2];
            
            
            
        return view('test');
            // return view('tes',[
            //     'u9_score'=>$array,
            //     'u9_player'=>$array_player,
            //     'u11_score'=>$array1,
            //     'u11_player'=>$array1_player,
            //     'u13_score'=>$array2,
            //     'u13_player'=>$array2_player,]);
    }
    

}