<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contractController extends Controller
{
    public function ContractView(){
        return view('contractUs');
    }
}