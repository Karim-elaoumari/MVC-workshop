<?php

class Utilisateur {
    public static function getAll($db){
        $stmt = $db->prepare('SELECT * FROM utilisateurs');
        $stmt->execute();

        return $stmt->fetchAll();
    }
}