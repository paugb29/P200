<?php

namespace App\Http\Controllers;

use App\Models\Projecte;
use App\Models\Tasca;
use Illuminate\Http\Request;

class ProjecteController extends Controller
{

    public function index()
    {
        $projectes = Projecte::with('tasca')->get();
        return view('projecte',['projectes' => $projectes]);
    }

    public function create()
    {
        return view('projecteCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'slug' => 'required',
        ]);

        Projecte::create($request->all());

        return redirect()->route('projecte.index')->with('success', 'Proyecto creado exitosamente');
    }


    public function show(Projecte $projecte)
    {
        return view('projecteShow', compact('projecte'));
    }

    public function edit(Projecte $projecte)
    {
        return view('projecteedit', compact('projecte'));
    }

    public function update(Request $request, Projecte $projecte)
    {
        $request->validate([
            'nom' => 'required',
            'slug' => 'required',
        ]);

        $projecte->update($request->all());

        return redirect()->route('projecte.index')->with('success', 'Proyecto actualizado exitosamente');
    }
    
    public function destroy(Projecte $projecte)
    {

        $projecte->tasca()->delete();
    

        $projecte->delete();
    
        return redirect()->route('projecte.index')->with('success', 'Proyecto eliminado exitosamente');
    }
}
