<?php
require "../check.php";

include '../includes/DatabaseConnection.php';
include '../includes/DataBaseFunctions.php';


    try{
       if(isset($_POST['name'])){
        updateStudent($pdo, $_POST['id'], $_POST['name']);
        header('location: students.php');
    }else{
        
        $student = getStudent($pdo, $_GET['id']);
        $title ='Edit Student';

        ob_start();
        include '../templates/editstudent.html.php';
        $output = ob_get_clean();
}

    }catch (PDOException $e){
        $title ='An error occurred';
        $output ='Error editing student:' . $e->getMessage();

    }



include '../templates/admin_layout.html.php';