<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insert;
class InsertController extends Controller
{
    public function insert(){
    	return view('insert');
    }
}
