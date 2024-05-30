<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Key;

class AuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('twitch')->scopes(['user:read:email'])->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('twitch')->user();
            // Guardar la información del usuario en la sesión
            Session::put('user', $user);

            return redirect('/');
        } catch (\Exception $e) {
            print $e->getMessage();
            // return redirect('/')->withErrors('Error al autenticar con Twitch.');
        }
    }

    public function index()
    {
        if (Session::has('user')) {
            $user = Session::get('user');
            $keys = Key::where('username', $user->name)->get();
            Key::where('username', $user->name)->update(['claimed' => true]);
            return view('profile', ['user' => $user, 'keys' => $keys]);
        } else {
            return view('welcome');
        }
    }

    public function logout(Request $request)
    {
        // Eliminar la información del usuario de la sesión
        Session::forget('user');

        // Redirigir a la página de inicio
        return redirect('/');
    }
}
