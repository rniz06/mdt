<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Fine;
use App\Models\FineBatch;
use App\Models\Pmt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FineBatchController extends Controller
{

    function __construct()
    {
        $this->middleware(['permission:generar-boletas-listar'], ['only' => ['index', 'create', 'store']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener el ID de la dirección "TRANSITO-PMT"
        $transitoPmtAddress = Address::where('address', 'TRANSITO-PMT')->first();

        // Recuperar los datos a mostrar con carga ansiosa de las relaciones
        $fines_batch = FineBatch::with('user')->paginate(5);
        $users = User::where('address_id', $transitoPmtAddress->id)->get();

        return view('fine_batch.index', compact('fines_batch', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fine_batch.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validamos las entradas del usuario
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'boleta_inicial' => 'required|string|regex:/^\d+$/',
            'boleta_final' => 'required|string|regex:/^\d+$/|gt:boleta_inicial',
        ]);

        // Guardamos los datos del lote generado
        $batch = new FineBatch();
        $batch->boleta_inicial = $request->boleta_inicial;
        $batch->boleta_final = $request->boleta_final;
        $batch->user_id = $request->user_id;
        $batch->created_by = auth()->id();

        $batch->save();

        // Convertir a enteros para el bucle, pero asegurarse de que se manejen como cadenas
        $boletaInicial = (int)$request->boleta_inicial;
        $boletaFinal = (int)$request->boleta_final;

        // Calcular la longitud máxima de las boletas para preservar los ceros a la izquierda
        $maxLength = strlen($request->boleta_final);

        // Obtener el usuario autenticado
        $user = auth()->user();

        // Generar multas vacías con estado "Generado"
        for ($boleta = $boletaInicial; $boleta <= $boletaFinal; $boleta++) {
            $nBoleta = str_pad($boleta, $maxLength, '0', STR_PAD_LEFT);
            Fine::create([
                'n_boleta' => $nBoleta,
                'codigo_multa' => strtoupper(bin2hex(random_bytes(5))),
                'user_id' => $request->user_id,
                'generate_by' => $user->id,
                'estado' => 'Generado',
            ]);
        }

        return redirect()->route('fine_batch.index')->with('success', 'Lote de boletas asignado y generado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(FineBatch $fineBatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FineBatch $fineBatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FineBatch $fineBatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FineBatch $fineBatch)
    {
        //
    }
}
