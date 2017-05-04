<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloControllerView extends Controller
{
    // Méthode index 
    public function index() {
        return view('hellow.oneHello'); // hellow = nom du dossier -> oneHello.blade.php = nom du fichier (attention : ne pas oublier blade dans le nom même du fichier)
    }
}