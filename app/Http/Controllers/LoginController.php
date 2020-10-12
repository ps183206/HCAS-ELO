<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class LoginController extends Controller
{
    public function store()
    {
        if (auth()->attempt(request(['Gebruikersnaam', 'Wachtwoord'])) == false) {
            return back()->withErrors([
                'message' => 'Naam of Wachtwoord is fout, probeer alstublieft opnieuw'
            ]);
        }

        return redirect()->to('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->to('/');
    }

}
