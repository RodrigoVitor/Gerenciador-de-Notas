<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $user = User::userOwn();
        $tasks = Note::show();
        return view('dashboard', compact('user', 'tasks'));
    }

    public function home() {
        return view('welcome');
    }
}
