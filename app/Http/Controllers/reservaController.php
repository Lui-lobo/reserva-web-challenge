<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\User;
use App\Models\Horario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request)
    {
        //
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
