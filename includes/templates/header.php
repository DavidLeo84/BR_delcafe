<?php
if (!isset($_SESSION)) {
    session_start();
}
$autenticar = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="../../build/css/app.css">

</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">

                <?php if ($autenticar) : ?>
                    <a href="/admin/index.php">
                    <?php endif; ?>

                    <?php if (!$autenticar) : ?>
                        <a href="/index.php">
                        <?php endif; ?>
                        <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
                        </a>
                        <div class="mobile-menu">
                            <img src="build/img/barras.svg" alt="icono menu responsive">
                        </div>
                        <div class="derecha">

                            <img class="dark-mode-boton bright-mode-boton" src="build/img/dark-mode.svg">

                            <nav class="navegacion">
                                <a href="nosotros.php">Nosotros</a>
                                <a href="anuncios.php">Anuncios</a>
                                <a href="blog.php">Blog</a>
                                <a href="contacto.php">Contacto</a>
                                <?php if ($autenticar) : ?>
                                    <a href="   cerrar-sesion.php">Cerrar Sesión</a>
                                <?php endif; ?>

                                <?php if (!$autenticar) : ?>

                                    <ul class="desplegable">
                                        <li class="alinear-li"><a href="">Iniciar Sesión</a>

                                            <ul class="desple">
                                                <li><a href="login.php">Sesión Administrador</a></li>
                                                <li><a href="login_usuario.php">Sesión Usuario</a></li>
                                            </ul>

                                        </li>

                                    </ul>


                                <?php endif; ?>
                            </nav>



                        </div>
            </div><!--.barra-->
            <?php if ($inicio) { ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>
        </div>
    </header>