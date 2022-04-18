<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .text-primary{color:navy}
    </style>
</head>
<body>
    <h1>Correo electrónico</h1>

    <p>Este es el primer correo electrónico que mandaré por Laravel</p>

    <p><strong>Nombre: </strong> <span class="text-primary">{{$contacto['name']}}</span></p>

    <p><strong>Correo electrónico: </strong> <span class="text-primary">{{$contacto['email']}}</span></p>

    <p><strong>Mensaje: </strong> <span class="text-primary">{{$contacto['message']}}</span></p>
    
</body>
</html>