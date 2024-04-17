<?php
$currentPage = 'register.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="logo">
            <img src="../../public/img/logo.svg" alt="Logo">
            <h2>EI</h2>
        </div>
        <div class="datetime">
            <p><?php echo date("Y-m-d"); ?> <span id="local-time"></span></p>
        </div>
        <nav class="main-menu">
            <ul>
            <li><a href="home.php" class="<?php echo ($currentPage === 'home.php') ? 'active' : ''; ?>">Estadísticas</a></li>
            <li><a href="register.php" class="<?php echo ($currentPage === 'register.php') ? 'active' : ''; ?>">Registro</a></li>
            </ul>
        </nav>
        <div class="user-menu">
            <img src="../../public/img/empresa-logo.svg" alt="Logo Empresa" class="company-logo">
            <span class="username">Nombre Empresa</span>
            <span class="arrow">&#9660;</span>
            <div class="dropdown-content">
                <a href="#">Configuración</a>
                <a href="#">Perfil</a>
                <a href="#">Cerrar Sesión</a>
            </div>
        </div>
    </header>

    <div class="grid-container-three">
        <a href="">
            <div class="grid-item-three">
                <p>Productos</p>
            </div>
        </a>
        
        <a href="">
            <div class="grid-item-three">
                <p>Categorias</p>
            </div>
        </a>

        <a href="">
            <div class="grid-item-three">
                <p>Ventas</p>
            </div>
        </a>

        <a href="">
            <div class="grid-item-three">
                <p>reporte ventas</p>
            </div>
        </a>

        <a href="">
            <div class="grid-item-three">
                <p>Inventario</p>
            </div>
        </a>
    </div>

<script>
      function updateLocalTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            var localTime = hours + ':' + minutes + ' ' + ampm;

            document.getElementById('local-time').textContent = localTime;
        }

        updateLocalTime();

        setInterval(updateLocalTime, 1000);
</script>    
<script>
const menuLinks = document.querySelectorAll('.main-menu a');

menuLinks.forEach(link => {
    link.addEventListener('click', function() {
        menuLinks.forEach(link => {
            link.classList.remove('active');
        });
        this.classList.add('active');
    });
});
</script>

</body>
</html>
