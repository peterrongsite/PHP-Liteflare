<?php
namespace App\Controllers;

use System\Core\Database;
use System\Core\View;

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
            'username' => 'smart'
        ];


        $users = $db->table('tbl_users')->find(2); 

// print_r($users);
        // Update the record in the 'tbl_users' table
       
        $db->table('tbl_users')->where('id', 2)->delete($data);







    }
}
