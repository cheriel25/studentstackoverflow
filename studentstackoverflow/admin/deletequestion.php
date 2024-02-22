<?php

require "../check.php";
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';

    deleteQuestion($pdo, $_POST['id']);
    header('location: questions.php');


} catch (PDOException $e){
    $title= 'An error has occurred';
    $output='Unable to connect to delete question:' . $e->getMessage();
}

include '../templates/admin_layout.html.php';