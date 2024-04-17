<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User Page</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <header class="site-header">
        <h1 class="site-title">EcoInventarios</h1>
        <nav class="social-links">
            <a href="https://www.facebook.com/" target="_blank" class="social-link">
                <img src="../../public/img/facebook.svg" alt="Facebook" class="social-icon">
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="social-link">
                <img src="../../public/img/instagram.svg" alt="Instagram" class="social-icon">
            </a>
            <a href="https://twitter.com/" target="_blank" class="social-link">
                <img src="../../public/img/twitter.svg" alt="Twitter" class="social-icon">
            </a>
            <a href="https://www.linkedin.com/in/" target="_blank" class="social-link">
                <img src="../../public/img/linkedin.svg" alt="LinkedIn" class="social-icon">
            </a>
        </nav>
    </header>

    <div class="main-content">

        <div class="register-p-container">
            <div class="register-p-box">
                <p>Lleva una mejor organización de tu empresa</p>
                <br>
                <p>Crea tu cuenta y conoce un sistema que te facilitará el control de tu inventario.</p>
            </div>
        </div>

        <div class="register-container">
            <div class="register-box">
                <h2>Crear Usuario</h2>
                <form action="#" method="post">
                    <label for="correo_electronico">Correo electronico: </label>
                    <input type="text" id="correo_electronico" name="correo_electronico" required>

                    <label for="nombre_empresa">Nombre empresa: </label>
                    <input type="text" id="nombre_empresa" name="nombre_empresa" required>

                    <label for="nit">N° nit empresa: </label>
                    <input type="text" id="nit" name="nit" required>

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>

                    <div class="button-group">
                        <button type="submit">Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="site-footer">
    <div class="container">
        <p>Contacto: info@ecoinventarios.com | Teléfono: +1234567890</p>
        <p>Derechos de autor © 2024 EcoInventarios. Todos los derechos reservados.</p>
    </div>
</footer>
</body>
</html>
