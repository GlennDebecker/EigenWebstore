<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use Illuminate\Http\Request;

class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claims=Claim::all();
        return view('backend.claims.index')->with('claims',$claims);
        //
    }

    public function responde($id)
    {
        $claim=Claim::find($id);
        return view('backend.claims.responde')->with('claim',$claim);
        //
    }

   
}
