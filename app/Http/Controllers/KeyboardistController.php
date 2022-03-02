<?php

namespace App\Http\Controllers;

use App\Models\Keyboardist;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Validation\Rule as ValidationRule;


class KeyboardistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $list= Keyboardist::with('regions')->get();
        // $list= Keyboardist::all();
        // dd($list);
        return view('keyboardists.index', [
            'list'=>$list,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
    
        return view('keyboardists.create');
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
            'name'=>'required',
            'contact'=>'required|:20',
            'userId'=>'required',
            'altar'=>'required',
            'regions_id'=>'required',
            'thumbnail'=>'required'
        ]);
        $newImageName= time() . '-' . $request->name . '.' . 
        $request->thumbnail->extension();

        $request->thumbnail->move(public_path('images'), $newImageName);
        $attributes['thumbnail']=$newImageName;

        // dd($attributes);

        Keyboardist::create($attributes);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('keyboardists.edit');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
