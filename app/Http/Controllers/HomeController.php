<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'data' => Lead::all(),
            'count_all' => count(Lead::all()),
            'count_sent' => count(Lead::where('is_sent', 1)->get()),
            'count_failed' => count(Lead::where('is_sent', 0)->get())
        ]);
    }
}
