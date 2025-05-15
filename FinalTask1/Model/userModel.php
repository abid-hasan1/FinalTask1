<?php
class userModel {
    public static function validate($id, $pass) {
        
        return !empty($id) && !empty($pass);
    }
}