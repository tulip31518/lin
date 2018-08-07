<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //
    public function insertForm()
    {
        return view('stud_create');
    }

    public function insert(Request $request)
    {
        $name = $request->input('stud_name');
        DB::insert('insert into student(name) values(?)',[$name]);
        echo "Successfully inserted.";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
