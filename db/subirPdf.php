<?php

    require_once "conexion/conexion.php";
    $conexion = new Conexion;
    
    $titulo = $_POST['titulo'];
    $fechaPublicacion = $_POST['fechaPublicacion'];
    $descripcion = $_POST['descripcion'];
    $genero = $_POST['genero'];
    $time = time();
    $fileName = date("YmdHis", $time);
    setcookie('nameFile',$fileName);
    $extension = 'pdf';
    

    $ins = "INSERT INTO `libro` (`id_libro`, `titulo`, `fechaPublicacion`, `descripcion`, `codigoArchivo`, `vistas`, `id_categoria`, `id_autor`) VALUES (NULL, '$titulo', '$fechaPublicacion', '$descripcion', '$fileName', '0', '$genero', '2'); ";
    $sql=$conexion->nonQuery($ins);
    if($sql=1){
        if(isset($_FILES['documento']) && $_FILES['documento']['type']=='application/pdf'){
            move_uploaded_file ($_FILES['documento']['tmp_name'] , '../libros/'.$fileName.'.' .$extension);
            echo '<script>window.location.href="../index.php?menu=portada"</script>';
        }else{
            echo '<script>alert("Error al intentar subir archivo");window.location.href="../index.php?menu=subirLibro"</script>';
        }
    }else{
        echo '<script>alert("Error");window.location.href="../index.php?menu=subirLibro"</script>';

    }
    
    
?>