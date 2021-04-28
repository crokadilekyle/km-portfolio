<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temperature;
use Carbon\Carbon;

class TemperaturesController extends Controller
{
    public function index(){
        $temperature = Temperature::orderByDesc('created_at')->first();
        $latestPull = Carbon::parse($temperature->created_at)->format('m/d/Y - h:m');

        return view('temperature/index', [
            'temperature' => Temperature::orderByDesc('created_at')->first(),
            'latestPull' => $latestPull,
            'rooms' => Temperature::distinct('room')->count('room'),
        ]);
    }

    public function create(Request $request){
        $temp = Temperature::create($request->all());
        return $temp;
    }
}
