<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public static function create() {
        return view('create');
    }

    public function store(Request $request) {
        Note::store($request);
        return redirect()->route('dashboard');
    }

    public function destroy(Request $request) {
        Note::destroy($request);
        return redirect()->back();
    }

    public function update(Request $request) {
        Note::edit($request);
        return redirect()->route('dashboard');
    }
}
