<?php

namespace App\Http\Controllers;

use App\Models\Altar;
use App\Models\Bishop;
use App\Models\Region;
use Illuminate\Http\Request;

class AltarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists= Altar::all();
        return view('altars.index',[
            'lists'=>$lists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lists= Region::all();
        return view('altars.create', [
            'lists' => $lists
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
        // dd($request);
        $attributes= $request->validate([
            'name'=>'required',
            'region_id'=>'required'
        ]);

        Altar::create($attributes);
        return redirect('/altar/list');


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
        $lists= Region::all();
        $altars= Altar::find($id);
        return view('altars.edit', [
            'altars' => $altars,
            'lists' => $lists
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
       $attributes = $request->validate([
            'name' => 'required',
            'region_id' => 'required'
        ]);

        Altar::where('id', $id)->update($attributes);
        return redirect('/altar/list');
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
