<?php

namespace App\Http\Controllers;

use App\Models\TypeUser;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            // 'password' => 'required|string|min:3',
            'edad' => 'nullable|integer|min:18',
            
        ]);

        
        $usuario = new Usuario();
        $usuario->name = $request->input('name');
        $usuario->direccion = $request->input('direccion');
        $usuario->email = $request->input('email');
        // $usuario->password = bcrypt($request->input('password'));
        $usuario->edad = $request->input('edad');

       
        $usuario->type_users_id = 2; // ID correspondiente al tipo de cliente

       
        $usuario->save();

      
        return redirect('/usuarios')->with('success', 'Usuario cliente creado exitosamente.');
    }

    public function edit($id){
        $usuario = Usuario::findOrFail($id);
        $tipousuarios = TypeUser::all();
        return view('usuarios.edit', compact('usuario','tipousuarios'));
    }

    public function update(Request $request, Usuario $usuario){
        $request->validate([
            'name' => 'required|string|max:255',
            'direccion' => 'required|string|min:5',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($usuario->id),
            ],
            // 'password' => 'required|string|min:3',
            'edad' => 'nullable|integer|min:18',
            
        ]);

        
       
        $usuario->name = $request->input('name');
        $usuario->direccion = $request->input('direccion');
        $usuario->email = $request->input('email');
        // $usuario->password = bcrypt($request->input('password'));
        $usuario->edad = $request->input('edad');

       
        $usuario->type_users_id = 2; // ID correspondiente al tipo de cliente

       
        $usuario->save();

      
        return redirect('/usuarios')->with('success', 'Cliente guardado exitosamente.');
    }


    //Gestión de Usuarios.
    public function indice(){
        $gestionusuarios = Usuario::with('typeUser')->get();
        return view('gestionUsuarios.index', compact('gestionusuarios'));
    }


    public function crear(){
        $tipousuarios = TypeUser::all();
        return view('gestionUsuarios.crear',compact('tipousuarios'));
    }


    public function enviarDatos(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:3',
            'edad' => 'nullable|integer|min:18',
            // 'type_users_id' => 'required|exists:type_users,id',
            
        ]);

        
        $gestionusuario = new Usuario();
        $gestionusuario->name = $request->input('name');
        $gestionusuario->direccion = $request->input('direccion');
        $gestionusuario->email = $request->input('email');
        $gestionusuario->password = bcrypt($request->input('password'));
        $gestionusuario->edad = $request->input('edad');
        // $gestionusuario->type_users_id = $request->input('type_users_id');
       
        // $gestionusuario->type_users_id = 2; 
        if (!$request->has('type_users_id')){
            $tipoCliente = TypeUser::where('nombreTipo', 'Cliente')->first();
            $gestionusuario->type_users_id = $tipoCliente->id;
        } else {
            $gestionusuario->type_users_id = $request->input('type_users_id');
        }
       
        $gestionusuario->save();

      
        return redirect('/gestionusuarios')->with('success', 'Usuario creado exitosamente.');
    }

    public function editar($id){
        $gestionusuario = Usuario::findOrFail($id);
        $tipousuarios = TypeUser::all();
        return view('gestionUsuarios.editar', compact('gestionusuario','tipousuarios'));
    }

    public function actualizar(Request $request, Usuario $gestionusuario)
    {
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($gestionusuario->id),
            ],
            'password' => 'required|string|min:3',
            'edad' => 'nullable|integer|min:18',
            // 'type_users_id' => 'required|exists:type_users,id',
            
        ]);

        
    
        $gestionusuario->name = $request->input('name');
        $gestionusuario->direccion = $request->input('direccion');
        $gestionusuario->email = $request->input('email');
        $gestionusuario->password = bcrypt($request->input('password'));
        $gestionusuario->edad = $request->input('edad');
        // $gestionusuario->type_users_id = $request->input('type_users_id');
       
        // $gestionusuario->type_users_id = 2; 
        if (!$request->has('type_users_id')){
            $tipoCliente = TypeUser::where('nombreTipo', 'Cliente')->first();
            $gestionusuario->type_users_id = $tipoCliente->id;
        } else {
            $gestionusuario->type_users_id = $request->input('type_users_id');
        }
       
        $gestionusuario->save();

      
        return redirect('/gestionusuarios')->with('success', 'Usuario creado exitosamente.');
    }
}
