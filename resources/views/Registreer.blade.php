<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registreren</title>
</head>
<body>
<div class="main-w3layouts wrapper">
    <h1>HCAS Registreren</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form method="POST" action="/register">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Lidnummer">Lidnummer:</label>
                    <input type="number" class="form-control" id="Lidnummer" name="Lidnummer">
                </div>

                <div class="form-group">
                    <label for="Teamnummer">Teamnummer:</label>
                    <input type="text" class="form-control" id="Teamnummer" name="Teamnummer">
                </div>

                <div class="form-group">
                    <label for="Voornaam">Voornaam:</label>
                    <input type="text" class="form-control" id="Voornaam" name="Voornaam">
                </div>

                <div class="form-group">
                    <label for="Tussenvoegsel">Tussenvoegsel:</label>
                    <input type="text" class="form-control" id="Tussenvoegsel" name="Tussenvoegsel">
                </div>

                <div class="form-group">
                    <label for="Achternaam">Achternaam:</label>
                    <input type="text" class="form-control" id="Achternaam" name="Achternaam">
                </div>

                <div class="form-group">
                    <label for="Emailadress">Emailadress:</label>
                    <input type="email" class="form-control" id="Emailadress" name="Emailadress">
                </div>

                <div class="form-group">
                    <label for="Gebruikersnaam">Gebruikersnaam:</label>
                    <input type="text" class="form-control" id="Gebruikersnaam" name="Gebruikersnaam">
                </div>

                <div class="form-group">
                    <label for="Wachtwoord">Wachtwoord:</label>
                    <input type="password" class="form-control" id="Wachtwoord" name="Wachtwoord">
                </div>

                <div class="form-group">
                    <label for="Wachtwoord_Herhalen">Wachtwoord Herhalen:</label>
                    <input type="password" class="form-control" id="Wachtwoord_Herhalen"
                           name="Wachtwoord_Herhalen">
                </div>

                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <p>Heb je al een account?<a href="/"> Log dan hier in!</a></p>
        </div>
    </div>
</div>
</body>
</html>
