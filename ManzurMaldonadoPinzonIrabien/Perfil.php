<?php
session_start();
include 'conexionBD.php';

// Verifica si el usuario está logueado
if (!isset($_SESSION['nombre_s'])) {
    header("Location: login.php");
}

$nombre = $_SESSION['nombre_s']; 

// para evitar inyección de SQL o HTML
$nombre = mysqli_real_escape_string($conexion, htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'));

// Obtener los datos del usuario
$consulta = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
$resultado = $conexion->query($consulta);
$usuario = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nuevo_nombre = mysqli_real_escape_string($conexion, htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8'));
    $nueva_edad = (int)$_POST['edad']; // Convertir a entero para evitar SQL o caracteres no deseados
    $nuevo_sexo = mysqli_real_escape_string($conexion, htmlspecialchars($_POST['sexo'], ENT_QUOTES, 'UTF-8'));
    $nueva_nacionalidad = mysqli_real_escape_string($conexion, htmlspecialchars($_POST['nacionalidad'], ENT_QUOTES, 'UTF-8'));
    $nueva_contrasenia = !empty($_POST['contrasenia']) ? htmlspecialchars($_POST['contrasenia'], ENT_QUOTES, 'UTF-8') : null;

    if ($nueva_contrasenia) {
        $nueva_contrasenia = password_hash($nueva_contrasenia, PASSWORD_DEFAULT);
        $sql = "UPDATE usuarios SET nombre = ?, edad = ?, sexo = ?, nacionalidad = ?, contrasenia = ? WHERE nombre = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sissss", $nuevo_nombre, $nueva_edad, $nuevo_sexo, $nueva_nacionalidad, $nueva_contrasenia, $nombre);
    } else {
        $sql = "UPDATE usuarios SET nombre = ?, edad = ?, sexo = ?, nacionalidad = ? WHERE nombre = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sisss", $nuevo_nombre, $nueva_edad, $nuevo_sexo, $nueva_nacionalidad, $nombre);
    }

    if ($stmt->execute()) {
        $_SESSION['nombre_s'] = $nuevo_nombre; 
        $mensaje = 'Datos modificados correctamente';

        header("Location: index.php");
        exit();
    } else {
        $mensaje = 'Error al modificar los datos';
    }

    $stmt->close();
}

// Eliminar cuenta si se ha confirmado
if (isset($_POST['eliminar_cuenta']) && $_POST['eliminar_cuenta'] == 'sí') {
    $sql_eliminar = "DELETE FROM usuarios WHERE nombre = ?";
    $stmt = $conexion->prepare($sql_eliminar);
    $stmt->bind_param("s", $nombre);

    if ($stmt->execute()) {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit();
    } else {
        $mensaje = 'Error al eliminar la cuenta';
    }
    $stmt->close();
}

$conexion->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Perfil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="perfil.css">
    <script>
        function confirmarEliminacion() {
            var respuesta = confirm("¿Seguro que desea eliminar la cuenta?");
            if (respuesta) {
                document.getElementById("formEliminar").submit();
            }
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h2>Modificar Perfil</h2>

        <?php if (isset($mensaje)): ?>
            <div class="alert alert-info"><?php echo $mensaje; ?></div>
        <?php endif; ?>

        <form action="Perfil.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" id="nombre" type="text" class="form-control" value="<?php echo $usuario['nombre']; ?>" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input name="correo" id="correo" type="email" class="form-control" value="<?php echo $usuario['correo']; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input name="edad" id="edad" type="number" class="form-control" value="<?php echo $usuario['edad']; ?>" required>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo</label>
                <select name="sexo" id="sexo" class="form-control" required>
                    <option value="Masculino" <?php echo ($usuario['sexo'] == 'Masculino') ? 'selected' : ''; ?>>Masculino</option>
                    <option value="Femenino" <?php echo ($usuario['sexo'] == 'Femenino') ? 'selected' : ''; ?>>Femenino</option>
                    <option value="Otro" <?php echo ($usuario['sexo'] == 'Otro') ? 'selected' : ''; ?>>Otro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nacionalidad">Nacionalidad</label>
                <input name="nacionalidad" id="nacionalidad" type="text" class="form-control" value="<?php echo $usuario['nacionalidad']; ?>" required>
            </div>

            <div class="form-group">
                <label for="contrasenia">Nueva Contraseña</label>
                <input name="contrasenia" id="contrasenia" type="password" class="form-control" placeholder="Ingresa una nueva contraseña (opcional)">
            </div>

            <!-- Botones -->
            <button type="submit" class="btn btn-primary">Modificar datos</button>
            <a href="index.php" class="btn btn-secondary">Regresar</a>
        </form>

        <form id="formEliminar" action="Perfil.php" method="POST" style="display:none;">
            <input type="hidden" name="eliminar_cuenta" value="sí">
        </form>
        <button class="btn btn-danger mt-3" onclick="confirmarEliminacion()">Eliminar cuenta</button>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

