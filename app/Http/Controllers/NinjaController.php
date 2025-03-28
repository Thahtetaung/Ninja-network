<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index(){
        $Ninjas =Ninja::orderBy("created_by" , "desc")->get();
        return view('public.index' ,["Ninjas" => $Ninjas]);
    }
    
}
