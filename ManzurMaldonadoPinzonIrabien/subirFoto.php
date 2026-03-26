<?php
session_start();
if (!isset($_SESSION['nombre_s'])) {
    header("Location: login.php");
    exit;
}

$sesion = $_SESSION['nombre_s'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Foto de Perfil</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #message {
            margin-top: 20px;
            font-size: 16px;
            color: green;
        }
    </style>
    <link rel="stylesheet" href="styleSubirFoto.css">
</head>

<body>
    <h1>Subir o Cambiar Foto de Perfil</h1>
    <form id="uploadForm" enctype="multipart/form-data">
        <input type="file" name="photo" id="photo" accept="image/*" required>
        <button type="submit">Subir Foto</button>
    </form>
    <div id="message"></div>

    <script>
        $("#uploadForm").on("submit", function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url: "uploadHandler.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    try {
                        const res = JSON.parse(response);
                        if (res.success) {
                            $("#message").text("¡Foto de perfil subida exitosamente! Redirigiendo...");
                            setTimeout(() => {
                                window.location.href = "index.php";
                            }, 2000);
                        } else {
                            $("#message").css("color", "red").text(res.message);
                        }
                    } catch (err) {
                        $("#message").css("color", "red").text("Error al procesar la respuesta del servidor.");
                    }
                },
                error: function() {
                    $("#message").css("color", "red").text("Ocurrió un error. Inténtalo de nuevo.");
                }
            });
        });
    </script>
</body>
</html>


