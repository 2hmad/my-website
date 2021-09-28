<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')->inRandomOrder()->get();
        return view('portfolio', compact('projects'));
    }

    public function details($id)
    {
        $details = DB::table('projects')->where('id', '=', $id)->get();
        return view('work', compact('details'));
    }
}
