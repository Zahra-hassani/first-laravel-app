<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    //
    public function index(){
        $students = students::select("id","name","lastName","grade","score")->orderBy("id","desc")->get();
        return view("students",["students" => $students]);
    }
    public function delete($id){
        DB::table("students")->where("id", $id)->delete();
        return view("delete",['id'=> $id]);
    }
    public function addStudent(){
        $students = new students();
        $students->name = 'Nila';
        $students->lastName = 'Karimi';
        $students->grade = 10;
        $students->score = 80;
        $students->save();
        return "student added successfully";
    }

    public function updateStudent(){
        $student = students::find(8);
        $student->name = 'Sahar';
        $student->lastName = "Taheri";
        $student->grade = 12;
        $student->score = 96;
        $student->update();
        return "updated successfully";
    }
    
    public function deleteStudent(){
        $students = students::find(7);
        $students->delete();
        return "deleted Successfuly";
    }
}
