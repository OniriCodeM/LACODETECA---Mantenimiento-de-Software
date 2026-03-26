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
    <title>Python | La Codeteca</title>

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
            <h1>Python</h1>
            <p>Explora el lenguaje de programación más versátil y accesible, perfecto para desarrollo web, ciencia de
                datos, IA y automatización</p>
        </div>
    </section>

    <main class="main-container">
        <div>
            <article class="article">
                <img src="imagenes/python1.png" alt="Python Programming">
                <h2>¿Qué es Python?</h2>
                <p>Python es un lenguaje de programación de alto nivel, interpretado y de propósito general, creado por
                    Guido van Rossum y lanzado en 1991. Su filosofía de diseño enfatiza la legibilidad del código con el
                    uso de sangría significativa y una sintaxis limpia, lo que lo hace ideal tanto para principiantes
                    como para expertos.</p>

                <h5 class="as">¿Cómo usar Python?</h5>
                <p>Usar Python requiere (antes que nada) instalar el software en tu computadora o dispositivo
                    inteligente compatible. A partir de ese punto, existen muchas maneras de usar Python. La más común
                    es utilizarlo con marcos de trabajo como Django y Flask, que hacen mucho más sencillo el empleo de
                    Python al programar software.</p>
                <p>Existen varios tipos distintos de marcos de trabajo, o frameworks diseñados para aprovechar los
                    beneficios de Python para necesidades específicas. Por ejemplo, Django y Flask asisten en el
                    desarrollo de aplicaciones web.</p>
                <h5 class="as">¿Para qué se usa Python?</h5>
                <p>La respuesta corta es: para todo. Python está en todo, desde programación de instrumentos hasta
                    software de computadoras, desarrollo web y aplicaciones móviles. Incluso, te permite hacer
                    comentarios para que tengas recordatorios para funciones futuras o indicar problemas en una línea de
                    código.</p>
            </article>

            <div class="related">
                <h3>Artículos Relacionados</h3>
                <div class="related-grid">
                    <div class="card">
                        <a href="https://learn.microsoft.com/es-es/training/modules/explore-analyze-data-with-python/">
                            <img src="imagenes/stat-670x400.jpg" alt="Data Science with Python">
                        </a>
                        <div class="card-content">
                            <h4>Ciencia de Datos con Python</h4>
                            <p>Descubre las principales librerías: NumPy, Pandas y Scikit-learn.</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="https://developer.mozilla.org/es/docs/Learn/Server-side/Django">
                            <img src="imagenes/Python-y-Django-Herramientas-esenciales-para-el-desarrollo-web-moderno.webp"
                                alt="Web Development">
                        </a>
                        <div class="card-content">
                            <h4>Desarrollo Web con Django</h4>
                            <p>Crea aplicaciones web robustas y escalables.</p>
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
                <a href="poo.php" class="topic-link">
                    <h4>Programacion Orientada a Objetos</h4>
                    <p>Un paradigma que organiza el código en objetos.</p>
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
                    <p>Tu fuente de recursos para aprender Python</p>
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