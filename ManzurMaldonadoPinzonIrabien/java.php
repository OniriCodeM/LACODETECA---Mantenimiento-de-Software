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
    <title>Java | La Codeteca</title>

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
            <h1>Java</h1>
            <p>Descubre uno de los lenguajes más versátiles y demandados en el desarrollo de software empresarial</p>
        </div>
    </section>

    <main class="main-container">
        <div>
            <article class="article">
                <img src="imagenes/java-concurrency.png" alt="Java Programming">
                <h2>¿Qué es Java?</h2>
                <p>Java es un lenguaje de programación orientado a objetos, diseñado en 1995 por Sun Microsystems (ahora
                    propiedad de Oracle). Su principal característica es "Write Once, Run Anywhere" (WORA), lo que
                    significa que el código Java puede ejecutarse en cualquier plataforma que tenga instalada la Máquina
                    Virtual de Java (JVM).</p>
                <p>Una de las fortalezas de Java es su robustez y seguridad, lo que lo convierte en un lenguaje muy
                    utilizado en
                    aplicaciones empresariales y sistemas críticos. La gestión automática de memoria a través del
                    recolector de basura
                    ayuda a evitar errores comunes de programación, lo que hace que el desarrollo sea más seguro y
                    estable.</p>

                <p>Además, Java cuenta con una gran biblioteca estándar y una amplia comunidad de desarrolladores, lo
                    que facilita el
                    acceso a recursos, herramientas y documentación. Esto ha permitido que Java evolucione y mantenga su
                    relevancia a
                    lo largo de los años, siendo una opción popular tanto en aplicaciones de escritorio como en
                    servidores y dispositivos
                    móviles.</p>
            </article>

            <div class="related">
                <h3>Artículos Relacionados</h3>
                <div class="related-grid">
                    <div class="card">
                        <a href="https://spring.io/projects/spring-framework">
                            <img src="imagenes/Spring-Framework.png" alt="Spring Framework">
                        </a>
                        <div class="card-content">
                            <h4>Spring Framework</h4>
                            <p>El framework más popular para desarrollo empresarial en Java.</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="https://developer.android.com/studio/write/create-java-class?hl=es-419">
                            <img src="imagenes/logo.002.webp" alt="Android Development">
                        </a>
                        <div class="card-content">
                            <h4>Desarrollo Android</h4>
                            <p>Crea aplicaciones móviles nativas con Java.</p>
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
                <a href="lenguajeC.php" class="topic-link">
                    <h4>Lenguaje C</h4>
                    <p>El lenguaje que revolucionó la programación.</p>
                </a>
                <a href="python.php" class="topic-link">
                    <h4>Python</h4>
                    <p>Un lenguaje versátil y fácil de aprender.</p>
                </a>
                <a href="ide.php" class="topic-link">
                    <h4>IDEs</h4>
                    <p>Entorno de Desarrollo Integrado.</p>
                </a>
            </div>
        </aside>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div>
                    <h4>La Codeteca</h4>
                    <p>Tu fuente de recursos para aprender Java</p>
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