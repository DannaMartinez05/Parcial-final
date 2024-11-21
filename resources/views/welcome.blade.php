<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bienvenidos a Mi Blog de Libros</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Estilo general de la página */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: url('https://img.freepik.com/foto-gratis/collage-fondo-pelicula_23-2149876030.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-align: center;
        }

        /* Contenedor del contenido principal */
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: rgba(0, 0, 0, 0.6); /* Fondo oscuro con transparencia */
        }

        /* Título principal */
        h1 {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        /* Botones personalizados */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            font-size: 18px;
            padding: 15px 30px;
            color: white;
            background: linear-gradient(45deg, #15e6b1, #15bea8);
            border: none;
        }

        .btn-secondary {
            font-size: 18px;
            padding: 15px 30px;
            color: white;
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            border: none;
        }

        .btn-secondary:hover {
            font-size: 18px;
            padding: 15px 30px;
            color: white;
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            border: none;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <!-- Título -->
        <h1>Bienvenidos a Mi Blog de Peliculas</h1>

        <!-- Botones de navegación (opcional) -->
        <a href="{{ route('login') }}" class="btn">Iniciar Sesión</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Registrarse</a>
    </div>
</body>
</html>