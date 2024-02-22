<?php
require "../check.php";

include '../includes/DatabaseConnection.php';
include '../includes/DataBaseFunctions.php';


    try{
       if(isset($_POST['questiontext'])){
        updateQuestion($pdo, $_POST['questionid'], $_POST['questiontext']);
        header('location: questions.php');
    }else{
        
        $question = getQuestion($pdo, $_GET['id']);
        $title ='Edit Question';

        ob_start();
        include '../templates/editquestion.html.php';
        $output = ob_get_clean();
}

    }catch (PDOException $e){
        $title ='An error occurred';
        $output ='Error editing question:' . $e->getMessage();

    }



include '../templates/admin_layout.html.php';