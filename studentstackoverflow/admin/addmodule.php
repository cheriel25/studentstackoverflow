<?php 

require "../check.php";
if(isset($_POST['moduleName'])){
    try{
        include '../includes/DatabaseConnection.php';
        include '../includes/DataBaseFunctions.php';

        insertModule($pdo, $_POST['moduleName']);
        header('location: modules.php');
    }catch (PDOException $e){
        $title ='An error occurred';
        $output ='Database error:' . $e->getMessage();

    }


} else{
    include '../includes/DatabaseConnection.php';
    include '../includes/DataBaseFunctions.php';
    $title ='Add a new module';
    $modules = allModules($pdo);
    ob_start();
    include '../templates/addmodule.html.php';
    $output = ob_get_clean();
}

include '../templates/admin_layout.html.php';