<?php
session_start();
error_reporting(0);
$sesion = $_SESSION['nombre_s'];
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación Estructurada | La Codeteca</title>

    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="dark.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="shortcut icon" href="imagenes/code-6127616_960_720 (1).webp">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <svg class="svg-icon" viewBox="0 0 24 24">
                <path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
            </svg>
            <h5>La Codeteca</h5>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="libros.php">Libros</a></li>
                <li><a href="comunidad.php">Comunidad</a></li>
                <li><a href="cursos.php">Cursos</a></li>

                <li class="dropdown">
                    <?php if (empty($sesion)): ?>
                    <button class="dropdown-button">Invitado</button>
                    <?php else: ?>
                    <button class="dropdown-button">
                        <?php echo htmlspecialchars($sesion); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                    </button>
                    <?php endif; ?>

                    <div class="dropdown-content">
                        <?php if (empty($sesion)): ?>
                        <a href="Registro.php">Registrarse</a>
                        <?php else: ?>
                        <a href="cerrarSesion.php">Cerrar sesión</a>
                        <?php endif; ?>
                    </div>
                </li>
            </ul>
            <button class="switch" id="switch">
                <span><i class="fas fa-sun"></i></span>
                <span><i class="fas fa-moon"></i></span>
            </button>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-container">
            <h1>Programación Estructurada</h1>
            <p>Descubre el paradigma fundamental que revolucionó la forma de escribir código claro, mantenible y
                eficiente</p>
        </div>
    </section>

    <main class="main-container">
        <div>
            <article class="article">
                <img src="imagenes/programador.png" alt="Programación Estructurada">
                <h2>¿Qué es la Programación Estructurada?</h2>
                <p>La programación estructurada es un paradigma de programación orientado a mejorar la claridad, calidad
                    y tiempo de desarrollo de los programas computacionales. Surgió en la década de 1960 como una
                    alternativa al código espagueti, promoviendo el uso de subrutinas, bloques y estructuras de control.
                </p>
                <p>La programación estructurada se convierte así, junto con la programación orientada a objetos, en uno
                    de los paradigmas de programación más populares que ejecuta los lenguajes más potentes que seguro
                    conoces, incluidos, entre otros, Java, C, Python y C++.</p>
                <h5 class="as">Características y ventajas</h5>
                <p>El teorema del programa estructurado es la base teórica sobre la que se construyó esta nueva forma
                    de programar, ya que nos da la característica fundamental de la programación estructurada. Postula
                    que, simplemente con la combinación de tres estructuras básicas, es suficiente para expresar
                    cualquier función computable.</p>
                <p>Los programas desarrollados con la programación estructurada son más sencillos de entender,
                    ya que tienen una estructura secuencial y desaparece la necesidad de rastrear los complejos saltos
                    de líneas propios de la sentencia Goto dentro de los bloques de código para intentar comprender la
                    lógica interna.&nbsp;</p>

            </article>

            <div class="related">
                <h3>Artículos Relacionados</h3>
                <div class="related-grid">
                    <div class="card">
                        <a href="https://mpru.github.io/introprog/estructuras-de-control.html">
                            <img src=" imagenes/hq720.jpg" alt="Estructuras de Control">
                        </a>
                        <div class="card-content">
                            <h4>Estructuras de Control</h4>
                            <p>Domina los bloques fundamentales: if, while, for y switch.</p>
                        </div>
                    </div>
                    <div class="card">
                        <a
                            href="https://aprendeitonline.com/cursos/introduccion-programacion/lecciones/programacion-entidades-comunes/temas/programacion-funciones-procedimientos/">
                            <img src="imagenes/3.jpeg" alt="Funciones y Procedimientos">
                        </a>
                        <div class="card-content">
                            <h4>Funciones y Procedimientos</h4>
                            <p>Aprende a modularizar tu código eficientemente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="sidebar">
            <div class="sidebar-content">
                <h3>Temas Populares</h3>
                <a href="ide.php" class="topic-link">
                    <h4>IDEs</h4>
                    <p>Entorno de Desarrollo Integrado.</p>
                </a>
                <a href="lenguajeC.php" class="topic-link">
                    <h4>Lenguaje C</h4>
                    <p>El lenguaje que revolucionó la programación.</p>
                </a>
                <a href="python.php" class="topic-link">
                    <h4>Python</h4>
                    <p>Un lenguaje versátil y fácil de aprender.</p>
                </a>
                <a href="java.php" class="topic-link">
                    <h4>Java</h4>
                    <p>Un lenguaje robusto, ampliamente usado en aplicaciones y móviles.</p>
                </a>
            </div>
        </aside>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div>
                    <h4>La Codeteca</h4>
                    <p>Tu guía para dominar la programación estructurada</p>
                </div>
                <div>
                    <h4>Contacto</h4>
                    <p>LaCodeteca@gmail.com</p>
                </div>
                <div>
                    <h4>Enlaces</h4>
                    <ul class="footer-links">
                        <li><a href="#">Sobre Nosotros</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                        <li><a href="#">Términos y Condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 La Codeteca. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
<script src="script.js"></script>

</html>