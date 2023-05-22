<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Escribe tu nombre">
        <input type="email" name="email" placeholder="Escribe tu correo">
        <input type="password" name="password" placeholder="Escribe tu contraseña">
        <input type="password" name="password_confirmation" placeholder="Repite la contraseña">

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>