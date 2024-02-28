<?php
$directorio = "archivos/";
$archivo = $directorio . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)) {
    echo "El archivo se envió correctamente.";
    // Redirige de vuelta al formulario después de 3 segundos (puedes ajustar el tiempo)
    header("refresh:2;url=index.html");
    exit(); // Asegúrate de salir después de la redirección
} else {
    echo "No se pudo enviar el archivo.";
}
?>
