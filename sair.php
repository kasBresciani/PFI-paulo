<?php
session_start();
session_destroy();
header("Location: inicio.html"); // Redirecionar para a página de login após o logout
exit();
?>