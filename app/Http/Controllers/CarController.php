<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Http\Request;
use App\Models\Car;



class CarController extends Controller
{
    public function home()
    {
        //
        // return view('index')->with(['cars'=>car::whereDispo(1)->get()]);
        $cars=Car::all();
        $disp=Car::whereDispo(1)->get();
        return view('index',compact('cars','disp'));
       
    }

    public function search(Request $request)
    {
        $recherch = $request->input('recherch');
        $cars = Car::where('marque', 'LIKE', "%$recherch%")->get();

        return view('search', compact('cars', 'recherch'));
    }
    

    public function show($id)
    {
        $car=Car::find($id);
        
        //
        return view('show',compact('car'));
    }
}
