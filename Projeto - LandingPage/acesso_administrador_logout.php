<?php
session_start();
session_unset();
session_destroy();
header("Location: acesso_administrador_login.php");
exit();
?>
