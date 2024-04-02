<?php

namespace App\Http\Controllers;

use App\Models\TypeUser;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::with('typeUser')->get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create(){
        $tipousuarios = TypeUser::all();
        return view('usuarios.create',compact('tipousuarios'));
    }

    public function sendData(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:3',
            'edad' => 'nullable|integer|min:18',
            
        ]);

        
        $usuario = new Usuario();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->edad = $request->input('edad');

       
        $usuario->type_users_id = 2; // ID correspondiente al tipo de cliente

        // Guardar el usuario en la base de datos
        $usuario->save();

        // Redireccionar a una ruta específica (por ejemplo, la lista de usuarios)
        return redirect('/usuarios')->with('success', 'Usuario cliente creado exitosamente.');
    }
}
