<?php
session_start();

if (!isset($_SESSION['nombre_s'])) {
    echo json_encode(['success' => false, 'message' => 'No has iniciado sesión.']);
    exit;
}

$sesion = $_SESSION['nombre_s'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])) {
    $targetDir = "uploads/";
    $fileName = basename($_FILES['photo']['name']);
    $targetFile = $targetDir . $sesion . ".jpg";
    $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES['photo']['tmp_name']);
    if ($check === false) {
        echo json_encode(['success' => false, 'message' => 'El archivo no es una imagen.']);
        exit;
    }


    if ($_FILES['photo']['size'] > 2000000) {
        echo json_encode(['success' => false, 'message' => 'El archivo es demasiado grande.']);
        exit;
    }
    
    if ($imageFileType !== "jpg" && $imageFileType !== "jpeg" && $imageFileType !== "png") {
        echo json_encode(['success' => false, 'message' => 'Solo se permiten archivos JPG, JPEG y PNG.']);
        exit;
    }

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
        echo json_encode(['success' => true, 'message' => 'La foto de perfil se subió correctamente.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al subir el archivo.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No se recibió ningún archivo.']);
}
