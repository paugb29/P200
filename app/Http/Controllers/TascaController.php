<?php

namespace App\Http\Controllers;

use App\Models\Tasca;
use Illuminate\Http\Request;
use App\Models\Projecte;

class TascaController extends Controller
{

    public function index()
    {
  
        $tasques = Tasca::all();
        return view('tasques.index', compact('tasques'));
    }

    public function create(Projecte $projecte)
    {
        return view('tascaCreate', compact('projecte'));
    }

    public function store(Request $request, Projecte $projecte,)
    {
        $request->validate([
            'nom' => 'required',
            'slug' => 'required',
            'completada' => 'boolean',
            'descripcio' => 'required',
        ]);

        $tasca = new Tasca([
            'nom' => $request->nom,
            'slug' => $request->slug,
            'completada' => $request->has('completada'),
            'descripcio' => $request->descripcio,
            'projecte_id' => $projecte->id,
        ]);

        $tasca->save();

        return redirect()->route('projecte.index')->with('success', 'Tasca creada exitosamente');
    }
    

  
    public function show(Projecte $projecte, Tasca $tasca)
    {
        return view('tascaShow', compact('tasca'));
    }

 
    public function edit(Projecte $projecte, Tasca $tasca)
    {
        
        return view('tascaEdit', compact('projecte','tasca'));
    }

 
    public function update(Request $request, Projecte $projecte, Tasca $tasca)
    {
        
        $request->validate([
            'nom' => 'required',
            'slug' => 'required',
            'completada' => 'required|boolean',
            'descripcio' => 'required',
        ]);

        $tasca->update($request->all());

        return redirect()->route('projecte.index')->with('success', 'Tarea actualizada exitosamente');
    }

    public function destroy(Projecte $projecte, Tasca $tasca)
    {
        $tasca->delete();
    
        return redirect()->route('projecte.index')->with('success', 'Tarea eliminada exitosamente');
    }

}
