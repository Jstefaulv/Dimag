<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::where('idSector','=',2)->get();
        return view('barra')->with(compact('mesas'));
    }
}
