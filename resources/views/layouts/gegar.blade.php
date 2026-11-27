<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de inicio</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

    <div class="layout">


        <aside class="sidebar">

            <div class="titulo">
                <div>GEGAR <span>GYM</span></div>
            </div>

            <nav class="contenedor-navegacion">

                <a href="{{ route('gegar.inicio') }}" 
                    class="{{ request()->routeIs('gegar.inicio') ? 'seleccionado' : '' }}">
                    
                    <img src="{{ asset('icons/house.png') }}"" alt="">
                    Inicio
                </a>

                <a href="#">
                    <img src="{{ asset('icons/user-group.png') }}"" alt="">
                    Clientes
                </a>

                <a href="#">
                    <img src="{{ asset('icons/credit-card.png') }}"" alt="">
                    Membresías
                </a>

                <a href="#">
                    <img src="{{ asset('icons/wallet-minimal.png') }}"" alt="">
                    Pagos
                </a>

                <a href="#">
                    <img src="{{ asset('icons/box.png') }}"" alt="">
                    Inventario
                </a>

                <a href="#">
                    <img src="{{ asset('icons/shopping-cart.png') }}"" alt="">
                    Ventas
                </a>

                <a href="#">
                    <img src="{{ asset('icons/receipt-pound-sterling.png') }}"" alt="">
                    Gastos
                </a>

                <a href="#">
                    <img src="{{ asset('icons/square-chart-gantt.png') }}"" alt="">
                    Reportes
                </a>

            </nav>



        </aside>

        <header class="encabezado">

            <div class="ubicacion">
                <span>@yield('ubicacion', 'Inicio')</span>
            </div>

            <div class="sesion">

                <div class="perfil">
                    <img src="{{ asset('icons/circle-user-round.png') }}"" alt="">
                    <span>Administrador</span>
                </div>

                <button type="button">Cerrar sesión</button>

            </div>

        </header>


        <main class="contenido-principal">

            @yield('contenido')

        </main>
    
    
    
    
    
    </div>


    
</body>
</html>