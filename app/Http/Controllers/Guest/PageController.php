<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\comic;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function nuovaPagina(){
        return view('nuova-pagina');
    }
}
