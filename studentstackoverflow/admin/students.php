<?php
require "../check.php";
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';

    $students = allStudents($pdo);
    $title = 'Students List';
    $totalStudents = totalStudents($pdo);

    ob_start(); 
    include '../templates/students.html.php';
   
    $output = ob_get_clean();

} catch (PDOException $e){
    $title= 'An error has occured';
    $output='Database error:' . $e->getMessage();
}

include '../templates/admin_layout.html.php';