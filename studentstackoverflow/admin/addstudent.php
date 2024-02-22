<?php 

require "../check.php";
if(isset($_POST['name'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DataBaseFunctions.php';

        insertStudent($pdo, $_POST['name']);
        header('location: students.php');
    }catch (PDOException $e){
        $title ='An error occurred';
        $output ='Database error:' . $e->getMessage();

    }


} else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    $title ='Add a new student';
    $students = allStudents($pdo);
    ob_start();
    include '../templates/addstudent.html.php';
    $output = ob_get_clean();
}

include '../templates/admin_layout.html.php';