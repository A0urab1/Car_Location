<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class DirecteurController extends Controller
{
    public function index(){

        return view('directeure.index')->with(['cars'=>car::get()]);
        
    }
}
