<?php
namespace App\Controllers;

use System\Core\Database;
use System\Core\View;

class HomeController {
    public function index() {
       
        $db = new Database();
        
        
        $users = $db->table('users')->find(6); 

        $view = new View();
        $view->render('home', ['users' => $users, 'title' => 'User List']);
    }
}
