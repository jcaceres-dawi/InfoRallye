<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'InfoRallye')</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        :root {
            --rojo-rallye: #E10600;
            --negro-carbon: #1C1C1C;
            --blanco-puro: #FFFFFF;
            --gris-claro: #F4F4F4;
            --gris-oscuro: #888888;
        }

        body {
            background-color: var(--gris-claro);
            color: var(--negro-carbon);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: var(--negro-carbon) !important;
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
            min-height: 48px;
        }

        .navbar-brand {
            color: var(--blanco-puro) !important;
            font-size: 1.50rem;
        }

        .nav-link {
            color: var(--blanco-puro) !important;
            font-size: 1.05rem;
            padding: 0.25rem 0.5rem;
        }

        .navbar-brand:hover {
            color: var(--rojo-rallye) !important;
        }

        .nav-link:hover {
            color: var(--rojo-rallye) !important;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0;
        }

        h1 {
            color: var(--rojo-rallye);
        }

        .btn-primary {
            background-color: var(--rojo-rallye);
            border-color: var(--rojo-rallye);
        }

        .btn-primary:hover {
            background-color: #c00500;
            border-color: #c00500;
        }

        .container {
            padding-top: 2rem;
            padding-bottom: 2rem;
            flex: 1;
        }

        .footer {
            background-color: var(--negro-carbon);
            color: var(--gris-oscuro);
            font-size: 0.85rem;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
        }

        .footer p {
            margin: 0;
            color: var(--gris-oscuro);
        }

        .footer img {
            filter: brightness(0) invert(1);
        }

        .footer a {
            color: var(--gris-oscuro);
            text-decoration: none;
            margin-right: 1rem;
        }

        .footer a:hover {
            color: var(--rojo-rallye);
        }

        .dropdown-menu {
            background-color: var(--blanco-puro);
        }

        .dropdown-menu .dropdown-item {
            color: var(--negro-carbon);
        }

        .dropdown-menu .dropdown-item:hover {
            color: var(--rojo-rallye);
            background-color: transparent;
        }
    </style>
    @yield('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logo_recortado.png') }}" alt="InfoRallye Logo" style="height: 55px; border-radius: 5px;" class="me-2">
                InfoRallye</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('competitors.index') }}">Competidores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teams.index') }}">Equipos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('calendar.index') }}">Calendario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rankings.index') }}">Clasificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Contacto</a>
                    </li>

                    @if(session('admin_authenticated'))
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning fw-bold" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.login') }}">Panel</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Cerrar sesión</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer mt-auto">
        <div class="container d-flex flex-column justify-content-between align-items-center">
            <div>
                <p class="mb-0">&copy; {{ date('Y') }} InfoRallye. Todos los derechos reservados.</p>
                <p class="mb-0">
                    Soporte: soporteinforallye@gmail.com
                    <a href="{{ url('/admin') }}" class="ms-2" title="Panel de Administración">
                        <i class="fas fa-user-gear"></i>
                    </a>
                </p>
            </div>
            <div class="mt-3 mt-md-0">
                <a href="https://www.facebook.com/" target="_blank" class="me-3">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="https://twitter.com/" target="_blank" class="me-3">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="me-3">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @stack('scripts')
</body>

</html>