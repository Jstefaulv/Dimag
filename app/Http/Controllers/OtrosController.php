<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtrosController extends Controller
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
        $mesas = Mesa::where('idSector','=',3)->get();
        return view('otros')->with(compact('mesas'));
    }
}
