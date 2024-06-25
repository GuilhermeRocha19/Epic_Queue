<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', cursive;
            background-color: #1b1b1b;
            color: #fff;
        }
        header {
            background-color: #282c34;
        }
        .nav-link {
            color: #61dafb !important;
        }
        .nav-link:hover {
            color: #21a1f1 !important;
        }
        .btn-outline-light {
            border-color: #61dafb;
            color: #61dafb;
        }
        .btn-outline-light:hover {
            background-color: #61dafb;
            color: #282c34;
        }
        .card {
            background-color: #2c2f33;
            border: 1px solid #61dafb;
        }
        .card-header {
            background-color: #61dafb;
            color: #282c34;
        }
        .table-dark {
            background-color: #2c2f33;
        }
        .table-hover tbody tr:hover {
            background-color: #3a3d42;
        }
        label,dt, dd{
            color: white;
        }
    </style>

    <title>Projeto</title>
</head>

<body>
    <header class="p-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2">Home</a></li>
                    <li><a href="{{ route('jogo.listar') }}" class="nav-link px-2">Jogos</a></li>
                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                </div>
            </div>
        </div>
    </header>

    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
