<?php

namespace App\Http\Controllers;
use App\Models\Command;
use Illuminate\Http\Request;
use App\Models\Car;
use DateTime;



class CommandController extends Controller
{
    public function index()
    {
        //
        return view('command.index')->with(['command' => Command::all()]);
    }

    public function create($id)
    {
       
       return view('commands.create')->withCar(Car::findOrFail($id));
    }
    
    public function store(Request $request)
    {
        $car = Car::findOrFail($request->car_id);
    
        $dateLocation = new DateTime($request->dateL);
        $dateRetour = new DateTime($request->dateR);
        $jours = date_diff($dateLocation, $dateRetour);
        $totalDays = $jours->days;
    
        // Multiply the total number of days by an integer value
        $prixTtc = $car->prixJ * $totalDays;
    
        Command::create([
            'user_id' => auth()->user()->id,                                                                            
            'car_id' => $request->car_id,
            'dateL' => $request->dateL,
            'dateR' => $request->dateR,
            'prixTTC' => $prixTtc,
            'notes' => '', // Provide a default value for the 'notes' field
        ]);
        $car -> update([
            'dispo' => 0
        ]);
        return redirect()->route('index')->with([
            'success' => 'Commande ajoutée'
        ]);
    }
    

    public function show(Command $command)
    {
        return view('command.show')->withCommand($command);
    }

}
