<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />
    </head>
    <body>
    <div class="main-w3layouts wrapper">
        <h1>HCAS Inloggen</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="#" method="post">
                    <input class="text" type="text" name="Lidnummer" placeholder="Lidnummer" required="">
                    <input class="text email" type="email" name="Gebruikersnaam" placeholder="Gebruikersnaam" required="">
                    <input class="text" type="password" name="Wachtwoord" placeholder="Wachtwoord" required="">
                    <div class="wthree-text">
                        <div class="clear"> </div>
                    </div>
                    <input type="submit" value="Inloggen">
                </form>
                <p>Nog geen account?<a href="#"> Registreer dan nu!</a></p>
            </div>
        </div>
    </div>
    </body>
</html>
