<?php
// Classe pour se connecter à la base de données
// Son usage n'est pas obligatoire, vous pouvez faire sans

abstract class DataBase
{
    static public function getDB() {
        try{
        $db = new PDO('mysql:host=localhost:8889;dbname=library_php', "root", "root");
        return $db;
      }catch (Exception $e) {
        echo "Error while connecting to the database: " . $e->getMessage() . "<br/>";
        exit($e->getMessage());

        }
    }
}
?>