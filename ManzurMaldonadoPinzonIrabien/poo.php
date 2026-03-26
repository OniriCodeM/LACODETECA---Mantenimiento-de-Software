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
    <title>Programación Orientada a Objetos | La Codeteca</title>

    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="dark.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <h1>Programación Orientada a Objetos</h1>
            <p>Descubre uno de los paradigmas más importantes en el desarrollo de software moderno</p>
        </div>
    </section>

    <main class="main-container">
        <div>
            <article class="article">
                <img src="imagenes/poo.jpg" alt="POO Concepto">
                <h2>¿Qué es la programación orientada a objetos?</h2>
                <p>La Programación Orientada a Objetos (POO) es un paradigma de programación que nos da unas
                    guías sobre cómo trabajar con él. Se basa en el concepto de clases y objetos. Este tipo de
                    programación se utiliza para estructurar un programa de software en piezas simples y
                    reutilizables de planos de código (clases) para crear instancias individuales de objetos.</p>
                <p>Una clase es una plantilla. Define de manera genérica cómo van a ser los objetos de un
                    determinado tipo. Por ejemplo, una clase para representar a animales puede llamarse 'animal'
                    y tener una serie de atributos, como 'nombre' o 'edad', y una serie con los comportamientos
                    que estos pueden tener.</p>
            </article>

            <div class="related">
                <h3>Artículos Relacionados</h3>
                <div class="related-grid">
                    <div class="card">
                        <a href="https://learn.microsoft.com/es-es/training/paths/beginner-python/">
                            <img src="imagenes/python.jpeg" alt="Python">
                        </a>
                        <div class="card-content">
                            <h4>Introducción a Python</h4>
                            <p>Descubre el lenguaje de programación más versátil y fácil de aprender.</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="https://learn.microsoft.com/es-es/shows/java-for-beginners/">
                            <img src="imagenes/java-concurrency.png" alt="Java">
                        </a>
                        <div class="card-content">
                            <h4>Java para Principiantes</h4>
                            <p>Aprende uno de los lenguajes más demandados en la industria.</p>
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
                    <p>Tu fuente de recursos para aprender programación</p>
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