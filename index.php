<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoInventarios</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <header class="site-header">
        <h1 class="site-title">EcoInventarios</h1>
        <nav class="social-links">
            <a href="https://www.facebook.com/" target="_blank" class="social-link">
                <img src="public/img/facebook.svg" alt="Facebook" class="social-icon">
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="social-link">
                <img src="public/img/instagram.svg" alt="Instagram" class="social-icon">
            </a>
            <a href="https://twitter.com/" target="_blank" class="social-link">
                <img src="public/img/twitter.svg" alt="Twitter" class="social-icon">
            </a>
            <a href="https://www.linkedin.com/in/" target="_blank" class="social-link">
                <img src="public/img/linkedin.svg" alt="LinkedIn" class="social-icon">
            </a>
        </nav>
    </header>

    <div class="main-content">

        <div class="welcome-container">
            <div class="circle">
                <h3>Bienvenido a nuestro <br>sistema de inventarios!</h3>
            </div>
        </div>

        <div class="login-container">
            <div class="login-box">
                <h2>Iniciar Sesión</h2>
                <form action="app/controllers/process.php" method="post">
                    <label for="correo_electronico">Correo electronico: </label>
                    <input type="text" id="correo_electronico" name="correo_electronico" required>

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>

                    <div class="button-group">
                        <button type="submit">Iniciar Sesión</button>
                        <a href="app/views/register_user.php" class="button-link">Crear Usuario</a>
                    </div>
                </form>
                <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
            </div>
        </div>
    </div>
    <footer class="site-footer">
    <div class="container-footer">
        <p>Contacto: info@ecoinventarios.com | Teléfono: +1234567890</p>
        <p>Derechos de autor © 2024 EcoInventarios. Todos los derechos reservados.</p>
    </div>
</footer>
</body>
</html>
