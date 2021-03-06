<?php


$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';

switch ($var_getMenu) {
    case "home":
        require_once('./public/home.php');
        break;
    case "login":
        require_once('./public/login.php');
        break;
    case "registrarse":
        require_once('./public/registrarse.php');
        break;
    case "logout":
            $session_destroy = session_destroy();
            header("location: ./index.php?menu=home");
        break;
    case "autor":
        require_once('./public/autor.php');
        break;
    case "lector":
        require_once('./public/lector.php');
        break;
    case "lectorPdf":
        $_codigo = trim(filter_input(INPUT_GET,'codigo'));
        require_once('./public/lectorPdf.php');
        break;
    case "search":
        require_once('./public/buscar.php');
        break;
    case "resBusqueda":           
        require_once('./public/ResultadoBusqueda.php');
        break;
    case "generos":
        require_once('./public/generos.php');        
        break;
    case "vistaGeneros":
        $_categoria = trim(filter_input(INPUT_GET,'categoriaA'));
        require_once('./public/vistaGeneros.php');
        break;
    case "historias":
        require_once('./public/historias.php');    
        break;
    case "subirLibro":
        require_once('./public/subirLibro.php');    
        break;  
    case "portada":
        require_once('./public/agregarPortada.php');    
        break; 
    case "quitarDeLista":
        $_idLibro = trim(filter_input(INPUT_GET,'id'));
        require_once('./db/eliminarDeLista.php');    
        break;         
    default:
        require_once('./public/home.php');
}