<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoBoxController extends Controller
{
    public function index()
    {
        $images = DB::table('images')->latest()->get();
        return view('photobox', ['images' => $images]);
    }
}
