<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';
    protected $fillable = ['name', 'user_id', 'category'];

    public static function show() {
        return self::where('user_id', Auth::user()->id)->get();
    }

    public static function store($request) {
        return self::create([
            'name' => $request->task,
            'user_id' => Auth::user()->id,
            'category' => $request->category
        ]);
    }

    public static function destroy($request) {
        return self::where('id', $request->id)->delete();
    }

    public static function edit($request) {
        return self::where('id', $request->id)->update([
            'name' => $request->task
        ]);
    }
}
