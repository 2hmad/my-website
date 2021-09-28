<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')->limit('6')->inRandomOrder()->get();
        return view('index', compact('projects'));
    }

    public function sendMail(Request $request)
    {
    }
}
