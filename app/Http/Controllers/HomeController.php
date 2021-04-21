<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $datas = Membre::all();
        // $hommes = Membre::where('genre', 'homme')->take(5)->get();
        

        return view('home', compact('datas'));
    }
}
