<?php

namespace App\Http\Controllers;

use image;
use DB;
use File;
use Auth;

use Illuminate\Http\Request;

// model
use App\CreateTeam;
use App\CreateJadwal;
use App\CreateKlasemen;
use App\DataPlayer;
// use App\bidang_lomba;
use App\teams;
// use App\data_pendaftar;
use App\konfirmasi_payment;
use App\HasilPertandingan;
use App\Gallery;
// use App\Mail\Invoice;
// use App\partner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
        // $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }
    
    //register
    public function register()
    {
        return view('auth.register2');
    }

    public function create_team()
    {
        if(empty(Auth::user()->id_users)){
            return redirect('/01101100011011110111001001100101011011010111001001100101011001110110100101110011');
        }else{
        return view('user.create_team');
        }
    }
    public function insert_team(Request $request)
    {
              
        if($request->u == NULL){
            return back()->with('error','Harus isi!');
        }

        if($request->foto_teams){
        $this->validate($request,[
            'foto_teams'=>'image|mimes:jpg,jpeg,png',
        ]);
        


        $imageName_foto_teams = $request->nama_teams . '.' . $request['foto_teams']->getClientOriginalExtension();
        $request['foto_teams']->move(
        public_path('img/team/'), $imageName_foto_teams
        );

        // $imageName_foto_pelatih = $request->nama_pelatih . '.' . $request['foto_pelatih']->getClientOriginalExtension();
        // $request['foto_pelatih']->move(
        // public_path('img/pelatih/'), $imageName_foto_pelatih
        // );
        
        // $imageName_foto_asisten = $request->nama_asisten . '.' . $request['foto_asisten']->getClientOriginalExtension();
        // $request['foto_asisten']->move(
        // public_path('img/asisten/'), $imageName_foto_asisten
        // );
        
        // $imageName_foto_official = $request->nama_official . '.' . $request['foto_official']->getClientOriginalExtension();
        // $request['foto_official']->move(
        // public_path('img/official'), $imageName_foto_official
        // );
        $random = rand(1,999);
        $team = new CreateTeam;
        $team->id_users = Auth::user()->id_users;
        $team->kode_unik = $random;
        $team->kode_daftarulang = $this->random_string(10);
        $team->u = $request->u;
        $team->tgl_kadaluarsa = date('Y-m-d H:i:s', strtotime(' +3 day'));
        $team->foto_teams = $imageName_foto_teams;
        $team->nama_teams = $request->nama_teams;
        $team->no_hp = $request->no_hp;
        $team->foto_pelatih = "";
        $team->nama_pelatih = $request->nama_pelatih;
        $team->foto_asisten = "";
        $team->nama_asisten = $request->nama_asisten;
        $team->foto_official = "";
        $team->nama_official = $request->nama_official;
        $team->pembayaran = TRUE;
        $team->save();
        }else{
        $random = rand(1,999);
        $team = new CreateTeam;
        $team->id_users = Auth::user()->id_users;
        $team->kode_unik = $random;
        $team->kode_daftarulang = $this->random_string(10);
        $team->u = $request->u;
        $team->no_hp = $request->no_hp;
        $team->tgl_kadaluarsa = date('Y-m-d H:i:s', strtotime(' +3 day'));
        $team->foto_teams = "";
        $team->nama_teams = $request->nama_teams;
        $team->foto_pelatih = "";
        $team->nama_pelatih = $request->nama_pelatih;
        $team->foto_asisten = "";
        $team->nama_asisten = $request->nama_asisten;
        $team->foto_official = "";
        $team->nama_official = $request->nama_official;
        $team->pembayaran = TRUE;
        $team->save();
            
        }

        // $data = DB::table('teams')
        //         ->where('nama_teams',$request->nama_teams)
        //         ->first();

        return redirect('/user/dash/');
    }    
    
    
    public function create_team_admon()
    {
        if(Auth::user()->isAdmin == TRUE){
            
        $user = DB::table('users')
                ->where('isAdmin',0)
                ->get();
                
        return view('admin.create_team',['user'=>$user]);
        }else{
            return abort(404);
        }
    }
    public function insert_team_admon(Request $request)
    {
              
        if($request->u == NULL){
            return back()->with('error','Harus isi!');
        }
        if($request->id_users == NULL){
            return back()->with('error','Harus isi!');
        }

        if($request->foto_teams){
        $this->validate($request,[
            'foto_teams'=>'image|mimes:jpg,jpeg,png',
        ]);
        


        $imageName_foto_teams = $request->nama_teams . '.' . $request['foto_teams']->getClientOriginalExtension();
        $request['foto_teams']->move(
        public_path('img/team/'), $imageName_foto_teams
        );

        // $imageName_foto_pelatih = $request->nama_pelatih . '.' . $request['foto_pelatih']->getClientOriginalExtension();
        // $request['foto_pelatih']->move(
        // public_path('img/pelatih/'), $imageName_foto_pelatih
        // );
        
        // $imageName_foto_asisten = $request->nama_asisten . '.' . $request['foto_asisten']->getClientOriginalExtension();
        // $request['foto_asisten']->move(
        // public_path('img/asisten/'), $imageName_foto_asisten
        // );
        
        // $imageName_foto_official = $request->nama_official . '.' . $request['foto_official']->getClientOriginalExtension();
        // $request['foto_official']->move(
        // public_path('img/official'), $imageName_foto_official
        // );
        $random = rand(1,999);
        $team = new CreateTeam;
        $team->id_users = $request->id_users;
        $team->kode_unik = $random;
        $team->kode_daftarulang = $this->random_string(10);
        $team->u = $request->u;
        $team->tgl_kadaluarsa = date('Y-m-d H:i:s', strtotime(' +3 day'));
        $team->foto_teams = $imageName_foto_teams;
        $team->nama_teams = $request->nama_teams;
        $team->no_hp = $request->no_hp;
        $team->foto_pelatih = "";
        $team->nama_pelatih = $request->nama_pelatih;
        $team->foto_asisten = "";
        $team->nama_asisten = $request->nama_asisten;
        $team->foto_official = "";
        $team->nama_official = $request->nama_official;
        $team->pembayaran = TRUE;
        $team->save();
        }else{
        $random = rand(1,999);
        $team = new CreateTeam;
        $team->id_users = $request->id_users;
        $team->kode_unik = $random;
        $team->kode_daftarulang = $this->random_string(10);
        $team->u = $request->u;
        $team->no_hp = $request->no_hp;
        $team->tgl_kadaluarsa = date('Y-m-d H:i:s', strtotime(' +3 day'));
        $team->foto_teams = "";
        $team->nama_teams = $request->nama_teams;
        $team->foto_pelatih = "";
        $team->nama_pelatih = $request->nama_pelatih;
        $team->foto_asisten = "";
        $team->nama_asisten = $request->nama_asisten;
        $team->foto_official = "";
        $team->nama_official = $request->nama_official;
        $team->pembayaran = TRUE;
        $team->save();
            
        }

        // $data = DB::table('teams')
        //         ->where('nama_teams',$request->nama_teams)
        //         ->first();

        return redirect('/user/dash/');
    }    

    public function data_player($id_teams)
    {



        $data = DB::table('teams')
                ->where('id_teams',$id_teams)
                ->first();
        if(!empty($data)){
            if($data->id_users == Auth::user()->id_users OR Auth::user()->isAdmin == TRUE){
    
                $data2 = DB::table('players')
                        ->join('teams','players.id_teams','teams.id_teams')
                        ->where('players.id_teams',$id_teams)
                        ->get();
    
                return view('user.data_player',['data'=>$data, 'data2'=>$data2]);
            }
        }
        return abort(404);
    } 
    public function data_player2($id_teams)
    {


        $data = DB::table('teams')
                ->where('id_teams',$id_teams)
                ->first();

            $data2 = DB::table('players')
                    ->join('teams','players.id_teams','teams.id_teams')
                    ->where('players.id_teams',$id_teams)
                    ->get();

            return view('user.data_player',['data'=>$data, 'data2'=>$data2]);

    }
    
    public function admin_data_player2($id_teams)
    {


        $data = DB::table('teams')
                ->where('id_teams',$id_teams)
                ->first();

            $data2 = DB::table('players')
                    ->join('teams','players.id_teams','teams.id_teams')
                    ->where('players.id_teams',$id_teams)
                    ->get();

            return view('admin.data_player',['data'=>$data, 'data2'=>$data2]);

    }





    public function edit_data_player($id_player)
    {   
        $data = DB::table('players')
                ->where('id_players',$id_player)
                ->first();
                
        
        $data2 = DB::table('teams')
                ->where('id_teams',$data->id_teams)
                ->first();
                                
                
        return view('user.edit_data_player',['player'=>$data, 'data2'=>$data2]);
    }

    public function edit_player_action($id_players, Request $req)
    {
        // $p = DataPlayer::find($id_players);
        // dd($id_players);
        // $p->id_teams = $req->id_teams;
        // $p->foto_players = $req->foto_players;
        // $p->no_punggung = $req->no_punggung;
        // $p->tanggal_lahir = $req->tanggal_lahir;
        // $p->posisi = $req->posisi;
        // $p->nisn = $req->nisn;
        // $p->ibu = $req->nama_ibu;
        
        if($req->tanggal_lahir == NULL){
            return back()->with('error','Tanggal Lahir tidak boleh kosong!');
        }
        if($req->img){
            $image = $req->img;
            $name = $req->nama_players.'_' . time() . '.' . $image->getClientOriginalExtension();
            $lokasi = public_path('img/teams');
            $image->move($lokasi,$name);
            
        // $this->validate($req,[
        //     'nisn'=>'required|max:10'
        // ]);
            DB::table('players')->where('id_players',$req->id_player)->update([
                'id_teams' => $req->id_teams,   
                'nama_players' => $req->nama_players,   
                'foto_players' => $name,
                'no_punggung' => $req->no_punggung,
                'tanggal_lahir' => $req->tanggal_lahir,
                'posisi' => $req->posisi,
                'nisn' => $req->nisn,
                'tanggal_lahir' => $req->tanggal_lahir
            ]);
        }else{
            DB::table('players')->where('id_players',$req->id_player)->update([
                'id_teams' => $req->id_teams,
                'nama_players' => $req->nama_players, 
                'no_punggung' => $req->no_punggung,
                'tanggal_lahir' => $req->tanggal_lahir,
                'posisi' => $req->posisi,
                'nisn' => $req->nisn,
                'tanggal_lahir' => $req->tanggal_lahir
            ]);    
        }
        // if(Update()){
            return redirect('/user/data_player/'.$req->id_teams)->with('sukses','Berhasil Update!');
        // }

        // return redirect('/user/data_player/{id_teams}')->with('eror','Gagal update!');
    }
    
    public function admin_edit_data_player($id_player)
    {   
        $data = DB::table('players')
                ->where('id_players',$id_player)
                ->first();
                
        
        $data2 = DB::table('teams')
                ->where('id_teams',$data->id_teams)
                ->first();
                                
                
        return view('admin.edit_data_player',['player'=>$data, 'data2'=>$data2]);
    }

    public function admin_edit_player_action($id_players, Request $req)
    {
        // $p = DataPlayer::find($id_players);
        // dd($id_players);
        // $p->id_teams = $req->id_teams;
        // $p->foto_players = $req->foto_players;
        // $p->no_punggung = $req->no_punggung;
        // $p->tanggal_lahir = $req->tanggal_lahir;
        // $p->posisi = $req->posisi;
        // $p->nisn = $req->nisn;
        
        if($req->tanggal_lahir == NULL){
            return back()->with('error','Tanggal Lahir tidak boleh kosong!');
        }
        if($req->img){
            $image = $req->img;
            $name = $req->nama_players.'_' . time() . '.' . $image->getClientOriginalExtension();
            $lokasi = public_path('img/teams');
            $image->move($lokasi,$name);
            
        // $this->validate($req,[
        //     'nisn'=>'required|max:10'
        // ]);
            DB::table('players')->where('id_players',$req->id_player)->update([
                'id_teams' => $req->id_teams,   
                'nama_players' => $req->nama_players,   
                'foto_players' => $name,
                'no_punggung' => $req->no_punggung,
                'tanggal_lahir' => $req->tanggal_lahir,
                'posisi' => $req->posisi,
                'nisn' => $req->nisn,
                'tanggal_lahir' => $req->tanggal_lahir
            ]);
        }else{
            DB::table('players')->where('id_players',$req->id_player)->update([
                'id_teams' => $req->id_teams,
                'nama_players' => $req->nama_players, 
                'no_punggung' => $req->no_punggung,
                'tanggal_lahir' => $req->tanggal_lahir,
                'posisi' => $req->posisi,
                'nisn' => $req->nisn,
                'tanggal_lahir' => $req->tanggal_lahir
            ]);    
        }
        // if(Update()){
            return redirect('/admin/data_player/'.$req->id_teams)->with('sukses','Berhasil Update!');
        // }

        // return redirect('/user/data_player/{id_teams}')->with('eror','Gagal update!');
    }




    public function insert_data_player2($id_teams)
    {
        $data2 = DB::table('teams')
                ->where('id_teams',$id_teams)
                ->first();

        return view('admin.insertpemain',['player'=>$data2]);
    }
    public function insert_player2(Request $req)
    {
        $data = new DataPlayer;


        $this->validate($req,[
            'foto_players'=>'image|mimes:jpg,jpeg,png',
            'nisn'=>'required|max:10'
        ]);

        if($req->tanggal_lahir == NULL){
            return back()->with('error','Tanggal Lahir tidak boleh kosong!');
        }
        
        $imageName_foto_players = $req->nama_players . '.' . $req['foto_players']->getClientOriginalExtension();
        $req['foto_players']->move(
        public_path('img/teams'), $imageName_foto_players
        );

        $data->id_teams = $req->id_teams;
        $data->foto_players = $imageName_foto_players;
        $data->nama_players = $req->nama_players;
        $data->no_punggung = $req->no_punggung;
        $data->tanggal_lahir = $req->tanggal_lahir;
        $data->ibu = '-';
        $data->posisi = $req->posisi;
        $data->nisn = $req->nisn;
        
        if($data->save()){
            return redirect('/user/data_player/'.$data->id_teams);
        }
        // $data->save();

        // return view('user.insert_player',['player'=>$data2]);
    }

    public function insert_data_player($id_teams)
    {
        $data2 = DB::table('teams')
                ->where('id_teams',$id_teams)
                ->first();

        return view('user.insert_player',['player'=>$data2]);
    }
    public function insert_player(Request $req)
    {
        $data = new DataPlayer;


        $this->validate($req,[
            'foto_players'=>'image|mimes:jpg,jpeg,png',
            'nisn'=>'required|max:10'
        ]);

        if($req->tanggal_lahir == NULL){
            return back()->with('error','Tanggal Lahir tidak boleh kosong!');
        }
        
        $imageName_foto_players = $req->nama_players . '.' . $req['foto_players']->getClientOriginalExtension();
        $req['foto_players']->move(
        public_path('img/teams'), $imageName_foto_players
        );

        $data->id_teams = $req->id_teams;
        $data->foto_players = $imageName_foto_players;
        $data->nama_players = $req->nama_players;
        $data->no_punggung = $req->no_punggung;
        $data->tanggal_lahir = $req->tanggal_lahir;
        $data->ibu = '-';
        $data->posisi = $req->posisi;
        $data->nisn = $req->nisn;
        
        if($data->save()){
            return redirect('/user/data_player/'.$data->id_teams);
        }
        // $data->save();

        // return view('user.insert_player',['player'=>$data2]);
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
    public function getStr($string,$start,$end){
        $str = explode($start,$string);
        $str = explode($end,$str[1]);
        return $str[0];
    }

    public function dash_user()
    {
        $data = DB::table('teams')
                ->join('users','teams.id_users','users.id_users')
                ->where('teams.id_users',Auth::user()->id_users)
                ->get();

        $data2 = DB::table('konfirmasi_payment')
                ->get();
                
        $data3 = DB::table('players')
                ->get();


        return view('user.index',['user_data'=>$data, 'data3'=>$data3, 'data2'=>$data2]);
    }

    public function jum_bayar($id_pembayaran)
    {
        $data = DB::table('users')
                ->join('teams','users.id_users','teams.id_users')
                ->where([
                    ['teams.id_teams','=',$id_pembayaran],
                    ['teams.pembayaran','=',0],
                ])
                ->get();
        if(count($data) > 0){
            $output_data =DB::table('users')
                    ->join('teams','users.id_users','teams.id_users')
                    ->where([['teams.id_teams','=',$id_pembayaran]])
                    ->first();

            return view('user.payment',['payment'=>$output_data],['datas'=>$data]);
            // return $output_data;
            dd($output_data);
        }
        return abort(404);
        //dd($output_data);
    }


    public function upload_bukti(Request $req)
    {
        $this->validate($req,[
            'img'=>'image|mimes:jpg,jpeg,png',
        ]);

        $data = DB::table('konfirmasi_payment')->where('id_teams',$req->id_teams)->get();

        if(count($data) > 0){
            return back()->with('sukses','Anda telah mengupload bukti pembayaran! Silahkan tunggu 1x24 jam atau hubungi admin!');
        }

        $new = new konfirmasi_payment;
        $new->id_payment = $req->id_payment;
        $new->id_teams = $req->id_teams;
        $new->pengirim = $req->pengirim;

        $image = $req->img;
        $name = $req->id_users .'.'.$image->getClientOriginalExtension();
        $lokasi = public_path('img/butki');
        if($image->move($lokasi,$name)){
            $new->bukti = $name;
            if($new->save()){
                return back()->with('sukses','Berhail mengupload bukti, Silahkan tunggu 1x24 jam atau hubungi admin!');
            }
        }
        return back()->with('eror','Gagal mengupload bukti! Silahkan coba beberapa saat lagi');
    }

    public function random_string($n)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
    }

    //konfirmasi payment oleh admin
    public function confirm_page()
    {
        $data = DB::table('konfirmasi_payment')
                ->where([
                    'konfirmasi_payment.status'=>'uncheck',
                    'teams.pembayaran'=>0,
                ])
                ->join('teams','konfirmasi_payment.id_teams','teams.id_teams')
                // ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->join('users','teams.id_users','users.id_users')
                ->get();
        $data_2 = DB::table('teams')
                ->where([
                    'teams.pembayaran'=>0,
                ])
                ->join('users','teams.id_users','users.id_users')
                ->get();
        return view('admin.confirm_page',['prioritas'=>$data,'non'=>$data_2]);
    }

    public function confirm_action($id_payment,$id_teams,$status)
    {
        $konfirmasi_payment = konfirmasi_payment::find($id_payment);
        $konfirmasi_payment->status = $status;

        $data = DB::table('teams')
                ->where('teams.id_teams',$id_teams)
                // ->join('bidang_lomba','pendaftaran.id_bidang_lomba','bidang_lomba.id_bidang_lomba')
                ->join('users','teams.id_users','users.id_users')
                ->first();

        $teams = teams::find($id_teams);
        if($status == 'valid'){
            $teams->pembayaran = TRUE;

            // Mail::to($data->email)->send(new Invoice($data));
        }else{
            $teams->pembayaran = FALSE;
        }
      
        if($konfirmasi_payment->save()){
            if($teams->save()){
                return back()->with('sukses', 'Berhasil Melakukan Feedback!');
            }
        }

        return back();
    }


    public function tampilpeserta()
    {
        $data = DB::table('users')
                ->join('teams','users.id_users','teams.id_users')
                // ->join('konfirmasi_payment','teams.id_teams','konfirmasi_payment.id_teams')
                ->where(['teams.pembayaran'=>1])
                ->get();

        $data2 = DB::table('users')
                ->join('teams','users.id_users','teams.id_users')
                // ->join('konfirmasi_payment','teams.id_teams','konfirmasi_payment.id_teams')
                ->where(['teams.pembayaran'=>0])
                ->get();

        return view('admin.peserta',['user_data'=>$data],['user_data2'=>$data2]);
    }

    public function dash_admin()
    {   
        $data = DB::table('teams')
                // ->join('teams','users.id_users','teams.id_users')
                // ->where('users.id_users',Auth::user()->id_users)
                ->get();

        $data3 = DB::table('players')
                ->get();

        

        return view('admin.input_peserta',['user_data'=>$data,  'data3'=>$data3]);    
    }
    
    public function cetak()
    {
        
        $data = DB::table('players')
                ->join('teams','players.id_teams','teams.id_teams')
                ->get();
        
        // $array = [];
        // $i = 1;
        // foreach($data as $d){
        //     $cek_ya = json_decode($this->check_nisn($d->nisn));
            
        //     if($cek_ya->name == $d->nama_players){
        //         $array[$i] = 'VALID';
        //     }else{
        //         $array[$i] = 'TIDAK VALID';
        //     }
        //     $i++;
        // }
        $pdf = \PDF::loadView('print_power',['data'=>$data]);
        return $pdf->download('powerranger.pdf');
    }
    public function reregis($id_teams)
    {
        $data = DB::table('teams')
            ->join('users','teams.id_users','users.id_users')
            ->where('teams.id_teams',$id_teams)
            ->first();
        
        $data_2 = DB::table('players')
                ->where('id_teams',$id_teams)
                ->get();
                
        // dd($data);
        // echo 'gua';
        // $array = [];
        // $no = 0;
        // foreach($data_2 as $d){
        //     $data = json_decode($this->check_nisn($d->nisn));
        //     // echo $data;
        //     // print_r($data);
        //     // if($data)
        
        //     // echo $data->status;
            
        //     if($data->status == "success"){
        //         $array[$no] = "VALID";
        //     }else{
        //         $array[$no] = "TIDAK VALID";
        //     }
        //     $no++;
        // }
        $pdf = \PDF::loadView('print_test',['data'=>$data,'data2'=>$data_2]);
        $pdf->getDomPDF()->set_option("enable_php", true);
        return $pdf->download('daftar_ulang.pdf');
    }


    public function edit_team($id_teams)
    {   
        $data2 = DB::table('teams')
                ->where('id_teams',$id_teams)
                ->first();
        // return view('user.edit_team',['data'=>$data]);
        
        if(!empty($data2)){
            if($data2->id_users == Auth::user()->id_users OR Auth::user()->isAdmin == 1){
    
                $data = DB::table('teams')
                    ->where('id_teams',$id_teams)
                    ->first();
    
               return view('user.edit_team',['data'=>$data]);
            }
        }

        return abort(404);
    }

    public function update_team($id_teams, Request $req)
    {
        // $p = DataPlayer::find($id_players);
        // dd($id_players);
        // $p->id_teams = $req->id_teams;
        // $p->foto_players = $req->foto_players;
        // $p->no_punggung = $req->no_punggung;
        // $p->tanggal_lahir = $req->tanggal_lahir;
        // $p->posisi = $req->posisi;
        // $p->nisn = $req->nisn;

        // return $req;
        $this->validate($req,[
            'foto_teams'=>'image|mimes:jpg,jpeg,png',
            'foto_pelatih'=>'image|mimes:jpg,jpeg,png',
            'foto_asisten'=>'image|mimes:jpg,jpeg,png',
            'foto_official'=>'image|mimes:jpg,jpeg,png',
        ]);


  

        $data = DB::table('teams')
                ->where('id_teams', $req->id_teams)
                ->first();
        //1
        if($req->foto_teams != null && $req->foto_pelatih != null && $req->foto_asisten != null && $req->foto_official != null){

          $imageName_foto_teams = $req->nama_teams . '_' . time() . '.' . $req['foto_teams']->getClientOriginalExtension();
            $foto_team = $req['foto_teams']->move(
            public_path('img/team/'), $imageName_foto_teams
            );

            $imageName_foto_pelatih = $req->nama_pelatih . '_' . time() . '.' . $req['foto_pelatih']->getClientOriginalExtension();
                $foto_pelatih = $req['foto_pelatih']->move(
                public_path('img/pelatih/'), $imageName_foto_pelatih
            );

            $imageName_foto_asisten = $req->nama_asisten . '_' . time() . '.' . $req['foto_asisten']->getClientOriginalExtension();
            $foto_asisten = $req['foto_asisten']->move(
            public_path('img/asisten/'), $imageName_foto_asisten
            );
            
            $imageName_foto_official = $req->nama_official  . '_' . time() . '.' . $req['foto_official']->getClientOriginalExtension();
            $foto_official = $req['foto_official']->move(
            public_path('img/official'), $imageName_foto_official
            );

            DB::table('teams')
            ->where('id_teams',$req->id_teams)
            ->update([
                    'id_teams' => $req->id_teams,   
                    'foto_teams' => $imageName_foto_teams,   
                    'nama_teams' => $req->nama_teams,
                    'no_hp' => $req->no_hp,
                    'foto_pelatih' => $imageName_foto_pelatih,
                    'nama_pelatih' => $req->nama_pelatih,
                    'foto_asisten' => $imageName_foto_asisten,
                    'nama_asisten' => $req->nama_asisten,
                    'foto_official' => $imageName_foto_official,
                    'nama_official' => $req->nama_official//,
                    //'u' => $req->u
                ]);
        }//2
        else if ($req->foto_pelatih != null && $req->foto_asisten != null && $req->foto_official != null) {

            $imageName_foto_pelatih = $req->nama_pelatih  . '_' . time() . '.' . $req['foto_pelatih']->getClientOriginalExtension();
                $foto_pelatih = $req['foto_pelatih']->move(
                public_path('img/pelatih/'), $imageName_foto_pelatih
            );

            $imageName_foto_asisten = $req->nama_asisten  . '_' . time() . '.' . $req['foto_asisten']->getClientOriginalExtension();
            $foto_asisten = $req['foto_asisten']->move(
            public_path('img/asisten/'), $imageName_foto_asisten
            );
            
            $imageName_foto_official = $req->nama_official  . '_' . time() . '.' . $req['foto_official']->getClientOriginalExtension();
            $foto_official = $req['foto_official']->move(
            public_path('img/official'), $imageName_foto_official
            );

            DB::table('teams')
            ->where('id_teams',$req->id_teams)
            ->update([
                    'id_teams' => $req->id_teams,   
                    'foto_teams' => $data->foto_teams,   
                    'nama_teams' => $req->nama_teams,
                    'no_hp' => $req->no_hp,
                    'foto_pelatih' => $imageName_foto_pelatih,
                    'nama_pelatih' => $req->nama_pelatih,
                    'foto_asisten' => $imageName_foto_asisten,
                    'nama_asisten' => $req->nama_asisten,
                    'foto_official' => $imageName_foto_official,
                    'nama_official' => $req->nama_official//,
                    //'u' => $req->u
                ]);
        }//3        
        else if ($req->foto_teams != null && $req->foto_asisten != null && $req->foto_official != null) {

                    $imageName_foto_teams = $req->nama_teams  . '_' . time() . '.' . $req['foto_teams']->getClientOriginalExtension();
                        $foto_teams = $req['foto_teams']->move(
                        public_path('img/team/'), $imageName_foto_teams
                    );

                    $imageName_foto_asisten = $req->nama_asisten  . '_' . time() . '.' . $req['foto_asisten']->getClientOriginalExtension();
                    $foto_asisten = $req['foto_asisten']->move(
                    public_path('img/asisten/'), $imageName_foto_asisten
                    );
                    
                    $imageName_foto_official = $req->nama_official  . '_' . time() . '.' . $req['foto_official']->getClientOriginalExtension();
                    $foto_official = $req['foto_official']->move(
                    public_path('img/official'), $imageName_foto_official
                    );

                    DB::table('teams')
                    ->where('id_teams',$req->id_teams)
                    ->update([
                            'id_teams' => $req->id_teams,   
                            'foto_teams' => $imageName_foto_teams,   
                            'nama_teams' => $req->nama_teams,
                            'no_hp' => $req->no_hp,
                            'foto_pelatih' => $data->foto_pelatih,
                            'nama_pelatih' => $req->nama_pelatih,
                            'foto_asisten' => $imageName_foto_asisten,
                            'nama_asisten' => $req->nama_asisten,
                            'foto_official' => $imageName_foto_official,
                            'nama_official' => $req->nama_official//,
                            //'u' => $req->u
                        ]);
        }//4
        else if ($req->foto_teams != null && $req->foto_pelatih != null && $req->foto_official != null) {

                    $imageName_foto_teams = $req->nama_teams  . '_' . time() . '.' . $req['foto_teams']->getClientOriginalExtension();
                        $foto_teams = $req['foto_teams']->move(
                        public_path('img/team/'), $imageName_foto_teams
                    );

                    $imageName_foto_pelatih = $req->nama_pelatih  . '_' . time() . '.' . $req['foto_pelatih']->getClientOriginalExtension();
                    $foto_pelatih = $req['foto_pelatih']->move(
                    public_path('img/pelatih/'), $imageName_foto_pelatih
                    );
                    
                    $imageName_foto_official = $req->nama_official  . '_' . time() . '.' . $req['foto_official']->getClientOriginalExtension();
                    $foto_official = $req['foto_official']->move(
                    public_path('img/official'), $imageName_foto_official
                    );

                    DB::table('teams')
                    ->where('id_teams',$req->id_teams)
                    ->update([
                            'id_teams' => $req->id_teams,   
                            'foto_teams' => $imageName_foto_teams,   
                            'nama_teams' => $req->nama_teams,
                            'no_hp' => $req->no_hp,
                            'foto_pelatih' => $imageName_foto_pelatih,
                            'nama_pelatih' => $req->nama_pelatih,
                            'foto_asisten' => $data->foto_asisten,
                            'nama_asisten' => $req->nama_asisten,
                            'foto_official' => $imageName_foto_official,
                            'nama_official' => $req->nama_official//,
                            //'u' => $req->u
                        ]);
        }//5
        else if ($req->foto_teams != null && $req->foto_pelatih != null && $req->foto_asisten != null) {

                    $imageName_foto_teams = $req->nama_teams  . '_' . time() . '.' . $req['foto_teams']->getClientOriginalExtension();
                        $foto_teams = $req['foto_teams']->move(
                        public_path('img/team/'), $imageName_foto_teams
                    );

                    $imageName_foto_pelatih = $req->nama_pelatih  . '_' . time() . '.' . $req['foto_pelatih']->getClientOriginalExtension();
                    $foto_pelatih = $req['foto_pelatih']->move(
                    public_path('img/pelatih/'), $imageName_foto_pelatih
                    );
                    
                    $imageName_foto_asisten = $req->nama_asisten  . '_' . time() . '.' . $req['foto_asisten']->getClientOriginalExtension();
                    $foto_asisten = $req['foto_asisten']->move(
                    public_path('img/asisten'), $imageName_foto_asisten
                    );

                    DB::table('teams')
                    ->where('id_teams',$req->id_teams)
                    ->update([
                            'id_teams' => $req->id_teams,   
                            'foto_teams' => $imageName_foto_teams,   
                            'nama_teams' => $req->nama_teams,
                            'no_hp' => $req->no_hp,
                            'foto_pelatih' => $imageName_foto_pelatih,
                            'nama_pelatih' => $req->imageName_foto_pelatih,
                            'foto_asisten' => $imageName_foto_asisten,
                            'nama_asisten' => $req->nama_asisten,
                            'foto_official' => $data->foto_official,
                            'nama_official' => $req->nama_official//,
                            //'u' => $req->u
                        ]);
        }//6
        else if ($req->foto_teams != null && $req->foto_pelatih != null) {

                    $imageName_foto_teams = $req->nama_teams  . '_' . time() . '.' . $req['foto_teams']->getClientOriginalExtension();
                        $foto_teams = $req['foto_teams']->move(
                        public_path('img/team/'), $imageName_foto_teams
                    );

                    $imageName_foto_pelatih = $req->nama_pelatih  . '_' . time() . '.' . $req['foto_pelatih']->getClientOriginalExtension();
                    $foto_pelatih = $req['foto_pelatih']->move(
                    public_path('img/pelatih/'), $imageName_foto_pelatih
                    );

                    DB::table('teams')
                    ->where('id_teams',$req->id_teams)
                    ->update([
                            'id_teams' => $req->id_teams,   
                            'foto_teams' => $imageName_foto_teams,   
                            'nama_teams' => $req->nama_teams,
                            'no_hp' => $req->no_hp,
                            'foto_pelatih' => $imageName_foto_teams,
                            'nama_pelatih' => $req->nama_pelatih,
                            'foto_asisten' => $data->foto_asisten,
                            'nama_asisten' => $req->nama_asisten,
                            'foto_official' => $data->foto_official,
                            'nama_official' => $req->nama_official//,
                            //'u' => $req->u
                        ]);
        }//7
        else if ($req->foto_teams != null && $req->foto_asisten != null) {

                    $imageName_foto_teams = $req->nama_teams  . '_' . time() . '.' . $req['foto_teams']->getClientOriginalExtension();
                        $foto_teams = $req['foto_teams']->move(
                        public_path('img/team/'), $imageName_foto_teams
                    );

                    $imageName_foto_asisten = $req->nama_asisten  . '_' . time() . '.' . $req['foto_asisten']->getClientOriginalExtension();
                    $foto_asisten = $req['foto_asisten']->move(
                    public_path('img/asisten/'), $imageName_foto_asisten
                    );

                    DB::table('teams')
                    ->where('id_teams',$req->id_teams)
                    ->update([
                            'id_teams' => $req->id_teams,   
                            'foto_teams' => $imageName_foto_teams,   
                            'nama_teams' => $req->nama_teams,
                            'no_hp' => $req->no_hp,
                            'foto_pelatih' => $data->foto_pelatih,
                            'nama_pelatih' => $req->nama_pelatih,
                            'foto_asisten' => $imageName_foto_asisten,
                            'nama_asisten' => $req->nama_asisten,
                            'foto_official' => $data->foto_official,
                            'nama_official' => $req->nama_official//,
                            //'u' => $req->u
                        ]);
        }//8
        else if ($req->foto_teams != null && $req->foto_official != null) {

                    $imageName_foto_teams = $req->nama_teams  . '_' . time() . '.' . $req['foto_teams']->getClientOriginalExtension();
                        $foto_teams = $req['foto_teams']->move(
                        public_path('img/team/'), $imageName_foto_teams
                    );

                    $imageName_foto_official = $req->nama_official  . '_' . time() . '.' . $req['foto_official']->getClientOriginalExtension();
                    $foto_official = $req['foto_official']->move(
                    public_path('img/official/'), $imageName_foto_official
                    );

                    DB::table('teams')
                    ->where('id_teams',$req->id_teams)
                    ->update([
                            'id_teams' => $req->id_teams,   
                            'foto_teams' => $imageName_foto_teams,   
                            'nama_teams' => $req->nama_teams,
                            'no_hp' => $req->no_hp,
                            'foto_pelatih' => $data->foto_pelatih,
                            'nama_pelatih' => $req->nama_pelatih,
                            'foto_asisten' => $data->foto_asisten,
                            'nama_asisten' => $req->nama_asisten,
                            'foto_official' => $imageName_foto_official,
                            'nama_official' => $req->nama_official//,
                            //'u' => $req->u
                        ]);
        }//9
        else if ($req->foto_pelatih != null && $req->foto_asisten != null) {

                    $imageName_foto_pelatih = $req->nama_pelatih  . '_' . time() . '.' . $req['foto_pelatih']->getClientOriginalExtension();
                        $foto_pelatih = $req['foto_pelatih']->move(
                        public_path('img/pelatih/'), $imageName_foto_pelatih
                    );

                    $imageName_foto_asisten = $req->nama_asisten  . '_' . time() . '.' . $req['foto_asisten']->getClientOriginalExtension();
                    $foto_asisten = $req['foto_asisten']->move(
                    public_path('img/asisten/'), $imageName_foto_asisten
                    );

                    DB::table('teams')
                    ->where('id_teams',$req->id_teams)
                    ->update([
                            'id_teams' => $req->id_teams,   
                            'foto_teams' => $data->foto_teams,   
                            'nama_teams' => $req->nama_teams,
                            'no_hp' => $req->no_hp,
                            'foto_pelatih' => $imageName_foto_pelatih,
                            'nama_pelatih' => $req->nama_pelatih,
                            'foto_asisten' => $imageName_foto_asisten,
                            'nama_asisten' => $req->nama_asisten,
                            'foto_official' => $data->foto_official,
                            'nama_official' => $req->nama_official//,
                            //'u' => $req->u
                        ]);
        }//10
        else if ($req->foto_pelatih != null && $req->foto_official != null) {

                    $imageName_foto_pelatih = $req->nama_pelatih  . '_' . time() . '.' . $req['foto_pelatih']->getClientOriginalExtension();
                        $foto_pelatih = $req['foto_pelatih']->move(
                        public_path('img/pelatih/'), $imageName_foto_pelatih
                    );

                    $imageName_foto_official = $req->nama_official  . '_' . time() . '.' . $req['foto_official']->getClientOriginalExtension();
                    $foto_official = $req['foto_official']->move(
                    public_path('img/official/'), $imageName_foto_official
                    );

                    DB::table('teams')
                    ->where('id_teams',$req->id_teams)
                    ->update([
                            'id_teams' => $req->id_teams,   
                            'foto_teams' => $data->foto_teams,   
                            'nama_teams' => $req->nama_teams,
                            'no_hp' => $req->no_hp,
                            'foto_pelatih' => $imageName_foto_pelatih,
                            'nama_pelatih' => $req->nama_pelatih,
                            'foto_asisten' => $data->foto_asisten,
                            'nama_asisten' => $req->nama_asisten,
                            'foto_official' => $imageName_foto_official,
                            'nama_official' => $req->nama_official//,
                            //'u' => $req->u
                        ]);
        }//11
        else if ($req->foto_asisten != null && $req->foto_official != null) {

                    $imageName_foto_asisten = $req->nama_asisten  . '_' . time() . '.' . $req['foto_asisten']->getClientOriginalExtension();
                        $foto_asisten = $req['foto_asisten']->move(
                        public_path('img/asisten/'), $imageName_foto_asisten
                    );

                    $imageName_foto_official = $req->nama_official  . '_' . time() . '.' . $req['foto_official']->getClientOriginalExtension();
                    $foto_official = $req['foto_official']->move(
                    public_path('img/official/'), $imageName_foto_official
                    );

                    DB::table('teams')
                    ->where('id_teams',$req->id_teams)
                    ->update([
                            'id_teams' => $req->id_teams,   
                            'foto_teams' => $data->foto_teams,   
                            'nama_teams' => $req->nama_teams,
                            'no_hp' => $req->no_hp,
                            'foto_pelatih' => $data->foto_pelatih,
                            'nama_pelatih' => $req->nama_pelatih,
                            'foto_asisten' => $imageName_foto_asisten,
                            'nama_asisten' => $req->nama_asisten,
                            'foto_official' => $imageName_foto_official,
                            'nama_official' => $req->nama_official//,
                            //'u' => $req->u
                        ]);
        }//12
        else if ($req->foto_teams != null) {
            $imageName_foto_teams = $req->nama_teams  . '_' . time() . '.' . $req['foto_teams']->getClientOriginalExtension();
            $foto_team = $req['foto_teams']->move(
            public_path('img/team/'), $imageName_foto_teams
            );
            DB::table('teams')
            ->where('id_teams',$req->id_teams)
            ->update([
                    'id_teams' => $req->id_teams,   
                    'foto_teams' => $imageName_foto_teams,   
                    'nama_teams' => $req->nama_teams,
                    'no_hp' => $req->no_hp,
                    'foto_pelatih' => $data->foto_pelatih,
                    'nama_pelatih' => $req->nama_pelatih,
                    'foto_asisten' => $data->foto_asisten,
                    'nama_asisten' => $req->nama_asisten,
                    'foto_official' => $data->foto_official,
                    'nama_official' => $req->nama_official//,
                    //'u' => $req->u
                ]);
        }//13
        else if ($req->foto_pelatih != null){

            $imageName_foto_pelatih = $req->nama_pelatih  . '_' . time() . '.' . $req['foto_pelatih']->getClientOriginalExtension();
            $foto_pelatih = $req['foto_pelatih']->move(
            public_path('img/pelatih/'), $imageName_foto_pelatih
            );
            
            DB::table('teams')
            ->where('id_teams',$req->id_teams)
            ->update([
                    'id_teams' => $req->id_teams,   
                    'foto_teams' => $data->foto_teams,   
                    'nama_teams' => $req->nama_teams,
                    'no_hp' => $req->no_hp,
                    'foto_pelatih' => $imageName_foto_pelatih,
                    'nama_pelatih' => $req->nama_pelatih,
                    'foto_asisten' => $data->foto_asisten,
                    'nama_asisten' => $req->nama_asisten,
                    'foto_official' => $data->foto_official,
                    'nama_official' => $req->nama_official//,
                    //'u' => $req->u
                ]);
        }//14
        else if ($req->foto_asisten != null){

            $imageName_foto_asisten = $req->nama_asisten  . '_' . time() . '.' . $req['foto_asisten']->getClientOriginalExtension();
            $foto_asisten = $req['foto_asisten']->move(
            public_path('img/asisten/'), $imageName_foto_asisten
            );
            
            DB::table('teams')
            ->where('id_teams',$req->id_teams)
            ->update([
                    'id_teams' => $req->id_teams,   
                    'foto_teams' => $data->foto_teams,   
                    'nama_teams' => $req->nama_teams,
                    'no_hp' => $req->no_hp,
                    'foto_pelatih' => $data->foto_pelatih,
                    'nama_pelatih' => $req->nama_pelatih,
                    'foto_asisten' => $imageName_foto_asisten,
                    'nama_asisten' => $req->nama_asisten,
                    'foto_official' => $data->foto_official,
                    'nama_official' => $req->nama_official//,
                    //'u' => $req->u
                ]);
        }//15
        else if ($req->foto_official != null){

            $imageName_foto_official = $req->nama_official  . '_' . time() . '.' . $req['foto_official']->getClientOriginalExtension();
            $foto_official = $req['foto_official']->move(
            public_path('img/official/'), $imageName_foto_official
            );
            
            DB::table('teams')
            ->where('id_teams',$req->id_teams)
            ->update([
                    'id_teams' => $req->id_teams,   
                    'foto_teams' => $data->foto_teams,   
                    'nama_teams' => $req->nama_teams,
                    'no_hp' => $req->no_hp,
                    'foto_pelatih' => $data->foto_pelatih,
                    'nama_pelatih' => $req->nama_pelatih,
                    'foto_asisten' => $data->foto_asisten,
                    'nama_asisten' => $req->nama_asisten,
                    'foto_official' => $imageName_foto_official,
                    'nama_official' => $req->nama_official//,
                    //'u' => $req->u
                ]);
        }
        else{
            
            DB::table('teams')
            ->where('id_teams',$req->id_teams)
            ->update([
                    'id_teams' => $req->id_teams,   
                    'foto_teams' => $data->foto_teams,   
                    'nama_teams' => $req->nama_teams,
                    'no_hp' => $req->no_hp,
                    'foto_pelatih' => $data->foto_pelatih,
                    'nama_pelatih' => $req->nama_pelatih,
                    'foto_asisten' => $data->foto_asisten,
                    'nama_asisten' => $req->nama_asisten,
                    'foto_official' => $data->foto_official,
                    'nama_official' => $req->nama_official//,
                    //'u' => $req->u
                ]);
        }
        // else if($req->foto_teams == null OR $req->foto_pelatih == null OR $req->foto_asisten == null OR $req->foto_official == null){

        //     DB::table('teams')
        //     ->where('id_teams',$req->id_teams)
        //     ->update([
        //             'id_teams' => $req->id_teams,   
        //             'foto_teams' => $data->foto_teams,   
        //             'nama_teams' => $req->nama_teams,
        //             'foto_pelatih' => $data->foto_pelatih,
        //             'nama_pelatih' => $req->nama_pelatih,
        //             'foto_asisten' => $data->foto_asisten,
        //             'nama_asisten' => $req->nama_asisten,
        //             'foto_official' => $data->foto_official,
        //             'nama_official' => $req->nama_official,
        //             'u' => $req->u
        //         ]);
        // }


        return redirect('/user/dash/');

        // $data = DB::table('teams')
        //         ->where('nama_teams',$req->nama_teams)
        //         ->first();

        // if($req->img){
        //     $image = $req->img;
        //     $name = $req->nama_players.'.'. $image->getClientOriginalExtension();
        //     $lokasi = public_path('img/teams');
        //     $image->move($lokasi,$name);
            
        //     DB::table('players')->where('id_players',$req->id_player)->update([
        //         'id_teams' => $req->id_teams,   
        //         'nama_players' => $req->nama_players,   
        //         'foto_players' => $name,
        //         'no_punggung' => $req->no_punggung,
        //         'tanggal_lahir' => $req->tanggal_lahir,
        //         'posisi' => $req->posisi,
        //         'nisn' => $req->nisn,
        //         'tanggal_lahir' => $req->tanggal_lahir
        //     ]);
        // }else{
        //     DB::table('players')->where('id_players',$req->id_player)->update([
        //         'id_teams' => $req->id_teams,
        //         'nama_players' => $req->nama_players, 
        //         'no_punggung' => $req->no_punggung,
        //         'tanggal_lahir' => $req->tanggal_lahir,
        //         'posisi' => $req->posisi,
        //         'nisn' => $req->nisn,
        //         'tanggal_lahir' => $req->tanggal_lahir
        //     ]);    
        // }
        // if(Update()){
            // return redirect('/user/data_player/'.$req->id_teams)->with('sukses','Berhasil Update!');
        // }

        // return redirect('/user/data_player/{id_teams}')->with('eror','Gagal update!');
    }



    /*
    |--------------------------------------------------------------------------
    | Klasemen
    |--------------------------------------------------------------------------
    |
    | Manage Klasemen Pertandingan
    |
    */

    //tampil klasemen
    public function klasemen()
    {   
        $data = DB::table('klasemen')
                ->orderBy('poin', 'desc')
                ->orderBy('sg', 'desc')
                ->get();
        return view('admin.klasemen',['data'=>$data]);
    }

    //tampil input
    public function inputklasemen()
    {
        $data = DB::table('teams')
                ->orderBy('nama_teams', 'asc')
                ->get();
        return view('admin.input_klasemen',['data'=>$data]);
    }

    //input action
    public function inputklasemen_action(Request $req)
    {   
        $validatedData = $req->validate([
            'nama_teams' => 'required|max:255',
            'grup' => 'required',
        ]);
        //klasemen
        $team = DB::table('teams')
                ->where('nama_teams',$req->nama_teams)
                ->first();

        $cek = DB::table('klasemen')
                ->where('nama_teams',$req->nama_teams)
                ->first();  
            if ($cek) {
                 return redirect('/admin/klasemen')->with('eror','Team sudah ada!');
            }
                if ($team) {
                
                    $klasemen = new CreateKlasemen;

                    $klasemen->id_teams = $team->id_teams;
                    $klasemen->nama_teams = $team->nama_teams;
                    $klasemen->u = $team->u;
                    $klasemen->grup = $req->grup;
                    // $klasemen->save();
                    if ($klasemen->save()) {
                        return redirect('/admin/klasemen')->with('sukses','Berhasil Menambah data!');
                    }
                    return redirect('/admin/klasemen')->with('eror','Gagal Menambah data!');
                }
                // return redirect('/admin/klasemen')->with('eror','Gagal Menambah data!');
                return redirect('/admin/klasemen')->with('eror','Gagal Menambah data!');

    }

    //------------ tampil update ------------
    public function updateklasemen($id_klasemen)
    {   
        $data = DB::table('klasemen')
                ->where('id_klasemen',$id_klasemen)
                ->first();
        return view('admin.update_klasemen',['data'=>$data]);
    }
    
    //------------ update action ------------
    public function updateklasemen_action($id_klasemen, Request $req)
    {
        $validatedData = $req->validate([
            'main' => 'required|numeric',
            'menang' => 'required|numeric',
            'seri' => 'required|numeric',
            'kalah' => 'required|numeric',
            'gm' => 'required|numeric',
            'gk' => 'required|numeric',
            'sg' => 'required|numeric',
            'poin' => 'required|numeric',
        ]);

        $update = DB::table('klasemen')->where('id_klasemen',$id_klasemen)->update([   
                'main' => $req->main,   
                'menang' => $req->menang,   
                'seri' => $req->seri,
                'kalah' => $req->kalah,
                'gm' => $req->gm,
                'gk' => $req->gk,
                'sg' => $req->sg,
                'poin' => $req->poin
            ]);
        if ($update) {
            return redirect('/admin/klasemen/')->with('upsukses','Berhasil Update!');
        }
       return redirect('/admin/klasemen/')->with('uperor','Gagal Update!');
    }

    //------------ tampil edit ------------
    public function editklasemen($id_klasemen)
    {   
        $team = DB::table('teams')->get();

        $data = DB::table('klasemen')
                ->where('id_klasemen',$id_klasemen)
                ->first();
        return view('admin.edit_klasemen',['data'=>$data,'team'=>$team]);
    }
    
    //------------ edit action ------------
    public function editklasemen_action($id_klasemen, Request $req)
    {
        
        $update = DB::table('klasemen')->where('id_klasemen',$id_klasemen)->update([   
                // 'nama_teams' => $req->nama_teams,   
                'grup' => $req->grup
            ]);
        if ($update) {
            return redirect('/admin/klasemen/')->with('upsukses','Berhasil Update!');
        }
       return redirect('/admin/klasemen/')->with('uperor','Update Gagal!');
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
        
        return view('admin.jadwal',['data'=>$data,'teams'=>$team]);
    }

    //tampil input
    public function inputjadwal()
    {
        $data = DB::table('teams')
                ->orderBy('nama_teams', 'asc')
                ->get();
        return view('admin.input_jadwal',['data'=>$data]);
    }

    //input action
    public function inputjadwal_action(Request $req)
    {   
        $validatedData = $req->validate([
            'nama_teams1' => 'required|max:255',
            'nama_teams2' => 'required|max:255',
            'grup' => 'required',
            'u' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'tempat' => 'required',
            'kategori' => 'required',
        ]);

                $jadwal = new CreateJadwal;

                $jadwal->tanggal = $req->tanggal;
                $jadwal->jam = $req->jam;
                $jadwal->kategori = $req->kategori;
                $jadwal->grup = $req->grup;
                $jadwal->u = $req->u;
                $jadwal->tempat = $req->tempat;
                $jadwal->tim1 = $req->nama_teams1;
                $jadwal->tim2 = $req->nama_teams2;
                // $jadwal->save();
                if ($jadwal->save()) {
                    return redirect('/admin/jadwal')->with('sukses','Berhasil Menambah data!');
                }
                return redirect('/admin/jadwal')->with('eror','Gagal Menambah data!');
    }

     //------------ tampil edit ------------
    public function editjadwal($id_jadwal)
    {   
        $team = DB::table('teams')->get();

        $data = DB::table('jadwal')
                ->where('id_jadwal',$id_jadwal)
                ->first();
        return view('admin.edit_jadwal',['data'=>$data,'team'=>$team]);
    }
    
    //------------ edit action ------------
    public function editjadwal_action($id_jadwal, Request $req)
    {
        // $validatedData = $req->validate([
        //     'nama_teams1' => 'required',
        //     'nama_teams2' => 'required',
        //     'grup' => 'required',
        //     'u' => 'required',
        //     'tanggal' => 'required',
        //     'jam' => 'required',
        //     'tempat' => 'required',
        //     'kategori' => 'required',
        // ]);

        $update = DB::table('jadwal')->where('id_jadwal',$id_jadwal)->update([    
                'tanggal' => $req->tanggal,
                'jam' => $req->jam,
                'kategori' => $req->kategori,
                'u' => $req->u,
                'grup' => $req->grup,
                'tempat' => $req->tempat,
                'tim1' => $req->nama_teams1,
                'tim2' => $req->nama_teams2,
            ]);
        if ($update) {
            return redirect('/admin/jadwal/')->with('upsukses','Berhasil update data!');
        }
       return redirect('/admin/jadwal/')->with('uperor','Gagal update data!');
    }
    
    public function loremregis () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/01101100011011110111001001100101011011010111001001100101011001110110100101110011');
    }


    public function id_card($id_teams)
    {
        $data = DB::table('teams')
            ->join('users','teams.id_users','users.id_users')
            ->join('players','teams.id_teams','players.id_teams')
            ->where('teams.id_teams',$id_teams)
            ->first();

        $data_2 = DB::table('players')
                ->where('id_teams',$id_teams)
                ->get();
        $array = [];
        $i = 1;
        foreach($data_2 as $d){
            $array[$i] = 'VALID';
            $i++;
        }
    
        $pdf = \PDF::loadView('admin.print_nametag',['lomba'=>$data,'data'=>$data_2,'array'=>$array]);
        return $pdf->download('id_card_'.$data->nama_teams.'_'. date('Y-m-d H:i:s').'.pdf');        
            // return view('admin.print_nametag',['lomba'=>$data,'data'=>$data_2]);
        
    }
    
    public function checker($id_teams,$nisn,$nama_players)
    {
            $data0 = DB::table('users')
                    ->first();
                    
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
            return view('admin.checkplayer',['data0'=>$data0,'data'=>$data, 'data2'=>$data_2]);
            
        }
        
// JADWAL
    public function get_teams_as_u($u){
        $data = DB::table('klasemen')
                ->where([
                    'u'=>$u])
                ->get();
        $output = "<option selected disabled>-- Pilih Team --</option>";
        foreach($data as $d){
            $output .= '<option value="'.$d->id_klasemen.'"> '.$d->nama_teams.'</option>';
        }
        
        return $output;
    }
    public function hasil_pertandingan($id_jadwal){
        $data = DB::table('jadwal')
                ->where('id_jadwal',$id_jadwal)
                ->first();
        $team1 = DB::table('klasemen')
                ->where('id_klasemen',$data->tim1)
                ->first();
        $player1 = DB::table('players')
                ->where('id_teams',$team1->id_teams)
                ->get();
                
        $team2 = DB::table('klasemen')
                ->where('id_klasemen',$data->tim2)
                ->first();
        $player2 = DB::table('players')
                ->where('id_teams',$team2->id_teams)
                ->get();
        
        $hasil = DB::table('hasil_pertandingan')
                ->where('id_jadwal',$id_jadwal)
                ->first();
        $player1_goal = [];
        $player2_goal = [];
        $player1_kk = [];
        $player2_kk = [];
        $player1_km = [];
        $player2_km = [];
        // dd($hasil);
        if(!empty($hasil)){
            $goal1 = $hasil->score1;
            $goal2 = $hasil->score2;
            
            $kk1 = $hasil->kk1;
            $kk2 = $hasil->kk2;
            
            $km1 = $hasil->km1;
            $km2 = $hasil->km2;
            
        // --- GOAL ---//
            if($goal1 == "null"){
                $goal1_player = array(0 => '-');
            }else{
                $goal1_player = json_decode($goal1);
                for($i = 0; $i < count($goal1_player); $i++){
                    $get_data = DB::table('players')
                                ->where('id_players',$goal1_player[$i])
                                ->first();
                    
                    $player1_goal[$i] = $get_data->nama_players;
                }
            }
            
            if($goal2 == "null"){
                $goal2_player = array(0 => '-');
            }else{
                $goal2_player = json_decode($goal2);
                for($i = 0; $i < count($goal2_player); $i++){
                    $get_data = DB::table('players')
                                ->where('id_players',$goal2_player[$i])
                                ->first();
                    
                    $player2_goal[$i] = $get_data->nama_players;
                }
            }
            
        // --- KARTU KUNING ---//
            if($kk1 == "null"){
                $kk1_player = array(0 => '-');
            }else{
                $kk1_player = json_decode($kk1);
                for($i = 0; $i < count($kk1_player); $i++){
                    $get_data = DB::table('players')
                                ->where('id_players',$kk1_player[$i])
                                ->first();
                    
                    $player1_kk[$i] = $get_data->nama_players;
                }
            }
            
            if($kk2 == "null"){
                $kk2_player = array(0 => '-');
            }else{
                $kk2_player = json_decode($kk2);
                for($i = 0; $i < count($kk2_player); $i++){
                    $get_data = DB::table('players')
                                ->where('id_players',$kk2_player[$i])
                                ->first();
                    
                    $player2_kk[$i] = $get_data->nama_players;
                }
            }
            
        // --- KARTU MERAH ---//
            if($km1 == "null"){
                $km1_player = array(0 => '-');
            }else{
                $km1_player = json_decode($km1);
                for($i = 0; $i < count($km1_player); $i++){
                    $get_data = DB::table('players')
                                ->where('id_players',$km1_player[$i])
                                ->first();
                    
                    $player1_km[$i] = $get_data->nama_players;
                }
            }
            
            if($km2 == "null"){
                $km2_player = array(0 => '-');
            }else{
                $km2_player = json_decode($km2);
                for($i = 0; $i < count($km2_player); $i++){
                    $get_data = DB::table('players')
                                ->where('id_players',$km2_player[$i])
                                ->first();
                    
                    $player2_km[$i] = $get_data->nama_players;
                }
            }
            
        // 00000000000 //
            
        }
        
        // print_r($player1_goal);
        
        return view('admin.jadwal_hasil',[
                'data'=>$data,
                'hasil'=>$hasil,
                'team1'=>$team1,
                'team2'=>$team2,
                'player1'=>$player1,
                'player2'=>$player2,
                'player1_goal'=>$player1_goal,
                'player2_goal'=>$player2_goal,
                'player1_kk'=>$player1_kk,
                'player2_kk'=>$player2_kk,
                'player1_km'=>$player1_km,
                'player2_km'=>$player2_km,
            ]);
    }
    
    public function hasil_pertandingan_act($id_jadwal,Request $req){
        
        // dd($req->goal1);
        $hasil = new HasilPertandingan;
        $hasil->id_jadwal = $id_jadwal;
        
        $hasil->score1 = json_encode($req->goal1);
        $hasil->kk1 = json_encode($req->kk1);
        $hasil->km1 = json_encode($req->km1);
    
        $hasil->score2 = json_encode($req->goal2);
        $hasil->kk2 = json_encode($req->kk2);
        $hasil->km2 = json_encode($req->km2);
        
        // echo $req->klasemen1;
        // echo $req->klasemen1;
        // $klasemen1 = CreateKlasemen::find($req->klasemen1);
        // $klasemen2 = CreateKlasemen::find($req->klasemen2);
        
        // // dd($klasemen1);
        // // print_r($klasemen1);
        // if(empty($req->goal1)){ $goal1 = 0; }else{ $goal1 = count($req->goal1); }
        // if(empty($req->goal2)){ $goal2 = 0; }else{ $goal2 = count($req->goal2); }
        
        // if(empty($req->kk1)){ $kk1 = 0; }else{ $kk1 = count($req->kk1); }
        // if(empty($req->kk2)){ $kk2 = 0; }else{ $kk2 = count($req->kk2); }
        
        // if(empty($req->km1)){ $km1 = 0; }else{ $km1 = count($req->km1); }
        // if(empty($req->km2)){ $km2 = 0; }else{ $km2 = count($req->km2); }
        
        //     if($goal1 > $goal2){
        //         $klasemen1->menang = $klasemen1->menang + 1;
        //         $klasemen2->kalah = $klasemen2->kalah + 1;  
        //         $klasemen1->poin = $klasemen1->poin + 3;      
        //     }else if($goal1 < $goal2){
        //         $klasemen1->kalah = $klasemen1->kalah + 1;
        //         $klasemen2->menang = $klasemen2->menang + 1;  
        //         $klasemen2->poin = $klasemen1->poin + 3; 
                
        //     }else{
        //         $klasemen1->seri = $klasemen1->seri + 1;  
        //         $klasemen1->poin = $klasemen1->poin + 1;
                
        //         $klasemen2->seri = $klasemen2->seri + 1;  
        //         $klasemen2->poin = $klasemen2->poin + 1;
        //     }
            
        //     $klasemen1->gk = $klasemen1->gk + $goal1;
        //     $klasemen1->gm = $klasemen1->gm + $goal2;
        //     $klasemen1->sg = $klasemen1->sg + $goal1 - $goal2;
            
        //     $klasemen2->gk = $klasemen2->gk + $goal2;
        //     $klasemen2->gm = $klasemen2->gm + $goal1;
        //     $klasemen2->sg = $klasemen2->sg + $goal2 - $goal1;
            
        //     $klasemen1->main = $klasemen1->main + 1;
        //     $klasemen2->main = $klasemen2->main + 1;
        
        // if($hasil->save() && $klasemen1->save() && $klasemen2->save()){
        //     return back()->with('sukses','HiyaHiyaHiya!');
        // }
        if($hasil->save()){
            return back()->with('sukses','HiyaHiyaHiya!');
        }
        
    }

        public function add_foto(){
            return view('/admin/addfoto');
        }
        
        public function add_foto_act(Request $req){
            $this->validate($req,[
                    'caption' => 'required',
                    'foto' =>'image|mimes:jpg,jpeg,png'
                ]);
                
            $image = $req->foto;
            $name_picture = time(). '.'. $image->getClientOriginalExtension();
            $location = public_path('img/gallery');
            
            if($image->move($location,$name_picture)){
                $d = new Gallery;
                $d->foto = $name_picture;
                $d->caption = $req->caption;
                if($d->save()){
                    return back()->with('sukses','Berhasil Menambah Foto!');
                }
            }
            
        }
        public function list_foto(){
            $data = DB::table('gallery')->get();
            return view('admin.list_foto',['data'=>$data]);
        }
    
}