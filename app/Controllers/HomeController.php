<?php
namespace App\Controllers;

use System\Core\Database;
use System\Core\View;
use App\Services\Password;

class HomeController {
    public function index() {
       
        $db = new Database();
        
        
        $users = $db->table('tbl_users')->find(2); 

        $view = new View();
        $view->render('home', ['users' => $users, 'title' => 'User List']);
    }


    public function update(){

        $db = new Database();

        $data = [
            'username' => 'smart',
             'password' =>  $hashedPassword = Password::hash('1234')
        ];


        // $users = $db->table('tbl_users')->find(2); 


       
        $db->table('tbl_userss')->where('id', 2)->insert($data);







    }
}
