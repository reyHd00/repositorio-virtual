<!-- Estilos en CSS -->
<link rel="stylesheet" href="public/css/style_navegador.css">
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
<style>
    .brand-logo{
        font-family: 'Pangolin', cursive;
    }
</style>
<!-- Contenido -->
<?php
    $estado_session = session_status();
    if ($estado_session == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['loggedUserName'])) {
        if ($_SESSION['id_rol'] == 3) {
            ?>
<!-- Navegador logeado Author -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper | nav-color">
        <a href="?menu=autor" class="brand-logo"><i class="material-icons">auto_stories</i>Inspired Authors</a>
        <a href="?menu=autor" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="?menu=search"><i class="material-icons right">search</i>Buscar</a></li>
            <li><a href="?menu=generos">Género</a></li>
                <li><a href="?menu=historias">Mis historias</a></li>
                <li><a href="?menu=subirLibro">Subir</a></li>
                <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesión</a></li>
            </ul>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesión</a></li>
        </ul> 
    </nav>
</div>
<?php
} else {
            ?>
<!-- Navegador logeado Lector -->
<div class="navbar-fixed">
    
    <nav>
        <div class="nav-wrapper | nav-color">
        <a href="#!" class="brand-logo"><i class="material-icons">auto_stories</i>Inspired Authors</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="?menu=search"><i class="material-icons right">search</i>Buscar</a></li>
            <li><a href="?menu=generos">Género</a></li>                  
                <li><a href="?menu=historias">Mis historias</a></li>
                <li><a href="">Autores</a></li>
                <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesión</a></li>
            </ul>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="?menu=logout"><i class="material-icons left">logout</i>Cerrar sesión</a></li>
        </ul>
    </nav>
</div>
<?php
}
} else {
        ?>
<!-- navegador sin logear -->


<nav>
    <div class="nav-wrapper | nav-color">
        <a href="index.php" class="brand-logo"><i class="material-icons">auto_stories</i>Inspired Authors</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="?menu=search"><i class="material-icons right">search</i>Buscar</a></li>
            <li><a href="?menu=generos">Géneros </a></li>
            <li><a href="?menu=registrarse"><i class="material-icons left">person_add</i>Registrarse</a></li>
            <li><a href="?menu=login"><i class="material-icons left">login</i>Iniciar sesión </a></li>

        </ul>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="?menu=registrarse"><i class="material-icons left">person_add</i>Registrarse</a></li>
            <li><a href="?menu=login"><i class="material-icons left">login</i>Iniciar sesión </a></li>
            
        </ul>
        
    </div>
</nav>

<?php
    } ?>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    // Or with jQuery

    $(document).ready(function () {
        $('.sidenav').sidenav();
        $(".dropdown-trigger").dropdown();
    });

</script>