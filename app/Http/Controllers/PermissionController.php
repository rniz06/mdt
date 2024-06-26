<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{

    function __construct()
    {
        $this->middleware(['permission:permisos-listar|permisos-crear|permisos-editar|permisos-eliminar'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:permisos-crear'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:permisos-editar'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:permisos-eliminar'], ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recuperamos la informacion a mostrar
        $permissions = Permission::orderBy('name', 'ASC')->get();

        // Definimos las cabeceras de la dataTable
        $heads = ['#', 'Nombre', 'Acciones'];

        // Retornamos la vista con las variables
        return view('permissions.index', compact('permissions', 'heads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $permission = Permission::create(['name' => $request->input('name')]);

        return redirect()->route('permissions.index')
            ->with('success', 'Permiso creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission = Permission::find($id);

        return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->save();

        return redirect()->route('permissions.index')
            ->with('success', 'Permiso actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("permissions")->where('id', $id)->delete();
        return redirect()->route('permissions.index')
            ->with('success', 'Permiso eliminado con exito.');
    }
}
