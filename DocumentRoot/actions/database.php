<?php 
try{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=forum;charset=utf8;', 'root', 'root');
}catch(Exception $e){

    die(     'Erreur : ' . $e->getMessage());

}