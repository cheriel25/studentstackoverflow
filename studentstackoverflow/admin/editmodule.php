<?php
require "../check.php";

include '../includes/DatabaseConnection.php';
include '../includes/DataBaseFunctions.php';


    try{
       if(isset($_POST['moduleName'])){
        updateModule($pdo, $_POST['moduleid'], $_POST['moduleName']);
        header('location: modules.php');
    }else{
        
        $module = getModule($pdo, $_GET['id']);
        $title ='Edit Module';

        ob_start();
        include '../templates/editmodule.html.php';
        $output = ob_get_clean();
}

    }catch (PDOException $e){
        $title ='An error occurred';
        $output ='Error editing module:' . $e->getMessage();

    }



include '../templates/admin_layout.html.php';