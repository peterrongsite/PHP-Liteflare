<?php
namespace App\Controllers;

use App\Services\Password;

class AuthController {
    public function register($username, $password) {
        // Hash the password
        $hashedPassword = Password::hash($password);
        
        // Save the user with the hashed password to the database
        // ...
    }

    public function login($username, $password) {
        // Retrieve the hashed password from the database
        // ...

        // Verify the password
        if (Password::verify($password, $hashedPasswordFromDb)) {
            // Password is correct
            // ...
        } else {
            // Password is incorrect
            // ...
        }
    }
}
