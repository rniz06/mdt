<?php

namespace App\Http\Controllers;

use App\Models\Fine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FineController extends Controller
{

    function __construct()
    {
        $this->middleware(['permission:multas-listar|multas-crear|multas-editar|multas-eliminar'], ['only' => ['index', 'store']]);
        $this->middleware(['permission:multas-crear'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:multas-editar'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:multas-ver'], ['only' => ['show']]);
        $this->middleware(['permission:multas-eliminar'], ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Obtener el usuario autenticado
        $user = auth()->user();
        $data = [];
        $role = '';

        if ($user->hasRole('Admin')) {
            // Si el usuario es Admin, mostrar listado de usuarios y la cantidad de boletas en estado Generado
            $data = DB::table('users')
                ->leftJoin('fines', function ($join) {
                    $join->on('users.id', '=', 'fines.user_id')
                        ->where('fines.state', 'Generado');
                })
                ->select('users.id', 'users.name', DB::raw('COUNT(fines.id) as multas_count'))
                ->groupBy('users.id', 'users.name')
                ->get();
            $role = 'Admin';
        } elseif ($user->hasRole('TRANSITO-PMT')) {
            // Si el usuario tiene el rol de TRANSITO-PMT, mostrar listado de multas en estado Cargado
            $data = DB::table('fines')
                ->where('state', 'Cargado')
                ->get();
            $role = 'TRANSITO-PMT';
        }

        return view('multas.index', compact('data', 'role'));
    }


    public function asignarMultaAdmin()
    {
        return view('multas.cargarAdmin');
    }


    // /**
    //  * Funcion para redirigir automaticamente al pmt autenticado
    //  * directamente a la boleta correspondiente
    //  */
    public function asignarMulta()
    {
        $user = auth()->user();
        $query = Fine::query()->with('user');

        if ($user->hasRole('Admin')) {
            // Mostrar todas las multas en estado Generado
            $multas = $query->where('state', 'Generado')->orderBy('n_boleta')->paginate(5);

            return view('multas.cargarAdmin', compact('multas'));
        } elseif ($user->hasRole('TRANSITO-PMT')) {
            // Filtrar por el campo 'asignado_a' y el estado 'Generado'
            $multa = $query->where('user_id', $user->id)
                ->where('state', 'Generado')
                ->orderBy('n_boleta')
                ->first();

            if ($multa) {
                // Redirigir al método edit con la multa correspondiente
                return redirect()->route('multas.cargar', ['multa' => $multa->id]);
            } else {
                return redirect()->route('multas.index')->with('error', 'No hay multas para asignar.');
            }
        }

        // Caso por defecto (por si no tiene rol Admin ni TRANSITO-PMT)
        return redirect()->route('home')->with('error', 'No tiene permisos para esta acción.');
    }



    /**
     * Vista con el form para cargar una multa
     */
    public function cargar(Fine $multa)
    {
        return view('multas.cargar', compact('multa'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function storeMulta(Request $request, Fine $multa)
    {
        // Datos del vehiculo
        $multa->vehiculo = $request->vehiculo;
        $multa->chapa_vehiculo = $request->chapa_vehiculo;
        $multa->lugar = $request->lugar;
        $multa->descripcion = $request->descripcion;
        $multa->fecha_infraccion = $request->fecha_infraccion;

        // Datos del infractor
        $multa->conductor = $request->conductor;
        $multa->conductor_ci = $request->conductor_ci;
        $multa->conductor_municipio = $request->conductor_municipio;
        $multa->propietario = $request->propietario;
        $multa->propietario_ci = $request->propietario_ci;

        // Actualizamos el estado a Cargado
        $multa->state = $request->state;
        $multa->cargado_el = Carbon::now()->format('Y-m-d H:i:s');
        $multa->cargado_por = auth()->id();

        $multa->save();

        return redirect()->route('multas.index')->with('success', 'Multa cargada con éxito');
    }


    public function anulacion(Request $request, $id)
    {
        $multa = Fine::find($id);

        $multa->state = $request->state;
        $multa->mot_anulacion = $request->mot_anulacion;
        $multa->anulado_por = auth()->id();

        $multa->save();

        return redirect()->route('multas.index')->with('success', 'Multa Anulada exitosamente');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fine $fine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fine $multa)
    {
        return view('multas.edit', compact('multa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fine $multa)
    {
        // Datos del vehiculo
        $multa->vehiculo = $request->vehiculo;
        $multa->chapa_vehiculo = $request->chapa_vehiculo;
        $multa->lugar = $request->lugar;
        $multa->descripcion = $request->descripcion;
        $multa->fecha_infraccion = $request->fecha_infraccion;

        // Datos del infractor
        $multa->conductor = $request->conductor;
        $multa->conductor_ci = $request->conductor_ci;
        $multa->conductor_municipio = $request->conductor_municipio;
        $multa->propietario = $request->propietario;
        $multa->propietario_ci = $request->propietario_ci;

        // Actualizamos el estado a Cargado
        $multa->state = $request->state;
        $multa->cargado_el =  Carbon::now()->format('Y-m-d H-m-s');
        $multa->cargado_por =  auth()->id();

        $multa->save();

        return redirect()->route('multas.index')->with('success', 'Multa Cargada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fine $fine)
    {
        //
    }
}
