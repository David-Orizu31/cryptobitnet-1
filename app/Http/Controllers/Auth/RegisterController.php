<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Company;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Request;
use Auth;
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



    public function showRegistrationForm()
    {

        $companies =  Company::all();
        return view('auth.register', compact( 'companies' ) );
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
    //    dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tel' => ['required'],
            'subdomain' => ['required', 'unique:companies'],
            // 'username' => ['required', 'string', 'max:255', 'unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
 
                    if(Request::hasFile('image')) {

                        $image = Request::file('image');
                        // dd($image);
                      $filenameWithExt    = $image->getClientOriginalName();
                      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                         $extension = Request::file('image')->getClientOriginalExtension();
                        $image_resize = \Image::make($image->getRealPath());
                        $image_resize->resize(200, 200);
                         $fileNameToStore= $filename.'_'.time().'.'.$extension;
                 $image_resize->save(public_path('storage/'.  $fileNameToStore ));
                //  dd($fileNameToStore);
                    }
                    $user =  User::create([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'package' => $data['package'],
                        'username' => $data['username'],

                       

                        'password' => $data['password'],
                        'avatar' => $fileNameToStore ?? null,
                      

                    ]);


 

        return $user;
    }
}
