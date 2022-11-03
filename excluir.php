<?php
    require_once("controller/controllerCadastro.php");

    $controller = new controllerCadastro();
    $resultado = $controller->excluir($_GET['id']);
?>