<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['title'] = 'Dashboard';
        return view('dashboard.dashboard',$data);
    }
    public function maps(Request $request){
        if($request->ajax()){
            return response()->json(Place::all());
        }
        $data['title'] = 'Maps';
        return view('maps.index',$data);
    }
}
