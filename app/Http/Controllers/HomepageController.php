<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $images = DB::table('images')->latest()->take(10)->get();
        return view('welcome', ['images' => $images]);
    }
}
