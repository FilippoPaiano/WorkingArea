<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao {{$user_data['name']}}, grazie per averci contattato!</h1>
    <h2>Ti ricontatteremo nelle prossime 24/48h!</h2>

    <p>Il riepilogo dei tuoi dati:</p>

    <ul>
        <li>Nome: {{$user_data['name']}}</li>
        <li>Nome: {{$user_data['message']}}</li>
    </ul>

    <p>Se non hai inviato tu un'email ignora tutto.</p>
</body>
</html>