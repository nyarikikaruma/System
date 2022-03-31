<?php

namespace App\Http\Controllers;

use App\Models\Altar;
use App\Models\Region;
use App\Models\User;
use App\Models\UserDetail;
use App\Notifications\ExcommunicationNotification;
use App\Notifications\KeyboardistCreateNotification;
use App\Notifications\RestoreNotifications;
use App\Notifications\SuspendNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    dd( Auth::user()->id );

        $main= auth()->user();

        // dd($main);
        // if($main->)
        // dd($main['id']);
        $user= User::with('userDetail')->findOrFail($main['id']);
        // dd($main);
        return view('dashboard')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $regions= Region::all();
        // dd($regions['0']);
        // $altars= Altar::all();
            // dd($altars);

        foreach($regions as $region){

            // dd($region['id']);

            $altars= Altar::all();
            // dd($altars);
            // $altars = DB::table('altars')
            //         ->where('region_id', $region['id'])
            //         ->get();
        }
        // dd($altars); 
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


        $users = User::select("*")

        ->where("role", "=", "national_leader" )
        ->orWhere("role", "=", "chief_governor" )
        ->orWhere("role", "=", "deputy_governor" )
        ->orWhere("role", "=", "vice_deputy_governor" )
        ->orWhere("role", "=", "governor" )


        
        ->get();
        
        foreach($users as $user) {

            Notification::send($user, new KeyboardistCreateNotification($user));
               
        }
        return redirect('/keyboardist/list');
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $main= Auth::user();
        // dd($main['role']);
        // if($main['role']==){

        // }
        $lists = User::with('userDetail')->paginate(10);
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
        $altars= Altar::all();
        $regions= Region::all();
        // dd($user);
        return view('keyboardists.edit', [
            'user' => $user,
            'altars' => $altars,
            'regions' => $regions
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
        
        User::where('id', $id)->update([
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
       UserDetail::where('user_id', $id)->update([
            'altar' => $attributes['altar'],
            'region' => $attributes['region'],
             'thumbnail' => $attributes['thumbnail'],
             'contact' => $attributes['contact']
         ]);
        // UserDetail::where('user_id', $id)->update($attributes);


        // dd($attributes);

        return redirect('/keyboardist/list');
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
        $user= User::all();
        User::find($id)->delete();

       
        $users = User::select("*")

        ->where("role", "=", "national_leader" )
        ->orWhere("role", "=", "chief_governor" )
        ->orWhere("role", "=", "deputy_governor" )
        ->orWhere("role", "=", "vice_deputy_governor" )
        ->orWhere("role", "=", "governor" )
        ->get();
        
        foreach($users as $user) {

            Notification::send($user, new SuspendNotification($user));
               
        }
        
        
        
        // dd($user);
  
        return redirect('/keyboardist/list');
    }

    public function suspended(){
        
       $lists=  User::onlyTrashed()->get();
        return view('keyboardists.suspended', [
            'lists' => $lists
        ]);
         }

    public function restore($id){

        User::withTrashed()->find($id)->restore();

        $users = User::select("*")

        ->where("role", "=", "national_leader" )
        ->orWhere("role", "=", "chief_governor" )
        ->orWhere("role", "=", "deputy_governor" )
        ->orWhere("role", "=", "vice_deputy_governor" )
        ->orWhere("role", "=", "governor" )
        ->get();
        
        foreach($users as $user) {

            Notification::send($user, new RestoreNotifications($user));
               
        }
  
        return redirect('/keyboardist/suspend');
    }

    public function deregister($id){

        User::withTrashed()->find($id)->forceDelete();

        $users = User::select("*")

        ->where("role", "=", "national_leader" )
        ->orWhere("role", "=", "chief_governor" )
        ->orWhere("role", "=", "deputy_governor" )
        ->orWhere("role", "=", "vice_deputy_governor" )
        ->orWhere("role", "=", "governor" )
        ->get();
        
        foreach($users as $user) {

            Notification::send($user, new ExcommunicationNotification($user));
               
        }
        
        return redirect('/keyboardist/suspend'); 
    }

}
