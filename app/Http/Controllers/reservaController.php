<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\User;
use App\Models\Horario;
use App\Models\Reserva;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class reservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesas = Mesa::all();
        return view('reserva')->with('mesas', $mesas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $user = Auth::user();
        $horario = Horario::all();
        $mesas = Mesa::find($id);
        return view('criarReserva')->with('mesas', $mesas)->with('user', $user)->with('horario', $horario);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $user = Auth::user();
        $cliente = "Reserva_Cliente";
        $horario = Horario::find($id);
        $mesas = Mesa::find($id);
        $input = $request;
        $nome_do_cliente = $request->input('name');
    
            Reserva::create([
                'reserva' => $cliente,
                'nome_do_cliente' => $nome_do_cliente,
                'mesa_reservada' => $request->input('mesa'),
                'horario_reservado' => $request->input('horario'),
                'preco_hora' => $request->input('valor'),
                'status_id' => 1
            ]);
            return redirect()->back();
        

      
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
