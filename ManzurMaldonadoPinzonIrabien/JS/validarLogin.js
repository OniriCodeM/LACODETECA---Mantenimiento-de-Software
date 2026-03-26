// Función para validar el formulario
function validarFormulario(event) {
    // Obtener los valores de los campos
    const correo = document.getElementById('correoU').value;
    const contrasenia = document.getElementById('contraseniaU').value;

    // Verificar si el correo está vacío
    if (correo.trim() === "") {
        alert("Por favor, ingresa un correo electrónico.");
        event.preventDefault();  // Prevenir que el formulario se envíe
        return false;
    }

    // Verificar si el correo tiene un formato válido
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(correo)) {
        alert("Por favor, ingresa un correo electrónico válido.");
        event.preventDefault();
        return false;
    }

    // Verificar si la contraseña está vacía
    if (contrasenia.trim() === "") {
        alert("Por favor, ingresa una contraseña.");
        event.preventDefault();
        return false;
    }

    // Si todas las validaciones pasan
    return true;
}
