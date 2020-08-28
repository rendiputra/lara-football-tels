<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Auth::routes(['verify' => true]);

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/top_score','FrontController@get_top_score');



//front user
Route::get('/','FrontController@index');


Route::get('/fixtures','FrontController@jadwal');

// Route::get('/telscup', function () {
//     return view('telscup');
// });
Route::get('/cup', function () {
    return view('cup');
});

// Route::get('/result', function () {
//     return view('result');
// });
Route::get('/result','FrontController@hasil');

Route::get('/rules', function () {
    return view('rules');
});
Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/get_jadwal',function(){
   $jadwal = DB::table('jadwal')->where('tanggal','2019-10-13')->get();
   $team = DB::table('klasemen')->get();
   return view('get_jadwal',['jadwal'=>$jadwal,'team'=>$team]);
});

//-----------register-----------
// Route::get('/loremregis','HomeController@register'); 
Route::get('/01101100011011110111001001100101011011010111001001100101011001110110100101110011', function (){
    return view('auth.register2');
});
Route::post('/loremregisedit','RegisterrController@create')->name('loremregis'); 


Route::get('/team_detail/{teams}','FrontController@show'); 

Route::get('/participants', 'FrontController@participants')->name('participant');


Auth::routes();

Route::get('/user/dash','HomeController@dash_user')->name('dash_user');
// Route::get('/user/manage/{id_team}','HomeController@manage_peserta')->name('manage_peserta');

// Route::get('/user/pembayaran/{id_pembayaran}','HomeController@jum_bayar')->name('jum_bayar');
// Route::post('/user/pembayaran/upload_bukti','HomeController@upload_bukti')->name('up_bukti');

Route::get('/participants', 'FrontController@participants')->name('participant');
// Route::get('/detail_sekolah/{id_users}', 'FrontController@detail_sekolah')->name('detail_sekolah');
Route::get('/detail_tim/{id_teams}', 'FrontController@detail_sekolah')->name('detail_sekolah');
Route::get('/user/getdata/nisn/{nisn}','FrontController@check_nisn');
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/user/create_team', 'HomeController@create_team')->name('create_team');
// Route::post('/user/create_team', 'HomeController@insert_team')->name('create_team');
Route::get('/user/011011000110111101110010011001010110110101100011011100100110010101100001011101000110010101110100011001010110000101101101', 'HomeController@create_team')->name('create_team');
Route::post('/user/011011000110111101110010011001010110110101100011011100100110010101100001011101000110010101110100011001010110000101101101', 'HomeController@insert_team')->name('create_team');

Route::get('/edit_team/{id_teams}', 'HomeController@edit_team')->name('edit_team');
Route::post('/edit_team/{id_teams}/edit', 'HomeController@update_team')->name('update_team');


Route::get('/user/data_player/edit/{id_player}', 'HomeController@edit_data_player')->name('edit_data_player');
Route::post('/user/data_player/{id_player}/edit','HomeController@edit_player_action')->name('edit_player_action');
// Route::post('/user/data_player/{id_player}/edit',function(){
//     return abort(404);
// })->name('edit_player_action');
// Route::get('/user/data_player/edit/{id_player}',function(){
//     return abort(404);
// })->name('edit_data_player');

Route::get('/user/data_player/{id_teams}', 'HomeController@data_player')->name('data_player');

Route::get('/user/insert_player/{id_teams}', 'HomeController@insert_data_player')->name('insert_player');
Route::post('/user/insert_player', 'HomeController@insert_player')->name('insert_player');

Route::get('/admin/insert_player/{id_teams}', 'HomeController@insert_data_player2')->name('insert_player');
Route::post('/admin/insert_player', 'HomeController@insert_player2')->name('insert_player');

	Route::get('/user/reregis/{id_teams}','HomeController@reregis')->name('reregis');

	Route::get('/powerranger','HomeController@cetak');
// Route::get('/data_player/{id_teams}','HomeController@manage_peserta')->name('data_player');


//kawasan admin
        Route::group(['middleware'=>'isAdmin'],function(){
		// Route::get('/cup/dashboard', 'HomeController@index')->name('home');
		// Route::get('/cup/admin/lomba','HomeController@lomba')->name('admin_lomba');
		// Route::post('/cup/admin/lomba','HomeController@tambah_lomba')->name('lomba_tambah');

		// Route::get('/cup/admin/partner','HomeController@partner')->name('partner');
		// Route::post('/cup/admin/partner/add','HomeController@partner_add')->name('partner_add');
		// Route::get('/cup/admin/partner/{id_partner}','HomeController@partner_edit')->name('partner_edit');
		// Route::post('/cup/admin/partner/{id_partner}/edit','HomeController@partner_edit_action')->name('partner_edit_action');
		// Route::post('/cup/admin/partner/{id_partner}/delete','HomeController@partner_delete')->name('partner_delete');


        Route::get('/admin/create_team', 'HomeController@create_team_admon')->name('create_team_admon');
        Route::post('/admin/create_team', 'HomeController@insert_team_admon')->name('create_team_admon');


		Route::get('/admin/data_player/{id_team}','HomeController@admin_data_player2')->name('data_player');

		Route::get('/admin/confirm_payment','HomeController@confirm_page')->name('confirm');
		Route::get('/admin/confirm_payment/{id_payment}/{id_teams}/{status}','HomeController@confirm_action')->name('confirm_action');

		Route::get('/admin/peserta','HomeController@tampilpeserta')->name('tampilpeserta');
		Route::get('/admin/dash','HomeController@dash_admin')->name('dash_admin');
		
		Route::get('/admin/data_player/edit/{id_player}', 'HomeController@admin_edit_data_player')->name('admin_edit_data_player');
        Route::post('/admin/data_player/{id_player}/edit','HomeController@admin_edit_player_action')->name('admin_edit_player_action');
		
		//-------------- klasemen --------------
		Route::get('/admin/klasemen/','HomeController@klasemen')->name('klasemen');
		Route::get('/admin/klasemen/input','HomeController@inputklasemen')->name('inputklasemen');
		Route::post('/admin/klasemen/input','HomeController@inputklasemen_action')->name('inputklasemen1');

		Route::get('/admin/klasemen/update/{id_klasemen}','HomeController@updateklasemen')->name('updateklasemen');
		Route::post('/admin/klasemen/update/{id_klasemen}/action','HomeController@updateklasemen_action')->name('updateklasemen1');

		Route::get('/admin/klasemen/edit/{id_klasemen}','HomeController@editklasemen')->name('editklasemen');
		Route::post('/admin/klasemen/edit/{id_klasemen}/action','HomeController@editklasemen_action')->name('editklasemen1');
		
		//-------------- Jadwal --------------
		Route::get('/admin/jadwal/','HomeController@jadwal')->name('jadwal');

		Route::get('/admin/jadwal/input','HomeController@inputjadwal')->name('inputjadwal');
		Route::post('/admin/jadwal/input','HomeController@inputjadwal_action')->name('inputjadwal1');

        Route::get('/admin/get_teams_as_u/{u}/{grup}','HomeController@get_teams_as_u');
        
        Route::get('/admin/jadwal/hasil_pertandingan/{id_jadwal}','HomeController@hasil_pertandingan')->name('hasil_pertandingan');
        Route::post('/admin/jadwal/hasil_pertandingan/{id_jadwal}','HomeController@hasil_pertandingan_act')->name('hasil_pertandingan_act');
        
		Route::get('/admin/jadwal/edit/{id_jadwal}','HomeController@editjadwal')->name('editjadwal');
		Route::post('/admin/jadwal/edit/{id_jadwal}','HomeController@editjadwal_action')->name('editjadwal1');
		Route::get('/usercreatedlorem', 'HomeController@loremregis');
		
// 		End Jadwal
		Route::get('/admin/id_card/{id_teams}','HomeController@id_card')->name('id_card');
		
        Route::get('/checker/{id_teams}/{nisn}/{nama_players}', 'FrontController@checker')->name('checker');
        
        // -------- Foto ------ //
        
        Route::get('/admin/addfoto','HomeController@add_foto')->name('add_foto');
        Route::post('/admin/addfoto','HomeController@add_foto_act')->name('add_foto_act');
        Route::get('/admin/listfoto','HomeController@list_foto');
	});
	
	Route::get('/get_pemain_top',function(){
	    $u11 = array('Al Azhar Kemang','Indonesian Eagle','SSB Bintang RDH','SSB Petrostream Kuning');
	    $u9 = array('Al Azhar Kemang','SSB Tunas Prima');
	    $u13 = array('SSB Aqua Haier','SSB Asses');
	    $p11 = [];
	    $p9 = [];
	    $p13 = [];
	    for($i = 0 ; $i < count($u11); $i++){
    	    $data_u11 = DB::table('teams')
    	    ->where([
    	        'nama_teams'=>$u11[$i],
    	        'u'=>'U11'
    	        ])
    	    ->first();
	        $player_u11 = DB::table('players')->where('id_teams',$data_u11->id_teams)->get();
	        foreach($player_u11 as $zxc){
	            array_push($p11,$u11[$i].'|'.$zxc->nama_players .'|'. $zxc->tanggal_lahir .'|'.$zxc->foto_players.'|'.$zxc->no_punggung.'|'.$zxc->nisn);
	        }
	    }
	    $no = 1;
	   // print_r($p11);
	   // print_r($p9);
	   // print_r($p13);
	    
	});
	
	Route::get('/pweoore',function(){
	    $u11 = array('SSB Bintang RDH-U11','SSB Petrostream Kuning-U11','SSB Asses-U13','SSB Aqua Haier-U13','SSB Tunas Prima-U9','Al Azhar Kemang-U9');
	    $data = DB::table('players')->join('teams','players.id_teams','teams.id_teams')->where('teams.u','U11')->orderBy('teams.nama_teams','ASC')->get();
	    $main = 1;
	    $tidak = 1;
	    foreach($data as $as){
	        $nama = $as->nama_teams .'-'.$as->u;
	       // echo $nama .'<br>';
	        if(in_array($nama, $u11)){
	           // echo $nama .'<br>';
	            echo $nama.' - '.$as->nama_players.'<br>';
	            $main++;
	        }else{
	           // echo $tidak.'. '.$nama.' - '.$as->nama_players.'<br>';
	            $tidak++;
	            
	        }
	    }
	    echo "Total Pemain Lolos U13 FINAL : ". $main . ". Total Pemain Tidak Lolos U13 Final U13 : ".$tidak;
	   // echo $tidak;
	   // echo $tidak;
	});
	Route::get('/testtesttest',function(){
	    
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
            $array = array_count_values($array);
            arsort($array);
            $array_player = array_keys($array);
            $array1 = array_count_values($array1);
            arsort($array1);
            $array1_player = array_keys($array1);
            echo "<pre>";
            print_r($array2);
            $array2 = array_count_values($array2);
            arsort($array2);
            $array2_player = array_keys($array2);

            print_r($array2_player);
            // $poweranger_enemy = ['u9'=>$array,'u11'=>$array1,'u13'=>$array2];
            
            // return view('tes',[
            //     'u9_score'=>$array,
            //     'u9_player'=>$array_player,
            //     'u11_score'=>$array1,
            //     'u11_player'=>$array1_player,
            //     'u13_score'=>$array2,
            //     'u13_player'=>$array2_player,]);
	});
	
	