<?php

namespace App\Http\Controllers;

use App\Models\countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    //
    public function index(){
        $countries = countries::all();
        return view("countries",["countries"=>$countries]);
    }
}
