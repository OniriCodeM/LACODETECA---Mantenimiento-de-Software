<?php
session_start();
error_reporting(0);
$sesion = $_SESSION['nombre_s'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dark.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">

    <title>La Codeteca</title>
    <link rel="shortcut icon" href="imagenes/code-6127616_960_720 (1).webp">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="scriptFotoDePerfil.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <?php if ($sesion): ?>
        <button class="dropdown-button">
            <?php if (file_exists("uploads/" . htmlspecialchars($sesion) . ".jpg")): ?>
                <div id="profilePicContainer" style="display:inline-block; margin-right: 10px;">
                    <img src="uploads/<?php echo htmlspecialchars($sesion); ?>.jpg?<?php echo time(); ?>"
                         alt="Foto de perfil" id="profilePic"
                         style="width: 32px; height: 32px; border-radius: 50%;" />
                </div>
            <?php endif; ?>
            <?php echo htmlspecialchars($sesion); ?>
        </button>
        <div class="dropdown-content">
            <a href="cerrarSesion.php">Cerrar sesión</a>
            <a href="Perfil.php">Modificar perfil</a>
            <?php if (!file_exists("uploads/" . htmlspecialchars($sesion) . ".jpg")): ?>
                <a href="subirFoto.php">Subir Foto de Perfil</a>
            <?php else: ?>
                <a href="subirFoto.php">Cambiar Foto de Perfil</a>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <button class="dropdown-button">Invitado</button> 
        <div class="dropdown-content">
            <a href="login.php">Iniciar Sesión</a>
            <a href="Registro.php">Registrarse</a>
        </div>
    <?php endif; ?>
</li>






            </ul>
            <button class="switch" id="switch">
                <span><i class="fas fa-sun"></i></span>
                <span><i class="fas fa-moon"></i></span>
            </button>
        </nav>
    </header>

    <section class="hero-section">
        <div class="particles"></div>
        <div class="code-container"></div>

        <div class="floating-element floating-glasses active"></div>
        <div class="hero-content active">
            <h1 class="hero-title">¿Conoces los diferentes lenguajes de programación?</h1>
            <p class="hero-subtitle">Descubre el mundo de la programación</p>
        </div>

        <div class="floating-element floating-laptop"></div>
        <div class="hero-content">
            <h1 class="hero-title">Desarrollo Web Moderno</h1>
            <p class="hero-subtitle">HTML5, CSS3, JavaScript y más</p>
        </div>

        <div class="floating-element floating-circuit"></div>
        <div class="hero-content">
            <h1 class="hero-title">Inteligencia Artificial y Machine Learning</h1>
            <p class="hero-subtitle">El futuro de la tecnología está aquí</p>
        </div>

        <div class="nav-arrows">
            <button class="nav-arrow">←</button>
            <button class="nav-arrow">→</button>
        </div>

        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </section>

    <div class="sub">
    <h2>Temas</h2>
    </div>
    <div class="catalog-container">
        <div class="product">
            <a href="poo.php"><img src="imagenes/lenguajes-de-programacion.jpeg" alt="Poo"></a>
            <h2>¿Qué es la Programación Orientada a objetos?</h2>
            <p>La Programación Orientada a Objetos es un paradigma de programación, que se basa en el concepto de clases
                y objetos.</p>
            <a href="poo.php" class="leer-mas-btn">LEER MÁS</a>
        </div>

        <div class="product">
            <a href="lenguajeC.php"><img src="imagenes/lenguaje-programacion-c.jpg" alt="c"></a>
            <h2>Lenguaje de programación C</h2>
            <p>C es un lenguaje de programación utilizado para desarrollar aplicaciones y sistemas operativos, siendo la
                base de otros lenguajes.</p>
            <a href="lenguajeC.php" class="leer-mas-btn">LEER MÁS</a>
        </div>

        <div class="product">
            <a href="java.php"><img src="imagenes/Java.jpg" alt="java"></a>
            <h2>Conceptos clave sobre Java y sus aplicaciones</h2>
            <p>Java es un lenguaje popular y multiplataforma orientado a objetos, ideal para aplicaciones web en
                distintos entornos.</p>
            <a href="java.php" class="leer-mas-btn">LEER MÁS</a>
        </div>

        <div class="product">
            <a href="python.php"><img src="imagenes/python.jpeg" alt="python"></a>
            <h2>Python y su utilidad en el desarrollo de Software</h2>
            <p>Python es un lenguaje interpretado de alto nivel, se le conoce por su código legible, eficiente y útil en
                diversos
                desarrollos.</p>
            <a href="python.php" class="leer-mas-btn">LEER MÁS</a>
        </div>

        <div class="product">
            <a href="programacion_es.php"><img src="imagenes/programacion-estructurada.jpg"
                    alt="programacion-estructurada"></a>
            <h2>Programación estructurada</h2>
            <p>La programación estructurada se enfoca en mejorar calidad y tiempo de desarrollo mediante el uso de
                funciones.</p>
            <a href="programacion_es.php" class="leer-mas-btn">LEER MÁS</a>
        </div>

        <div class="product">
            <a href="ide.php"><img src="imagenes/ide.jpg" alt="ide"></a>
            <h2>¿Qué es un IDE y cómo facilita la programación?</h2>
            <p>Un entorno de desarrollo integrado (IDE) ayuda a programadores a crear software eficientemente,
                aumentando la productividad.</p>
            <a href="ide.php" class="leer-mas-btn">LEER MÁS</a>
        </div>
    </div>


    <div class="herramientas">
        <h2 class="titulo">Herramientas</h2>
        <div class="container">
            <div class="card">
                <a href="https://netbeans.apache.org/" target="_blank"><img src="imagenes/nets.png" alt="NetBeans IDE"
                        class="card-image"></a>
                <div class="card-content">
                    <h2 class="card-title"><a href="https://netbeans.apache.org/" target="_blank">NetBeans IDE</a>
                    </h2>
                    <p class="card-description">NetBeans IDE es un entorno de desarrollo integrado de código abierto
                        y
                        gratuito para el desarrollo de aplicaciones en los sistemas operativos Windows, Mac, Linux y
                        Solaris.</p>
                </div>
            </div>

            <div class="card">
                <a href="https://code.visualstudio.com/" target="_blank"><img src="imagenes/visual.jpg"
                        alt="Visual studio code" class="card-image"></a>
                <div class="card-content">
                    <h2 class="card-title"><a href="https://code.visualstudio.com/" target="_blank">Visual Studio
                            Code</a>
                    </h2>
                    <p class="card-description">Visual Studio Code es un editor de código fuente desarrollado por
                        Microsoft
                        para Windows, Linux, macOS y Web.</p>
                </div>
            </div>

            <div class="card">
                <a href="https://github.com/" target="_blank"><img src="imagenes/github.png" alt="Github"
                        class="card-image"></a>
                <div class="card-content">
                    <h2 class="card-title"><a href="https://github.com/" target="_blank">Github</a>
                    </h2>
                    <p class="card-description">Github es un repositorio online gratuito que permite gestionar
                        proyectos
                        y
                        controlar versiones de código.</p>
                </div>
            </div>

            <div class="card">
                <a href="https://git-scm.com/" target="_blank"><img src="imagenes/git.png" alt="Git"
                        class="card-image"></a>
                <div class="card-content">
                    <h2 class="card-title"><a href="https://git-scm.com/" target="_blank">Git</a>
                    </h2>
                    <p class="card-description">Git es un sistema de control de versiones distribuido, lo que
                        significa
                        que
                        un clon local del proyecto es un repositorio de control de versiones completo.</p>
                </div>
            </div>
        </div>
    </div>

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
