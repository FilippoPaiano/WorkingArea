<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao Admin, abbiamo ricevuto un nuovo contatto!</h1>
    <h2>Rispondigli appena puoi!</h2>

    <p>I dati dell'utente:</p>
    <ul>
        <li>Nome: {{$user_data['name']}}</li>
        <li>Email: {{$email}}</li>
        <li>Mesage: {{$user_data['message']}}</li>
    </ul>

    <p>Buon Lavoro!</p>
</body>
</html>