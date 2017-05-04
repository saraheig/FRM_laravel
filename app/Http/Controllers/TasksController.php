<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myfirstmodel;

class TasksController extends Controller
{
    private $tasks;
    
    public function __construct() {
        $this->tasks = collect([
            ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
            ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]
        ])->keyBy('id');
    }
    
    public function index() {
         return view('index')->with('tasks', $this->tasks);
    }
    // index = string -> nom du fichier ; fait référence à la vue index.blade.php 
    // si xxx.yyy -> xxx = nom du dossier ; yyy = nom du fichier
    
    public function show( $id ) {
        return view('show')->with('task', $this->tasks[$id]);
    }
    // action show et la magie de Laravel est que vu qu'on a paramètre dans url, on peut l'utiliser dans la fonction 
    
    public function done() {
        return "C'est noté";
    }
}