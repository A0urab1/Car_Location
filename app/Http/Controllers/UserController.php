<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\AuthManager;
use App\Models\Car;




class UserController extends Controller
{


    public function cmd(){
        return view('users.commandes');
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('users.edit', compact('users'));
    }
    
    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
    
        $request->validate([
            'name' => 'required',
            'tel' => 'required',
            'ville' => 'required',
            'email' => 'required|email',
        ]);
    
        $users->name = $request->name;
        $users->tel = $request->tel;
        $users->ville = $request->ville;
        $users->email = $request->email;
    
        $users->save();
    
        return redirect()->route('index', $users->id)->with('success', 'Profil mis à jour avec succès.');
    }










    public function show($id)
    {
        
        $users = User::findOrFail($id);
        return view('users.show')->with('users', $users);
    }
    

     public function create()
    {
        return view('users.register');
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'tel' => 'required',
            'ville' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tel' => $request->tel,
            'ville' => $request->ville,
        ]);
        return redirect()->route('users.login')->with([
            'success' => 'compte crée'
        ]);
     }   
    

    public function login(){
       
        return view('users.login');
    }

    public function auth(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
            
        ]);
         if(auth()->attempt(['email'=>$request->email,'password'=>$request->password])){
            $cars=Car::All();
            return view('index',compact('cars'));
         }else{
            return redirect()->route('users.login')->with([
                'error' => 'Email ou mot de passe est incorrect'
            ]);
         }   
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }
    
}

