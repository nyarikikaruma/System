<?php

namespace App\Http\Controllers;

use App\Models\Keyboardist;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule as ValidationRule;


class KeyboardistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $altar = DB::table('altars')->where('region_id', $request->region_id)->get();
        if(count($altar)>0){
            return response()->json($altar);
        }


    }

}