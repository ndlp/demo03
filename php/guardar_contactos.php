<?php


// Datos del formulario
$fullname = $_POST['fullname'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$affair = $_POST['affair'] ?? '';
$message = $_POST['message'] ?? '';

// Comprobar si todos los campos del formulario están presentes
if ($fullname && $email && $phone && $affair && $message) {
    // Abrir o crear el archivo CSV en modo de escritura
    $archivo_csv = fopen($php/contactos.csv, 'a');

    // Verificar si se pudo abrir el archivo correctamente
    if ($archivo_csv) {
        // Escribir los datos del formulario en el archivo CSV
        fputcsv($archivo_csv, [$fullname, $email, $phone, $affair, $message]);

        // Cerrar el archivo CSV
        fclose($archivo_csv);

        // Redirigir a la página de éxito
        header('Location: exito.html');
        exit;
    } else {
        echo 'Error: No se pudo abrir el archivo CSV.';
    }
} else {
    echo 'Error: Todos los campos del formulario son obligatorios.';
}
?>
