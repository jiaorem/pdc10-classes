<?php

include "../init.php";
use Models\Classes;

$dsn = "mysql:host=localhost;dbname=pdc10_classes";
$user = "root";
$passwd = "";
$pdo = new PDO($dsn, $user, $passwd);

    try{ 
        // Save class
        $registerClass = new Classes($_POST['name'], $_POST['description'], $_POST['class_code'], $_POST['teacher_id']);
        $registerClass->addToClass();
        $msg = 'successfully added a new class';
        echo $msg;
        header('Location: index.php');
    }
    catch (Exception $e) {
        $msg = 'failed to add a new class';
        echo $msg;
        error_log($e->getMessage());
    }
?>