<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UfController extends Controller
{
    public function showUf()
    {
        $hoy = date("d-m-Y");
        $api = "https://mindicador.cl/api/uf/$hoy";
        
        if (ini_get('allow_url_fopen')) {
            $json = file_get_contents($api);
        } else {
            $curl = curl_init($api);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($curl);
            curl_close($curl);
        }
        
        $data = json_decode($json, true);  
        $ufValue = $data['serie'][0]['valor'] ?? null;  
        
        return view('ufView', compact('ufValue'));
        //return view('ufView', ['ufValue' => $ufValue]);
    }
}