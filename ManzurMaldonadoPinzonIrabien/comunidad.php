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
    <title>Comunidad - La Codeteca</title>
    <link rel="stylesheet" href="com_estilo.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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



    <div class="hero">
        <div class="container">
            <h1>Únete a nuestra Comunidad de Desarrolladores</h1>
            <p>Conecta, aprende y crece junto a otros programadores</p>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-3">
            <div class="card">
                <div class="card-emoji">💬</div>
                <h3 class="card-title">Discusiones</h3>
                <p class="card-text">Participa en conversaciones sobre programación, comparte conocimientos y resuelve
                    dudas.</p>
                <button class="btn-outline" id="openDiscussions">Ver discusiones</button>
            </div>

            <div class="card">
                <div class="card-emoji">📅</div>
                <h3 class="card-title">Eventos</h3>
                <p class="card-text">Descubre meetups, workshops y conferencias organizadas por la comunidad.</p>
                <button class="btn-outline" id="openEvents">Ver calendario</button>
            </div>

            <div class="card">
                <div class="card-emoji">🚀</div>
                <h3 class="card-title">Proyectos Colaborativos</h3>
                <p class="card-text">Únete a proyectos open source y trabaja con otros desarrolladores.</p>
                <button class="btn-outline" id="openProjects">Explorar proyectos</button>
            </div>
        </div>

        <!-- Modales -->
        <div id="eventsModal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <h2>Próximos Eventos</h2>
                <div id="eventsList">
                    <div class="event-card">
                        <h3>Workshop: Introducción a Docker</h3>
                        <p>Fecha: 15 de Noviembre, 2024</p>
                        <p>Hora: 18:00</p>
                        <p>Ponente: Ana García</p>
                        <div class="tags">
                            <span class="tag">Docker</span>
                            <span class="tag">DevOps</span>
                        </div>
                        <button class="btn-join">Registrarse</button>
                    </div>
                    <div class="event-card">
                        <h3>Conferencia: React Advanced Patterns</h3>
                        <p>Fecha: 20 de Noviembre, 2024</p>
                        <p>Hora: 19:00</p>
                        <p>Ponente: Carlos Ruiz</p>
                        <div class="tags">
                            <span class="tag">React</span>
                            <span class="tag">JavaScript</span>
                        </div>
                        <button class="btn-join">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="discussionsModal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <h2>Discusiones Activas</h2>
                <div id="discussionsList">
                    <div class="discussion-item">
                        <h3>¿Mejores prácticas para TypeScript en 2024?</h3>
                        <p>Iniciado por: María González</p>
                        <p>15 respuestas · Activo hace 2 horas</p>
                        <div class="tags">
                            <span class="tag">TypeScript</span>
                            <span class="tag">Buenas Prácticas</span>
                        </div>
                    </div>
                    <div class="discussion-item">
                        <h3>Comparativa: Next.js vs Remix</h3>
                        <p>Iniciado por: David López</p>
                        <p>23 respuestas · Activo hace 5 horas</p>
                        <div class="tags">
                            <span class="tag">Next.js</span>
                            <span class="tag">Remix</span>
                            <span class="tag">Framework</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="projectsModal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <h2>Proyectos Colaborativos</h2>
                <div id="projectsList">
                    <div class="project-card">
                        <h3>Sistema de Gestión de Bibliotecas</h3>
                        <p>Un sistema open source para administrar bibliotecas pequeñas</p>
                        <p>Tecnologías: Node.js, Express, MongoDB</p>
                        <p>Colaboradores necesarios: 3</p>
                        <div class="tags">
                            <span class="tag">Node.js</span>
                            <span class="tag">MongoDB</span>
                            <span class="tag">Express</span>
                        </div>
                        <button class="btn-join">Unirse al Proyecto</button>
                    </div>
                    <div class="project-card">
                        <h3>Plugin VSCode para Testing</h3>
                        <p>Extensión para facilitar el testing en JavaScript/TypeScript</p>
                        <p>Tecnologías: TypeScript, VSCode API</p>
                        <p>Colaboradores necesarios: 2</p>
                        <div class="tags">
                            <span class="tag">TypeScript</span>
                            <span class="tag">VSCode</span>
                            <span class="tag">Testing</span>
                        </div>
                        <button class="btn-join">Unirse al Proyecto</button>
                    </div>
                </div>
            </div>
        </div>

        <section>
            <h2>Actividad Reciente</h2>
            <div class="card">
                <div class="activity-item">
                    <img src="icon/anonimo1.png" class="avatar" alt="Usuario">
                    <div class="activity-content">
                        <p><span class="username">María G.</span> publicó en Discusiones</p>
                        <p>¿Alguien ha trabajado con GraphQL y TypeScript?</p>
                        <p class="timestamp">Hace 2 horas</p>
                    </div>
                </div>

                <div class="activity-item">
                    <img src="icon/anonimo1.png" class="avatar" alt="Usuario">
                    <div class="activity-content">
                        <p><span class="username">Carlos M.</span> creó un nuevo proyecto</p>
                        <p>Framework de testing para React Native</p>
                        <p class="timestamp">Hace 5 horas</p>
                    </div>
                </div>

                <div class="activity-item">
                    <img src="icon/anonimo1.png" class="avatar" alt="Usuario">
                    <div class="activity-content">
                        <p><span class="username">Ana L.</span> anunció un nuevo evento</p>
                        <p>Workshop: Introducción a Docker</p>
                        <p class="timestamp">Hace 8 horas</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2>Miembros Destacados</h2>
            <div class="grid grid-4">
                <div class="card member-card">
                    <img src="icon/anonimo.png" class="member-avatar" alt="Usuario destacado">
                    <h4 class="member-name">Laura Pérez</h4>
                    <p class="member-role">Full Stack Developer</p>
                </div>
                <div class="card member-card">
                    <img src="icon/anonimo.png" class="member-avatar" alt="Usuario destacado">
                    <h4 class="member-name">David Silva</h4>
                    <p class="member-role">DevOps Engineer</p>
                </div>
                <div class="card member-card">
                    <img src="icon/anonimo.png" class="member-avatar" alt="Usuario destacado">
                    <h4 class="member-name">Elena Ruiz</h4>
                    <p class="member-role">Mobile Developer</p>
                </div>
                <div class="card member-card">
                    <img src="icon/anonimo.png" class="member-avatar" alt="Usuario destacado">
                    <h4 class="member-name">Miguel Torres</h4>
                    <p class="member-role">UI/UX Designer</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
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

    <script src="script.js"></script>
</body>

</html>