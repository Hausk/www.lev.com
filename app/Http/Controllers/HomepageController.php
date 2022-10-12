<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        $images = DB::table('posts')->latest()->get();
        $categories = DB::table('categories')->get();
        $imageRelated = [];
        $imageListRelated = [];
        foreach ($categories as $category) {
            $imageRelated[] = DB::table('posts')->where('categories_id', $category->id)->first();
            $imageListRelated[$category->id] = DB::table('posts')->where('categories_id', $category->id)->get();
        }
        $htmlContent = DB::table('htmlContent')->get();
        return view('welcome', ['images' => $images, 'imageRelated' => $imageRelated, 'imageListRelated' => $imageListRelated, 'categories' => $categories, 'htmlContent' => $htmlContent]);
    }
}
