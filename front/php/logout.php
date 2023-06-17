
<?php
// Iniciar la sesión (si aún no se ha iniciado)
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Finalizar la sesión
session_destroy();

// // Redirigir a la página de inicio de sesión u otra página deseada
// header('Location: login.php');
exit;
?>