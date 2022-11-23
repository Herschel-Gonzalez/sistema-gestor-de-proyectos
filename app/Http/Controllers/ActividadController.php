<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Actividad;
use App\Models\User;

class ActividadController extends Controller
{
    public function actividades_proyecto($projectid){

        $project = Proyecto::find($projectid);
        $users = User::latest()->paginate();
        //return view('actividades')->with('project',$project);
        return view('actividades',['project' => $project],['users' => $users]);

    }

    public function nueva_actividad($idproject){
        $project = Proyecto::find($idproject);
        $users = User::latest()->paginate();
        return view('nueva-actividad',['project' => $project],['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descripcion' => ['required', 'string', 'max:455'],
            'fecha_inicio' => ['required'],
            'fecha_fin' => ['required'],
            'tiempo_estimado' => ['required', 'string', 'max:255'],
            'prioridad' => ['required', 'string', 'max:255'],
        ]);

        $actividad = Actividad::create([
            'idusuario' => $request->idusuario,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'tiempo_estimado' => $request->tiempo_estimado,
            'prioridad' => $request->prioridad,
            'estatus' => $request->estatus,
            'proyecto_id' => $request->proyecto_id,
        ]);

        return redirect('projects');
    }

    public function editar_actividad($idactividad){
        $actividad = Actividad::find($idactividad);
        $users = User::latest()->paginate();
        return view('editar-actividad',['actividad'=>$actividad],['users' => $users]);
    }

    public function update(Request $request){
        $actividad= Actividad::find($request->id);
        $actividad->idusuario = $request->idusuario;
        $actividad->titulo = $request->titulo;
        $actividad->descripcion = $request->descripcion;
        $actividad->fecha_inicio = $request->fecha_inicio;
        $actividad->fecha_fin = $request->fecha_fin;
        $actividad->tiempo_estimado = $request->tiempo_estimado;
        $actividad->prioridad = $request->prioridad;
        $actividad->estatus = $request->estatus;
        $actividad->proyecto_id = $request->proyecto_id;
        $actividad->save();
        return redirect('dashboard');
    }

    public function delete($idactividad){
        $actividad = Actividad::find($idactividad);
        $actividad->delete();
       return redirect('projects');
    }

    public function actividades_usuario(){
        $actividades = Actividad::latest()->paginate();
        $proyectos = Proyecto::latest()->paginate();
        //dd($proyectos);

        return view('actividades_usuario',['actividades' => $actividades],['proyectos' => $proyectos]);

    }

    public function editar_actividad_usuario($idactividad){
        $actividad = Actividad::find($idactividad);
        return view('editar_actividad_usuario',['actividad' => $actividad]);
    }

}
