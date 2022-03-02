<?php

namespace App\Http\Controllers;

use App\Models\Bishop;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists= Region::all();
        // dd($lists);
        return view('region.index', [
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
        $bishops= Bishop::all();
        return view('region.create', [
            'bishops' => $bishops
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
        $atribute= $request->validate([
            'bishop_id'=>'required',
            'name'=>'required'

        ]);

        // dd($atribute);

        Region::create($atribute);
        return redirect('/region/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bishops= Bishop::all();
        $lists= Region::find($id);
        // dd($lists);
        return view('region.edit', [
            'bishops' => $bishops,
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
            'bishop_id' => 'required'
        ]);

        Region::where('id', $id)->update($attributes);
        return redirect('/region/list');
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
