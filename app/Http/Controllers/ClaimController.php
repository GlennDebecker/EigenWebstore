<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;
use App\Models\Claim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
    public function responde_save(Request $request,$id)
    { 
      $claim=Claim::find($id);
   
        $testMailData = [
            'title' => 'this email is from ComputerKopen ',
            'body' => $request->message
        ];

        Mail::to($claim->email)->send(new sendEmail($testMailData));
        $testMailData2 = [
            'title' => ' emails',
            'body' =>  'message'. $claim->messages .'\n  responde to '.$claim->enamil.'\n message:'.$request->message
        ];

        Mail::to(Auth::user()->email)->send(new sendEmail($testMailData2));
        Claim::destroy($id);
       return redirect()->route("claims.index-claim");

        //
    }

   
}
