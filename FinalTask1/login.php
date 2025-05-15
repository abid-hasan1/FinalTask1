<?php
session_start();
require_once('./Controller/loginController.php');
$auth = new AuthloginController();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $pass = $_POST['pass'] ?? '';
    $error = $auth->login($id, $pass);
}

require('./view/login.php');
