<?php

use App\Http\Controllers\reservaController;
use App\Models\Horario;
use App\Models\Mesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Reserva;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//============================= Criando Cadastro de usuario e login fora de controllers ================================

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function(Request $credenciais) {
   $credenciais = [
    'email' => $credenciais->email,
    'password' => $credenciais->password
   ];

   if(Auth::attempt($credenciais)) {
    return redirect('/reserva')->with('success', 'Você foi logado com sucesso');
   }
   
   return back()->with('error', 'Email ou senha incorretos');
});

Route::get('/auth/register', function() {
    return view('register');
});

Route::post('/register', function(Request $informacoes){
    User::create([
        'name' => $informacoes->name,
        'email' => $informacoes->email,
        'password' => Hash::make($informacoes->password)
    ]);
    echo 'usuario criado com sucesso';
    return redirect()->back()->with('message', 'Usuario Cadastrado com Sucesso');
});

Route::resource('/reserva', reservaController::class);

Route::get('/reserva/reservar/{id}', [reservaController::class, 'create']);
Route::post('/reserva/reservar/{id}', [reservaController::class, 'store']);

Route::get('/dashboard', function() {
    $reserva = Reserva::all();
    $mesas = Reserva::all(['mesa_reservada']);
    $horarios = Reserva::all(['horario_reservado']);
    $horario = Horario::find($horarios);
    $mesa = Mesa::find($mesas);
    $User = User::find($reserva);
    
    return view('dashboard')->with('reservas', $reserva)->with('mesa', $mesa)->with('user', $User)->with('horario', $horario);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
