<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Image;
use File;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'user/011011000110111101110010011001010110110101100011011100100110010101100001011101000110010101110100011001010110000101101101';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            // 'no_hp' => ['required', 'string', 'min:11'],
            // 'foto_sekolah' => ['required', 'image', 'mimes:jpg,jpeg,png'],
            // 'asal_sekolah' => ['required', 'string', 'max:255'],
            // 'alamat_sekolah' => ['required', 'string', 'max:255'],
            // 'telepon' => ['required', 'string', 'min:11'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        // $imageName = $data['asal_sekolah'] . '.' . $data['foto_sekolah']->getClientOriginalExtension();

        // $data['foto_sekolah']->move(
        // public_path('img/sekolah'), $imageName
        // );
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'no_hp' => $data['no_hp'],
            'email_verified_at' => '2019-09-04 08:29:38',
        ]);
    }
}
