<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $user_login = Auth::user();
        if($user_login->hasRole('admin')){
            return view('dashboard');
        }
        else{
            return view('welcome');
        }
    }
}
