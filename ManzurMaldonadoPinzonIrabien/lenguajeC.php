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
    <title>Lenguaje C | La Codeteca</title>

    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="dark.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>La Codeteca</title>
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
            <h1>Lenguaje de Programación C</h1>
            <p>Descubre el lenguaje que revolucionó el desarrollo de sistemas y sentó las bases de la programación
                moderna</p>
        </div>
    </section>

    <main class="main-container">
        <div>
            <article class="article">
                <img src="imagenes/Lenguaje-de-programacion-C.webp" alt="Lenguaje C">
                <h2>¿Qué es el lenguaje C?</h2>
                <p>C es un lenguaje de programación de propósito general creado en 1972 por Dennis Ritchie en los
                    Laboratorios Bell. Es uno de los lenguajes más influyentes de la historia de la computación,
                    conocido por su eficiencia y control directo sobre el hardware.</p>
                <p>Desarrollado originalmente para el sistema operativo UNIX, C se ha convertido en uno de los lenguajes
                    más utilizados de todos los tiempos, sirviendo como base para otros lenguajes populares como C++,
                    Java y Python.</p>
                <p>El lenguaje C se caracteriza por su capacidad de manipular directamente la memoria y su estructura de
                    datos, lo que permite a los programadores escribir código altamente optimizado y eficiente. Además,
                    al ser un lenguaje compilado, el código en C suele ejecutarse de manera rápida y con un menor
                    consumo de recursos.</p>


            </article>

            <div class="related">
                <h3>Artículos Relacionados</h3>
                <div class="related-grid">
                    <div class="card">
                        <a
                            href="https://sites.google.com/site/programacioniiuno/temario/unidad-2---tipo-abstracto-de-dato/estructuras-de-datos-definidas-por-el-usuario-en-c">
                            <img src="imagenes/estructuras-de-datos.jpg" alt="Estructura de Datos">
                        </a>
                        <div class="card-content">
                            <h4>Estructuras de Datos en C</h4>
                            <p>Aprende sobre arrays, punteros, estructuras y más.</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="https://www.euroinnova.com/blog/programacion-de-sistemas">
                            <img src="imagenes/desarrollo-sistemas-informaticos.png" alt="Programación Sistema">
                        </a>
                        <div class="card-content">
                            <h4>Programación de Sistemas</h4>
                            <p>Descubre cómo C te permite programar a bajo nivel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="sidebar">
            <div class="sidebar-content">
                <h3>Temas Populares</h3>
                <a href="programacion_es.php" class="topic-link">
                    <h4>Programación Estructurada</h4>
                    <p>Fundamentos y conceptos básicos.</p>
                </a>
                <a href="poo.php" class="topic-link">
                    <h4>Programacion Orientada a Objetos</h4>
                    <p>Un paradigma que organiza el código en objetos.</p>
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
                    <p>Tu recurso definitivo para aprender C</p>
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