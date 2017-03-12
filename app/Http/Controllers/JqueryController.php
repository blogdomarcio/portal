<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;

class JqueryController extends Controller
{
    public function index()
    {
        $registros = Admin::all();
        return view('jquery', compact('registros'));
    }
}
