<!-- Estilos CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="../public/css/style_login.css" rel="stylesheet" />

<!-- Validacion de inicio de sesion en login.php -->
<?php

$email=$_POST['email'];
$contrasenia=$_POST['contrasenia'];
    require_once "conexion/conexion.php";
    $conexion = new Conexion;

    $consulta="SELECT * FROM `usuarios` WHERE correo='$email' and contrasena='$contrasenia'";
        if ($sql = $conexion->obtenerDatos($consulta)) {
           session_start();
                          
            $_SESSION['loggedUserName'] = $sql[0]['correo'] ;
            $_SESSION['id_rol'] = $sql[0]['id_rol'];

            if ($sql[0]['id_rol']==2) {
               /* $consultaid ="SELECT * FROM usuarios where correo='$email'";
                $sqlid = $conexion->obtenerDatos($consultaid);
                $_SESSION['id_user']=$sqlid[0]['id_user'];
                $_SESSION['nombre']=$sqlid[0]['nombre'];*/
                echo '<script>alert("Inicio de sesion exitoso");window.location.href="../index.php?menu=lector"</script>';
            } elseif ($sql[0]['id_rol']==3) {

                echo '<script>alert("Inicio de sesion exitoso");window.location.href="../index.php?menu=autor"</script>';
            }
        } else {
            echo '<script>
            Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "¡Error, correo y contraseña incorrecta!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
            }).then(function(result){
                if(result.value){                   
                window.location = "../index.php?menu=login";
                }
            });
            </script>';
        }
?>
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js" integrity="sha256-jAlCMntTd9fGH88UcgMsYno5+/I0cUCWdSjJ9qHMFRY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
       