<?php

namespace TiendaEnLinea\Http\Controllers;

use Illuminate\Http\Request;

use TiendaEnLinea\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
