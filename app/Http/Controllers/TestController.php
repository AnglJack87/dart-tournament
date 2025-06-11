<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hello()
    {
        return view('hello'); // Zeigt die Blade-Datei hello.blade.php an
    }
}
