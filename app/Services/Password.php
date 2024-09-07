<?php
namespace App\Services;

class Password {
    public static function hash($password) {
        // Hash the password using a secure hashing algorithm
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function verify($password, $hash) {
        // Verify the hashed password
        return password_verify($password, $hash);
    }
}
