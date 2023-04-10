<?php 
session_start();
try{
    $bdd = new PDO('mysql:host=db;dbname=test;charset=utf8;', 'root', 'root');
}catch(Exception $e){

    die(     'Erreur : ' . $e->getMessage());

}