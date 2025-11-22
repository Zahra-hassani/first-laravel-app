<?php

namespace App\Http\Controllers;

use App\Models\teachers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    //
    public function addTeachers(){
        DB::table("teachers")->insert([
            [
            "name"=>"Arozo",
            "lastName" => "Sarwari",
            "age" => "26",
            "gender" => "f"
            ],
            [
                "name"=> "Sara",
                "lastName" => "Amini",
                "age"=> "24",
                "gender"=> "f"
            ],
            [
                "name"=> "Bahar",
                "lastName" => "Karimi",
                "age"=> "28",
                "gender"=> "f"
            ],
            [
                "name"=> "Ahmad",
                "lastName" => "Nasimi",
                "age"=> "34",
                "gender"=> "m"
            ],
            [
                "name"=> "Jamil",
                "lastName" => "Bahrami",
                "age"=> "29",
                "gender"=> "m"
            ],
        ]);
        return "Inserted successfully";
    }

    public function showTeachers(){
        $teachers = DB::table("teachers")->get("*");
        return view("teachers",["teachers"=>$teachers]);
    }
}
