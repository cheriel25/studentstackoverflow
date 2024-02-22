<?php 


if(isset($_POST['name'])){

  
    try{
        include 'includes/DatabaseConnection.php';
        $title = "Sign Up";

        $sql = 'INSERT INTO student SET
       `name` = :name,
        email = :email,
        `password` = :password';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':name', $_POST['name']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':password', md5($_POST['password'].'s@1t'));
        $stmt->execute();
        header('location: index.php');
    }catch (PDOException $e){
      
        $output = 'Database error: ' . $e->getMessage();
    }
}else{
  
     ob_start();
    include 'templates/sign_up.html';
    $title = "Sign Up";
    $output = ob_get_clean();
}
include 'templates/layout.html.php';

