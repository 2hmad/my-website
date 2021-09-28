<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index() {
        $projects = DB::table('projects')->limit('6')->inRandomOrder()->get();
        return view('index', compact('projects'));
    }
}
