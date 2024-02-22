<?php

require "../check.php";
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';

    deleteStudent($pdo, $_POST['id']);
    header('location: students.php');


} catch (PDOException $e){
    $title= 'An error has occurred';
    $output='Unable to connect to delete student:' . $e->getMessage();
}

include '../templates/admin_layout.html.php';