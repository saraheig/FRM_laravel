<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task; // A ne pas oublier !
use App\Http\Requests\TaskStoreRequest;

class TasksView extends Controller
{
    // Méthode index 
    public function index() {
        // Pour retourner toutes les tâches dans la vue index du dossier tasks
        return view('tasks.index')->with('tasks', Task::all());
    }
    
    // Formulaire 
    public function create() {
        return view('create');         
    }
    
    public function store(TaskStoreRequest $request) {
    
        $task = new Task(); // Avec Task, on appelle le modèle Task.php
        $task->name = $request->name;
        $task->save(); // save() = méthode
        
        // return "Tache " . $request->name . " enregistrée";
        return(redirect('tasks/show'));
    }
    
    public function show() {
    
        try {
            $task = Task::findOrFail($id);
        }
        catch(Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // return erreur
        }
        // return Task::find();
    }
}