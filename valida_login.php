<?php

session_start();

require_once 'C:/xampp/htdocs/ChamadoReal/chamadoReal/src/controllers/LoginController.php';

$loginController = new LoginController();
$loginController -> autenticar($_POST['email'], $_POST['senha']);

?>