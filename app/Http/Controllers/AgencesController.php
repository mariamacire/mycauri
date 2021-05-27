<?php

namespace App\Http\Controllers;

use App\Agence;
use App\Pays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AgencesController extends Controller
{
    
    // public function index(){
    //     $pays = Pays::all();
    //     return view('agences.agence')->with('pays', $pays);
    // }


    public function allpays()
    { 
        $pays = Pays::all();
        
    }
    
    public function getPartenaires($pays_id)
    {
        $client = new \GuzzleHttp\Client();
        
        $request  = $client->get('http://api-prod.caurishop.com/api/country/get-hq-by-country/'. $pays_id);
        $response = json_decode($request->getBody());
    
        $hqID     = $response->Summary;

        $client = new \GuzzleHttp\Client();
        
        $request  = $client->get('http://api-prod.caurishop.com/api/agency/get-ws-partner-agency/'.$hqID .'/'.$pays_id);
        $response = json_decode($request->getBody());

        
        $data = Agence::where('pays_id',$pays_id)->get();
        return response()->json(['data' => $response]);
        
    }


    public function getAgences($pays_id, $partenaireID)
    {

        $client = new \GuzzleHttp\Client();
        
        $request  = $client->get('http://api-prod.caurishop.com/api/agency/get-ws-partner-agency/'.$partenaireID .'/'.$pays_id);
        $response = json_decode($request->getBody());

        
        $data = Agence::where('pays_id',$pays_id)->get();
        return response()->json(['data' => $response]);
        
    }

    public function index()
    {
        $client = new \GuzzleHttp\Client();
        
        $request  = $client->get('http://api-prod.caurishop.com/api/country/get-country-list');
        $response = json_decode($request->getBody());
        
        return view('agences.agence')->with('response', $response);
    
       //dd($response);
    }

    
}
