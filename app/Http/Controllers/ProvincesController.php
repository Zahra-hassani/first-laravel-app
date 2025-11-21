<?php

namespace App\Http\Controllers;

use App\Models\provinces;
use Illuminate\Http\Request;

class ProvincesController extends Controller
{
    //
    public function index(){
        $provinces = provinces::all();
        return view("provices", ["provinces" => $provinces]);
    }
}
