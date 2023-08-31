<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
class authController extends Controller
{
    public function index()
    {
        return view('auth.dashbord');
    }
    public function logout()
    {
        Auth::logout();
        
        return redirect('/login'); 
    }
    
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
