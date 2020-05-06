<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'user_img' => ['required|file|image|mimes:jpeg,png,jpg,gif|max:2048'],
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
        //make user_img path　and save image
        // if($data['user_img']){
        //     //
        //     $user_img =  'user_img_'.date('Y-m-d H:m:s') . '.jpg';
        //     $image = $data['user_img']; 
        //     $image->storeAs('public/images', date('Y-m-d H:m:s').'.jpg');
        //     $image->save();

        // }else{
        //     $user_img = null;
        // }

        $request = app('request');
        if($request->hasfile('user_img')){
            $user_img = $request->file('user_img');
            $filename = 'user_img_'.date('Y-m-d H:m:s') . '.jpg';
            Image::make($user_img)->save( public_path($filename) );
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_img' => $filename,
            'college' => $data['college']
        ]);
    }
}
