<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index(){
        $Ninjas =Ninja::orderBy("created_by" , "desc")->paginate(10);
        return view('public.index' ,["Ninjas" => $Ninjas]);
    }
    public function create(){
        return view('public.create');
    }
    public function show($id){
        $Ninjas =Ninja::findOrFail($id);
        return view('public.show' , ["Ninjas" => $Ninjas]);
    }
}
