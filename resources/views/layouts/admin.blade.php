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
            font-family: 'Press Start 2P', cursive;
            background-color: #1b1b1b;
            color: #fff;
            font-size: 14px; /* Ajuste o tamanho da fonte conforme necessário */
            line-height: 1.6; /* Ajuste o espaçamento entre linhas */
        }
        header {
            background-color: #282c34;
            padding: 10px 0;
        }
        .nav-link {
            color: #61dafb !important;
            font-size: 16px; /* Ajuste o tamanho da fonte dos links */
        }
        .nav-link:hover {
            color: #21a1f1 !important;
        }
        .btn-outline-light {
            border-color: #61dafb;
            color: #61dafb;
            font-size: 14px; /* Ajuste o tamanho da fonte dos botões */
        }
        .btn-outline-light:hover {
            background-color: #61dafb;
            color: #282c34;
        }
        .card {
            background-color: #2c2f33;
            border: 1px solid #61dafb;
            margin-bottom: 20px; /* Espaçamento inferior entre cartões */
        }
        .card-header {
            background-color: #61dafb;
            color: #282c34;
            font-size: 18px; /* Ajuste o tamanho da fonte do cabeçalho do cartão */
            padding: 10px; /* Espaçamento interno do cabeçalho */
        }
        .table-dark {
            background-color: #2c2f33;
        }
        .table-dark th,
        .table-dark td {
            border-color: #61dafb;
            color: #fff;
            font-size: 14px; /* Ajuste o tamanho da fonte das células da tabela */
            padding: 10px; /* Espaçamento interno das células da tabela */
        }
        .table-hover tbody tr:hover {
            background-color: #3a3d42;
        }
    </style>

    <title>Projeto</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2">Home</a></li>
                    <li><a href="{{ route('jogo.listar') }}" class="nav-link px-2">Contas</a></li>
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
