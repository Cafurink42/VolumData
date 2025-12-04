<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\EntradaData;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function store(Request $request){
        $request->validate([
            'transportadora' => 'required|string|max:255', 
            'produto' => 'required|string|max:255',
            'peso_entrada' => 'required|integer',
            'data_entrada' => 'required|date',
            'motorista' => 'required|string|max:255',
            'placa_veiculo' => 'required|string|max:255',
            'empresa_origem' => 'required|string|max:255',
            'empresa_destino' => 'required|string|max:255'
        ]);

        EntradaData::create([
            'transportadora' => $request->transportadora,
            'produto' => $request->produto,
            'peso_entrada' => $request->peso_entrada,
            'data_entrada' => $request->data_entrada,
            'motorista'=> $request->motorista,
            'placa_veiculo' => $request->placa_veiculo,
            'empresa_origem' => $request->empresa_origem,
            'empresa_destino' => $request->empresa_destino
        ]);

        return redirect()->back()->with('sucess', 'Carga de entrada registrada com sucesso!');
    }


}
