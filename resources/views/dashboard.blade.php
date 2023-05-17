@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

<x-menu-lateral  />

<main>
    <div class="height-100 bg-light">
        <div class="container-fluid d-flex align-items-center justify-content-center flex-wrap">
        
        <table class="table  table-striped">
            <tbody>
                <tr>
                <th scope="row">Cliente |</th>
                @foreach($reservas as $item)
                    @foreach($user as $usuario)
                        <td>{{$usuario->name}}</td><br>
                    @endforeach
                @endforeach
                </tr>
                <tr>
                <th scope="row">Mesa |</th>
                    @foreach($mesa as $itemMesa)
                        <td>{{$itemMesa->mesa}}</td><br>
                    @endforeach
                </tr>
                <tr>
                <th scope="row"> Horario Reservado| </th>
                @foreach($reservas as $item)
                    @foreach($horario as $horarioReserva)
                        <td>{{$horarioReserva->horarios_disponiveis}}</td><br>
                    @endforeach
                @endforeach
                </tr>
                <tr>
                <th scope="row">Horario e Dia da Reserva | </th>
                @foreach($reservas as $item)
                    <td>{{$item->created_at}}</td><br>
                @endforeach()
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</main>

@endsection