<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function service(){
        
            $service = array(
                "name" => "MRI " ,
                "cost"=> '4000 tk',
                "duration"=> '40 mins',
                "deliveryreport"=> 'within 3 days');
           
            $services[] = (object)$service;
        

        return view('service')->with('services', $services);
    }
}