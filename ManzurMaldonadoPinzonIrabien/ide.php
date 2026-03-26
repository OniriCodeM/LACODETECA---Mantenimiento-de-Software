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
    <title>IDEs de Desarrollo | La Codeteca</title>

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
            <h1>Entornos de Desarrollo Integrado (IDEs)</h1>
            <p>Descubre cómo los IDEs modernos transforman la manera de escribir, depurar y mantener código</p>
        </div>
    </section>

    <main class="main-container">
        <div>
            <article class="article">
                <img src="imagenes/Que-es-un-IDE.png" alt="Modern IDE Interface">
                <h2>¿Qué es un IDE?</h2>
                <p>Un IDE (Integrated Development Environment) es una aplicación que proporciona servicios integrales
                    para facilitar el desarrollo de software. Combina herramientas fundamentales como editor de código,
                    compilador, depurador y constructor de interfaz gráfica en una única aplicación.</p>
                <h5 class="as">¿Por qué los desarrolladores utilizan los IDE?</h5>
                <p>Los IDE permiten que los desarrolladores comiencen a programar aplicaciones nuevas con rapidez, ya
                    que no necesitan establecer ni integrar manualmente varias herramientas como parte del proceso de
                    configuración. Tampoco es necesario que pasen horas aprendiendo a utilizar diferentes herramientas
                    por separado, gracias a que todas están representadas en la misma área de trabajo. Esto resulta muy
                    útil al incorporar desarrolladores nuevos, porque pueden confiar en un IDE para ponerse al día con
                    los flujos de trabajo y las herramientas estándares de un equipo.</p>
                <p>Otras funciones comunes del IDE se encargan de ayudar a los desarrolladores a organizar su flujo de
                    trabajo y solucionar problemas. Los IDE analizan el código mientras se escribe, así que las fallas
                    causadas por errores humanos se identifican en tiempo real. Gracias a que hay una sola GUI que
                    representa todas las herramientas, los desarrolladores pueden ejecutar tareas sin tener que pasar de
                    una aplicación a otra.</p>


            </article>

            <div class="related">
                <h3>IDEs Populares</h3>
                <div class="related-grid">
                    <div class="card">
                        <a href="https://eclipseide.org/">
                            <img src="imagenes/images (1).jpeg" alt="Visual Studio Code">
                        </a>
                        <div class="card-content">
                            <h4>Eclipse</h4>
                            <p>IDE ligero y potente con amplio soporte de extensiones.</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="https://www.jetbrains.com/es-es/ides/">
                            <img src="imagenes/images.jpeg" alt="JetBrains IDEs">
                        </a>
                        <div class="card-content">
                            <h4>IDEs de JetBrains</h4>
                            <p>Suite profesional especializada por lenguaje.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <aside class="sidebar">
            <div class="sidebar-content">
                <h3>Temas Relacionados</h3>
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
                    <p>Tu guía para dominar las herramientas de desarrollo</p>
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