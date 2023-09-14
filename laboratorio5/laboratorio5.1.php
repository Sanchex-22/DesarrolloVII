<?php
// Comprobamos que el tamaño del archivo no sea superior a 1 MB
if($_FILES['nombre_archivo']['size'] > 1048576)
{
    echo "El archivo es demasiado grande.";
    exit;
}

// Comprobamos que el tipo de archivo sea un archivo de imagen
$tipoArchivo = $_FILES['nombre_archivo']['type'];
if($tipoArchivo != "image/jpeg" && $tipoArchivo != "image/png")
{
    echo "El archivo no es una imagen.";
    exit;
}

// Código original

if(is_uploaded_file($_FILES['nombre_archivo']['tmp_name']))
{
$nombreDirectorio = "/Proyects/laboratorio5";
$nombreCompleto = $nombreDirectorio.$_FILES['nombre_archivo']['name'];
    $nombreArchivo = $_FILES['nombre_archivo']['name'];

    if(is_file($nombreCompleto))
    {
        $idUnico = time();
        $nombreArchivo = $idUnico . "-" . $nombreArchivo;
        echo "Archivo repetido, se cambiara el nombre a $nombreArchivo<br>";
    }
    move_uploaded_file($_FILES['nombre_archivo']['name'],$nombreCompleto);
    echo "El archivo se ha subido satisfactoriamente al directorio";
}
else
    echo "no se ha subido al directorio";
?>

