<?php

namespace App\Http\Controllers;

use App\Models\Altar;
use App\Models\Region;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= auth()->user();
        // dd($user);
        return view('dashboard')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $altars= Altar::all();
        // dd($altars);
        $regions= Region::all();
        // dd($regions);
        return view('keyboardists.create', [
            'altars' => $altars,
            'regions' => $regions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // print('Hello');
        // dd($request);
        $attributes= $request->validate([
            'name' => 'required',
            'username' => 'required',
            'role' => 'required',
            'contact' => 'required|:20',
            'password'=>'required|:20',
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


        // dd($attributes);

        return redirect('/dashboard');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $lists = User::with('userDetail')->get();
        // dd($lists);
        // dd($lists[0]->userDetail);
        return view('keyboardists.index', [
            'lists'=>$lists
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::with('userDetail')->findOrFail($id);
        // dd($user);
        return view('keyboardists.edit', [
            'user' => $user
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= User::with('userDetail')->findOrFail($id);
        // dd($user);

        $attributes= $request->validate([
            'name' => 'required',
            'username' => 'required',
            'role' => 'required',
            'password' => 'required|:20',
            'email' => 'required',
            'altar' => 'required',
            'contact' => 'required|:20',
            'region' => 'required',
            'thumbnail' => 'required'
        ]);


        // dd($attributes);

        $newImageName= time() . '-' . $request->name . '.' . 
        $request->thumbnail->extension();

        $request->thumbnail->move(public_path('images'), $newImageName);
        $attributes['thumbnail']=$newImageName;
        $attributes['password']= bcrypt($attributes['password']);
        
        $main =  User::where('id', $id)->update([
           'name' => $attributes['name'],
           'email' => $attributes['email'],
            'username' => $attributes['username'],
            'password' => $attributes['password'],
             'role' => $attributes['role']
        ]);
        // dd($attributes);

        // $main= User::where('id', $id)->update($attributes);
        // dd($attributes);
        $attributes['user_id'] = $id;
        // dd($attributes);
        $main =  UserDetail::where('user_id', $id)->update([
            'altar' => $attributes['altar'],
            'region' => $attributes['region'],
             'thumbnail' => $attributes['thumbnail'],
             'contact' => $attributes['contact']
         ]);
        // UserDetail::where('user_id', $id)->update($attributes);


        // dd($attributes);

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        User::find($id)->delete();
  
        return redirect('/dashboard');
    }

    public function suspended(){
        
       $lists=  User::onlyTrashed()->get();
        return view('keyboardists.suspended', [
            'lists' => $lists
        ]);
         }

    public function restore($id){

        User::withTrashed()->find($id)->restore();
  
        return redirect('/keyboardist/list');
    }

    public function deregister($id){

        User::withTrashed()->find($id)->forceDelete();
        
        return redirect('/keyboardist/list'); 
    }

}
