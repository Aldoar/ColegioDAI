<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (Auth::user()->idRols) {
            case '1':
                return redirect()->route('indexDirector');
                break;
            case '2':
                return redirect()->route('indexInspector');
                break;
            case '3':
                return redirect()->route('secretariaIndex');
                break;
            default:
                return redirect()->route('salir');
                break;
        }
    }
}
