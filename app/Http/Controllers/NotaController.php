<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function store(Request $request) {
        Note::store($request);
        return redirect()->back();
    }
}
