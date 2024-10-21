<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso Profesional de Laravel 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(45deg, #3b82f6, #9333ea, #f43f5e);
            background-size: 400% 400%; /* Efecto de movimiento de fondo */
            animation: gradient 15s ease infinite;
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.6); /* Capa translúcida */
            backdrop-filter: blur(8px); /* Desenfoque sobre el fondo */
            z-index: 0;
        }

        .container {
            position: relative;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo translúcido */
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            text-align: center;
        }

        h1 {
            color: #1a202c;
            font-size: 2.5rem;
        }

        p {
            font-size: 1.25rem;
            color: #4a5568;
        }

        .author {
            margin-top: 30px;
            font-size: 1.1rem;
            color: #3182ce;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <h1>Hola, este es el curso profesional de Laravel 11</h1>
        <p>Creado por Melo Matthew Duarte,
           <br>
           desde nivel básico a nivel pro.</p>
        <div class="author">¡Disfruta aprendiendo Laravel!</div>
    </div>
</body>
</html>
