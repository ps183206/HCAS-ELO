<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;


class RegisterController extends Controller
{
    public function store()
    {
        users::create(request(['Lidnummer', 'Teamnummer', 'Voornaam', 'Tussenvoegsel', 'Achternaam', 'Emailadress', 'Gebruikersnaam', 'Wachtwoord',]));

        return redirect()->to('/');
    }

}
