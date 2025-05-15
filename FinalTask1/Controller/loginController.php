<?php
require_once(__DIR__ . '/../model/userModel.php');

class AuthloginController {
    public function login($id, $pass) {
        if (userModel::validate($id, $pass)) {
            $_SESSION['status'] = true;
            header('Location: home.php');
            exit();
        } else {
            return "Invalid ID or Password!";
        }
    }

    public function logout() {
        session_destroy();
        header('Location: login.php');
        exit();
    }
}
