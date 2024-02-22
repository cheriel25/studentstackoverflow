<?php 
require "../check.php";
if(isset($_POST['questiontext'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DataBaseFunctions.php';

        insertQuestion($pdo, $_POST['questiontext'], $_POST ['students'], $_POST['module']);
        header('location: questions.php');
    }catch (PDOException $e){
        $title ='An error occurred';
        $output ='Database error:' . $e->getMessage();

    }

} else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    $title ='Add a new question';
    $students = allStudents($pdo);
    $modules = allModules($pdo);
    ob_start();
    include '../templates/addquestion.html.php';
    $output = ob_get_clean();
}

include '../templates/admin_layout.html.php';