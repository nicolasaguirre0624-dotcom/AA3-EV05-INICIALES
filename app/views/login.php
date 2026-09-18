<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema de Gestión</title>
    <link rel="stylesheet" href="../../public/css/estilo.css">
</head>
<body>

    <div class="login-container">
        <div class="login-card">
            <h2>Iniciar Sesión</h2>
            
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="usuario">Usuario o Correo Electrónico</label>
                    <input type="text" id="usuario" name="usuario" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="form-extras">
                    <label>
                        <input type="checkbox" name="remember"> Recuérdame
                    </label>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>

                <button type="submit" class="btn btn-block">Ingresar</button>
            </form>

            <div class="back-home">
                <a href="home.php">← Regresar al inicio</a>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Nombre del Proyecto. Todos los derechos reservados.</p>
    </footer>

</body>
</html>