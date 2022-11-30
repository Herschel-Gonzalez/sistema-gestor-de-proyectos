<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProjectController extends Controller
{
    public function projects(){
        $projects = Proyecto::latest()->paginate();
        return view('projects',['projects' => $projects]);
    }


    public function create(){
        //$users = User::latest()->paginate();
        //return view('users.users',['users' => $users]);
        return view('create-project');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'max:455'],
            'cliente' => ['required', 'string', 'max:255'],
            'fecha_inicio' => ['required'],
            'fecha_fin' => ['required'],
        ]);

        $proyect = Proyecto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'cliente' => $request->cliente,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect('projects');
    }

    public function edit($idproject){
        $proyecto = Proyecto::find($idproject);
        return view('editar-proyecto',['proyecto'=>$proyecto]);
    }

    public function update(Request $request){
        $proyecto= Proyecto::find($request->id);
        $proyecto->nombre = $request->nombre;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->cliente = $request->cliente;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->save();
        return redirect('projects');
    }

    public function filtroProyecto(Request $request){
        $data = $request->all();
        $projects = Proyecto::where('nombre','like','%'.$data['nombre'].'%')->get();
        //dd($users);
        return view('listaProyectos',compact('projects'));
    }

}
