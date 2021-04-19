<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temperature;

class TemperaturesController extends Controller
{
    public function index(){
        return view('temperature/index', [
            'temperatures' => Temperature::all(),
        ]);
    }

    public function create(Request $request){
        $temp = Temperature::create($request->all());
        return $temp;
    }
}
