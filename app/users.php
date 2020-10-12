<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $primaryKey = 'ID';
    protected $fillable = ['Lidnummer', 'Teamnummer', 'Voornaam',
        'Tussenvoegsel', 'Achternaam', 'Emailadress',
        'Gebruikersnaam', 'IsTrainer',
        'IsAuthor', 'created_at', 'Wachtwoord'];
    public $timestamps = false;

    protected $hidden = [
        'Wachtwoord',
    ];

    public function setPasswordAttribute($wachtwoord)
    {
        $this->attributes['Wachtwoord'] = bcrypt($wachtwoord);
    }

}
