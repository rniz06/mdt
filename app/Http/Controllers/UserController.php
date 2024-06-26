<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    function __construct()
    {
        $this->middleware(['permission:usuarios-listar|usuarios-crear|usuarios-editar|usuarios-eliminar'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:usuarios-crear'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:usuarios-editar'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:usuarios-eliminar'], ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {
        // Recuperamos la informacion de todos los usuarios
        $users = User::orderBy('name', 'ASC')->get();

        // Asignamos las cabeceras del dataTable
        $heads = ['ID', 'Nombre', 'Username', 'Correo', 'Dirección', 'Roles', 'Acciones'];

        // Retornamos la vista con las variables
        return view('users.index',compact('users', 'heads'));
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        $addresses = Address::all();
        return view('users.create',compact('roles', 'addresses'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|max:191|unique:users,username',
            'email' => 'nullable|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required',

        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        $user->address_id = $request->input('address_id');

        return redirect()->route('users.index')
                        ->with('success','Usuario creado con éxito');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        $addresses = Address::all();

        return view('users.edit',compact('user','roles','userRole','addresses'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|max:191|unique:users,username,'.$id,
            'email' => 'nullable|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required',

        ]);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        $user->address_id = $request->input('address_id');
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
                         ->with('success','Usuario actualizado con éxito');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','Usuario eliminado exitosamente');
    }
}
