<?php
session_start();
if(isset($_POST['email'])){
    try{
  include 'includes/DatabaseConnection.php';
     $title = "Log In ";
    $sql = 'SELECT COUNT(*) FROM student
        WHERE email = :email AND `password` = :password';
    $s = $pdo->prepare($sql);
    $s->bindValue(':email', $_POST['email']);
    $s->bindValue(':password', md5($_POST['password'] . 's@1t'));
    $s->execute();
    $row = $s->fetch();
}
catch (PDOException $e){
    $output = 'Database error: ' . $e->getMessage();
}
    if ($row[0] > 0)
    {
        $_SESSION['loggedin'] = 'Y';
        echo "<script>alert('Welcome!')</script>
        <script>window.location = 'admin/adminindex.php'</script>";
    }
    else
    {
        echo "<script>alert('Invalid username or password')</script>
				<script>window.location = 'login.php'</script>";
    }
}else{
     ob_start();
    include 'templates/login.html';
    $title = "Log In ";
    $output = ob_get_clean();
}
include 'templates/layout.html.php';