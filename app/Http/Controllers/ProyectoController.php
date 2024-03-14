<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::paginate(5);

        return view('proyecto', ['proyectos' => $proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('components/proyecto/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $proyecto = new Proyecto();
        $proyecto->nombre = $request->nombre;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->creador_id = $request->creador_id;
        $proyecto->participante_id = $request->participante_id;

        $proyecto->save();
        return redirect('/proyectos');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $proyecto = Proyecto::find($id);
        return view('components/proyecto/add', ['proyecto' => $proyecto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Proyecto::destroy($id);
        return redirect('/proyectos');
    }

    public function addParticipante($id)
    {
        $proyecto = Proyecto::where('id', $id)->first();
        return view('components/proyecto/add-participante', ['proyecto' => $proyecto]);
    }
}
