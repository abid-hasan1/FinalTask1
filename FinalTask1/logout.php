<?php
session_start();
require_once('./controller/Controller.php');
$auth = new AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logOut'])) {
    $auth->logout();
}
