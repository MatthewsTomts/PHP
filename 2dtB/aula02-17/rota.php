<?php
$root = "http://" . $_SERVER['SERVER_NAME'] . ":" . $_SERVER['SERVER_PORT'] . "/pagMatheus/";
$rootLogica = $root . "logica/";
$rootPage = $root . "pages/";
$connRoute = $_SERVER['DOCUMENT_ROOT'] . '/pagMatheus/logica/conexao.php';

$procLoginRoute = $rootLogica . "proc_login.php";
$formRoute = $rootPage . "form_opc.php";
$scriptRoute = $rootLogica . "script.js";
$cepRoute = $rootLogica . "cep.js";

$indexRoute = $root . "index.php";
$cadUserRoute = $rootPage . "cad_usuario.php";
$procCadUserRoute = $rootLogica . "proc_cad_usuario.php";
$editUserRoute = $rootPage . "edit_usuario.php?id=";
$procEditUserRoute = $rootLogica . "proc_edit_usuario.php";
$delUserRoute = $rootLogica . "proc_apagar_usuario.php?id=";
$loginRoute = $rootPage . "login.php";

$listJurRoute = $rootPage . "listar_juridica.php";
$cadJurRoute = $rootPage . "cad_pessoa_juridica.php";
$procCadJurRoute = $rootLogica . "proc_cad_pessoa_juridica.php";
$editJurRoute = $rootPage . "edit_pessoa_juridica.php?id=";
$procEditJurRoute = $rootLogica . "proc_edit_pessoa_juridica.php";
$delJurRoute = $rootLogica . "proc_apagar_pessoa_juridica.php?id=";
