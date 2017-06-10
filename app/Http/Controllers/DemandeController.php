<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function extrait()
    {
        return view('demande.extrait');
    }

    public function index()
    {
        return view('home');
    }
}
