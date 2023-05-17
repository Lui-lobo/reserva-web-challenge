<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\User;
use App\Models\Horario;
use App\Models\Reserva;
use App\Models\diasdasemana;

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
        $diasDaSemana = DiasDaSemana::all(['dias_da_semana']);
        return view('reserva')->with('mesas', $mesas)->with('dias', $diasDaSemana[6]);
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
        $nome = $request->input('name');
        $horario_reservado = $request->input('horario');
        $mesa_reservada = $request->input('mesa');

        $diasDaSemana = DiasDaSemana::all(['dias_da_semana']);
        $diaDaSemana = $diasDaSemana[6];

        if($diaDaSemana === $diasDaSemana[0]) {
            return redirect()->back()->withErrors(['message' => 'Não é possível realizar reservas de domingo']);
        } else {
            if(Reserva::where('horario_reservado', $horario_reservado)->exists() && Reserva::where('mesa_reservada', $mesa_reservada)->exists()) {
                return redirect()->back()->withErrors(['message' => 'O horario já está reservado, por favor selecione outro']);
            }
          
    
            Reserva::create([
                'reserva' => $cliente,
                'nome_do_cliente' => $nome,
                'mesa_reservada' => $request->input('mesa'),
                'horario_reservado' => $request->input('horario'),
                'preco_hora' => $request->input('valor'),
                'status_id' => 1
            ]);
            return redirect()->back()->with(['message' => 'Sua reserva foi realizada com sucesso']);
        }
       
        

        
        

      
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
