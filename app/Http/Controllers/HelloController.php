<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // Méthode index 
    public function index() {
        return "I am your controller.";
    }
}