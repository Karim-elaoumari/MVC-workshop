<?php

require_once '../app/modals/Utilisateur.php';
class ExampleController {
    public function run(){
        $db = new PDO('mysql:host=localhost;dbname=mvc_test','root','');
        $data = array(
            'title' => 'Listes des utilisateurs',
            'utilisateurs' => Utilisateur::getAll($db)
        );
        require_once '../app/views/example.php';
    }


}