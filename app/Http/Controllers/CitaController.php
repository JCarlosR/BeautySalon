<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Personal;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function panelCita ()
    {
        $personales= Personal::all();
        return view ('citas.registrar')->with(compact('personales'));
    }
    
    public function registrarCita (Request $request)
    {
        $cita = new Cita();

        $cita->personal_id = $request->get('personal_id');

        $cita->nombres = $request->get('nombres');
        $cita->apellidos = $request->get('apellidos');
        $cita->celular = $request->get('celular');
        $cita->fecha = $request->get('fecha');
        $cita->hora = $request->get('hora');
        $cita->detalles = $request->get('detalles');

        $cita->save();
        return redirect('/');
    }


    // Administrador

    public function eliminarCita ($id)
    {
        Cita::findOrFail($id)->delete();
        return redirect ('/home');
    }
}
