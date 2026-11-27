<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

    <main>

        <div class="contenedor-login">

            <div class="encabezado">
                <div class="logo">
                    GEGAR <span>GYM</span>
                </div>
                
                <h1>Iniciar sesión</h1>
                <p>Accede al sistema de gestión Gegar Gym</p>
            </div>

            <form class="formulario" method="post">

                <div class="campo">
                    <label for="nombreUsuario">
                        Nombre de usuario <span>*</span>
                    </label>

                    <div class="contenedor-input">

                        <img src="{{ asset('icons/user.png') }}"" alt="">

                        <input type="text" id="nombreUsuario"
                                name="nombreUsuario"
                                placeholder="Ingrese su nombre de usuario"
                                required
                                autocomplete="username">
                    </div>

                </div>


                
                <div class="campo">

                    <label for="contraseña">Contraseña <span>*</span></label>
                    <div class="contenedor-input campo-password">
                        
                        <img src="{{ asset('icons/lock.png') }}"" alt="">

                        <input type="password" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" autocomplete="current-password" required>
                        <button type="button" aria-label="Mostrar contraseña"><img src="{{ asset('icons/eye.png') }}"" alt=""></button>
                    </div>

                </div>

                <a href="#">¿Olvidó su contraseña?</a>
                <button type="submit">Iniciar sesión</button>
            </form>

            <footer class="pie-login">
                <p>Sistema de gestión Gegar Gym</p>
            </footer>
            

            




        </div>


    </main>

</body>
</html>