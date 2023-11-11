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
        $category = [];
        foreach ($tasks as $task) {
            $category[] = $task->category;
        }
        $category = array_unique($category);
        $cat = $this->getTask();
        // dd($category);
        return view('dashboard', compact('user', 'tasks', 'category', 'cat'));
    }

    public function home() {
        return view('welcome');
    }

    protected function getTask() {
        if (isset($_GET['category'])) {
            $category = $_GET['category'];
            return $category;
        }
        return false;
    }
}
