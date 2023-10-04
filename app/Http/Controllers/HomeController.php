<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $user = User::userOwn();
        return view('dashboard', compact('user'));
    }

    public function home() {
        return view('welcome');
    }
}
