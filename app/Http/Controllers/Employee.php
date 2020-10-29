<?php

namespace App\Http\Controllers;

use App\Empolyee;
use Illuminate\Http\Request;

class Employee extends Controller
{
    public function getEmployee(){
        $data = Empolyee::get();
        return response()->json($data);
    }
}
