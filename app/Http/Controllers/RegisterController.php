<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // dd($request);
        // $attributes= $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'role'=>'required',
        //     'username'=>'required',
        //     'password'=>'required',
        //     'contact'=>'required',
        //     'altar'=>'required',
        //     'region'=>'required',
        //     'thumbnail'=>'required'
        // ]);

        // $newthumbnail= time() . '-' . $request->name . '.' . $request->thumbnail->extension();
        // $request->thumbnail->move(public_path('images', $newthumbnail));

        // $attributes['thumbnail']= $newthumbnail;

    //    $attributes['password']= bcrypt($attributes['password']);
        

        // dd($attributes);

        // $user=User::create($attributes);
        // $attributes['user_id'] = $user->id;
        // $user=UserDetail::create($attributes);
        // Auth()->login($user);

        // return redirect('/dashboard');


        $attributes= $request->validate([
            'name' => 'required',
            'username' => 'required',
            'role' => 'required',
            'contact' => 'required',
            'password'=>'required',
            'email'=>'required',
            'altar'=>'required',
            'region'=>'required',
            'thumbnail'=>'required'
        ]);


        // dd($attributes);

        $newImageName= time() . '-' . $request->name . '.' . 
        $request->thumbnail->extension();

        $request->thumbnail->move(public_path('images'), $newImageName);
        $attributes['thumbnail']=$newImageName;
        $attributes['password']= bcrypt($attributes['password']);

        $user = User::create($attributes);
        $attributes['user_id'] = $user->id;
        UserDetail::create($attributes);


        // if (Auth::attempt($user)) {
        //     return redirect()->intended('dashboard')
        //                 ->withSuccess('You have Successfully loggedin');
        // }
  
        // return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');

        Auth::login($user);
    }

    
}
