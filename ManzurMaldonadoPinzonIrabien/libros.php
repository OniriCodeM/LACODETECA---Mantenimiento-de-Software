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
    <title>Biblioteca de Programación</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="menu.css">

    <link rel="stylesheet" href="libros.css">
    <link rel="stylesheet" href="dark.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .popover-header {
            color: black;
        }
    </style>
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
        <button class="dropdown-button">Invitado</button> <!-- Mostrar "Invitado" cuando no hay sesión -->
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

    <div class="carousel-container">
        <h2 class="carousel-title">Libros Más Descargados</h2>
        <div class="carousel-track">
            <div class="carousel-slide">
                <img src="imagenes/libro7.jpg" alt="JavaScript" class="book-cover">
                <div class="book-title">Introducción a la Programación Orientada a Objetos</div>
                <div class="book-author">Por Francisco Aragón Mesa</div>
                <div class="book-rating">★★★★☆</div>
                <div class="book-downloads">15,234 descargas</div>
            </div>
            <div class="carousel-slide">
                <img src="imagenes/libro3.jpg" alt="Python" class="book-cover">
                <div class="book-title">Introducción a la programación con Python</div>
                <div class="book-author">Por Andrés Marzal</div>
                <div class="book-rating">★★★★☆</div>
                <div class="book-downloads">12,456 descargas</div>
            </div>
            <div class="carousel-slide">
                <img src="imagenes/libro4.jpg" alt="React" class="book-cover">
                <div class="book-title">Python para todos</div>
                <div class="book-author">Por Raul Gonzáles Duque</div>
                <div class="book-rating">★★★★★</div>
                <div class="book-downloads">10,789 descargas</div>
            </div>
            <div class="carousel-slide">
                <img src="imagenes/libro6.jpg" alt="Node.js" class="book-cover">
                <div class="book-title">Head First C+</div>
                <div class="book-author">Por Andrew Stellman</div>
                <div class="book-rating">★★★★★</div>
                <div class="book-downloads">9,876 descargas</div>
            </div>
            <div class="carousel-slide">
                <img src="imagenes/libro8.jpeg" alt="Node.js" class="book-cover">
                <div class="book-title">JAVA 2.0 "La biblia de JAVA"</div>
                <div class="book-author">Por Steven Holzner</div>
                <div class="book-rating">★★★★★</div>
                <div class="book-downloads">9,876 descargas</div>
            </div>
        </div>
        <button class="carousel-button prev">←</button>
        <button class="carousel-button next">→</button>
        <div class="dots-container"></div>
    </div>

    <div class="books-container">
        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">Aprenda lenguaje ANSI C como si estuviera en primero</h3>
                <div class="stars">★★★★★</div>
                <p class="book-author">Por Universidad de Navarra</p>
                <p class="book-description">
                    El siguiente libro gratuito está dirigido para todas aquellas personas interesadas en aprender sobre
                    ANSI C.
                    En estos apuntes se describe de forma abreviada la sintaxis del lenguaje C. No se trata de aprender
                    a programar
                    en C, sino más bien de presentar los recursos o las posibilidades que el C pone a disposición de los
                    programadores.
                </p>

                <div class="button-container">
                    <?php if ($sesion): ?>
                        <!-- Botones habilitados -->
                        <button class="view-btn" onclick="popup('libros/C - Aprenda Ansi C.pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/C - Aprenda Ansi C.pdf" download="C - Aprenda Ansi C.pdf" class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <!-- Botón bloqueado -->
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro1.jpg" alt="C Programming Book" class="book-image">
            </div>
        </div>


        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">Curso de programación C/C++</h3>
                <div class="stars">★★★★☆</div>
                <p class="book-author">Francisco Javier Ceballo</p>
                <p class="book-description">
                    Este libro es el primero de una colección de tres: C/C++: Curso de programación, Programación
                    orientada
                    a objetos con C++, y Enciclopedia de C++, que cubren el camino que hay que recorrer para llegar a
                    desarrollar
                    aplicaciones orientadas a objetos. Con ejemplos fáciles de entender, que ilustran los fundamentos de
                    la programación C.
                </p>
                <div class="button-container">
                    <?php if ($sesion): ?>
                        <button class="view-btn"
                            onclick="popup('libros/C-C++ Curso de programaci�n 5a edici�n.pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/C-C++ Curso de programaci�n 5a edici�n.pdf"
                            download="libros/C-C++ Curso de programaci�n 5a edici�n.pdf" class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro2.jpg" alt="C/C++ Programming Book" class="book-image">
            </div>
        </div>

        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">Introducción a la programación con Python</h3>
                <div class="stars">★★★★☆</div>
                <p class="book-author">Por Andrés Marzal</p>
                <p class="book-description">
                    En este libro se pretende enseñar a programar y, a diferencia de lo que es usual en cursos
                    introductorios a la
                    programación, se propone el aprendizaje con dos lenguajes de programación: Python y C.
                </p>
                <div class="button-container">
                    <?php if ($sesion): ?>
                        <button class="view-btn" onclick="popup('libros/Python - Python para Todos 2.pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/Python - Python para Todos 2.pdf" download="libros/Python - Python para Todos 2.pdf"
                            class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro3.jpg" alt="Python Programming Book" class="book-image">
            </div>
        </div>

        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">Python para todos</h3>
                <div class="stars">★★★★★</div>
                <p class="book-author">Raul Gonzáles Duque</p>
                <p class="book-description">
                    Un libro destinado tanto a estudiantes de programación como a profesionales de diversas disciplinas
                    científicas.
                    El autor recorre el lenguaje desde su concepción hasta su aplicación en disciplinas tan variadas
                    como la
                    administración de sistemas GNU/Linux.
                </p>
                <div class="button-container">
                    <?php if ($sesion): ?>
                        <button class="view-btn" onclick="popup('libros/Python - Python para Todos.pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/Python - Python para Todos.pdf" download="Python - Python para Todos.pdf"
                            class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro4.jpg" alt="Python Programming Book" class="book-image">
            </div>
        </div>
        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">Programación en Visual Basic .NET</h3>
                <div class="stars">★★★★☆</div>
                <p class="book-author">Por Mark Thompson</p>
                <p class="book-description">
                    El siguiente libro gratuito está dirigido para todas aquellas personas interesadas en aprender sobre
                    ANSI C.
                    En estos apuntes se describe de forma abreviada la sintaxis del lenguaje C. No se trata de aprender
                    a programar
                    en C, sino más bien de presentar los recursos o las posibilidades que el C pone a disposición de los
                    programadores.
                </p>
                <div class="button-container">
                    <?php if ($sesion): ?>
                        <button class="view-btn"
                            onclick="popup('libros/Visual Basic - Programación en VB .NET .pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/Visual Basic - Programación en VB .NET .pdf"
                            download="Visual Basic - Programación en VB .NET .pdf" class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro5.jpg" alt="Visual Basic" class="book-image">
            </div>
        </div>

        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">Head First C+</h3>
                <div class="stars">★★★★★</div>
                <p class="book-author">Por Andrew Stellman</p>
                <p class="book-description">
                    Este libro es una experiencia de aprendizaje completa para aprender a programar con C#, XAML, .NET
                    Framework y Visual Studio.
                    Esta introducción a C# está diseñada para facilitar el aprendizaje de programación.
                </p>
                <div class="button-container">
                    <?php if ($sesion): ?>
                        <button class="view-btn" onclick="popup('libros/Libro de C.pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/Libro de C.pdf" download="Libro de C.pdf" class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro6.jpg" alt="C+" class="book-image">
            </div>
        </div>

        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">Introducción a la Programación Orientada a Objetos</h3>
                <div class="stars">★★★★☆</div>
                <p class="book-author">Por Francisco Aragón Mesa</p>
                <p class="book-description">
                    En este libro se exponen los principios del paradigma orientado a objetos y se presentan problemas
                    de diseño y
                    construcción de programas bajo este paradigma mediante el uso del lenguaje de POO Java.
                </p>
                <div class="button-container">
                    <?php if ($sesion): ?>
                        <button class="view-btn"
                            onclick="popup('libros/Java - Introducción a la Programación Orientada a Objetos con Java.pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/Java - Introducción a la Programación Orientada a Objetos con Java.pdf"
                            download="Java - Introducción a la Programación Orientada a Objetos con Java.pdf"
                            class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro7.jpg" alt="POO con Java" class="book-image">
            </div>
        </div>

        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">JAVA 2.0 "La biblia de JAVA"</h3>
                <div class="stars">★★★★★</div>
                <p class="book-author">Por Steven Holzner</p>
                <p class="book-description">
                    Este libro nos presenta una introducción y actualización al lenguaje de programación Java, a través
                    de una serie
                    de ejercicios y aplicaciones a casos reales en los cuales se practican diversos temas de Java y su
                    enfoque orientado a objetos.
                </p>
                <div class="button-container">
                    <?php if ($sesion): ?>
                        <button class="view-btn" onclick="popup('libros/Java - La Biblia de Java 2.pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/Java - La Biblia de Java 2.pdf" download="Java - La Biblia de Java 2.pdf"
                            class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro8.jpeg" alt="Java" class="book-image">
            </div>
        </div>
        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">Aprenda a Pensar Como un Programador</h3>
                <div class="stars">★★★★☆</div>
                <p class="book-author">Por Allen Downey</p>
                <p class="book-description"> Este libro es una
                    guía introductoria que enseña los principios de la programación usando Python. Está pensado para
                    principiantes sin experiencia previa en programación.
                    Es un texto educativo que destaca el razonamiento lógico y la resolución de problemas a través de
                    ejemplos prácticos y ejercicios.
                </p>
                <div class="button-container">
                    <?php if ($sesion): ?>
                        <button class="view-btn"
                            onclick="popup('libros/aprenda-a-pensar-como-un-programador-con-python.pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/aprenda-a-pensar-como-un-programador-con-python.pdf"
                            download="aprenda-a-pensar-como-un-programador-con-python.pdf" class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro10.jpeg" alt="Python" class="book-image">
            </div>
        </div>
        <div class="book-card">
            <div class="book-info">
                <h3 class="book-title">React: De aprendiz a maestro</h3>
                <div class="stars">★★★★☆</div>
                <p class="book-author">Por Juho Vepsalainen</p>
                <p class="book-description"> Este libro es una guía completa para aprender a utilizar React, una de las
                    bibliotecas de JavaScript más populares para el desarrollo de interfaces de usuario. Está orientado
                    a desarrolladores que desean dominar React desde los conceptos básicos hasta el nivel avanzado,
                    abarcando todo el proceso para desarrollar aplicaciones interactivas y escalables.
                </p>
                <div class="button-container">
                    <?php if ($sesion): ?>
                        <button class="view-btn" onclick="popup('libros/survivejs-react-es.pdf', 800, 600)">
                            <span>Ver Libro</span>
                            <span>👁</span>
                        </button>
                        <a href="libros/survivejs-react-es.pdf" download="survivejs-react-es.pdf" class="download-btn">
                            <span>Descargar</span>
                            <span>⬇</span>
                        </a>
                    <?php else: ?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover"
                            title="¿Cómo obtener el libro?"
                            data-bs-content="Para ver o descargar este libro, por favor inicia sesión o regístrate.">
                            Obtener Libro
                        </button>
                    <?php endif; ?>
                </div>
            </div>
            <div class="book-image-container">
                <img src="imagenes/libro11.png" alt="Python" class="book-image">
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

    <script src="libros.js"></script>
    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
            var popoverList = [...popoverTriggerList].map(popoverTrigger =>
                new bootstrap.Popover(popoverTrigger, {
                    trigger: 'hover'
                })
            );
        });
    </script>
</body>

</html>