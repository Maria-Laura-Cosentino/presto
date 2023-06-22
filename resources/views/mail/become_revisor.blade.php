<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
</head>
<body>
    <div>
        <h1>Un utente ha richiesto di lavorare con noi</h1>
        <h2>Ecco i suoi dati:</h2>
        <p>Nome: {{$request->name}}</p>
        <p>Cognome: {{$request->surname}}</p>
        <p>Email: {{$request->email}}</p>
        <p>Motivazione: {{$request->motivazione}}</p>
        <p>Se vuoi renderlo revisore clicca qui:</p>
        <a href="{{route('make.revisor', compact ('user'))}}">Rendi revisore</a>
    </div>
</body>
</html>