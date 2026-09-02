<?php
require_once 'config/conexion.php';
require_once 'model/UsuarioModel.php';
require_once 'cotroller/BancoController.php';

$accion = isset($_GET['accion']) ? $_GET['accion'] : 'inicio';

$controlador = new BancoController();

switch ($accion) {
    case 'login':
        $controlador->login();
        break;
    case 'retiro':
        $controlador->retiro();
        break;
    case 'listar':
        $controlador->listarUsuarios();
        break;
    case 'auditoria':
        echo "Auditoria no implementada.";
        break;
    default:
        $controlador->inicio();
        break;
}
?>