<?php
include('config.php');

if(isset($_POST["btnLogin"])){
    
    $mail=$_POST["mail"];   
    $userPassword=$_POST["password"];    
    if($mail=='admin@admin.com' && $userPassword=='admin'){
        session_start();
        $_SESSION["adminMail"]=$mail;
    }
    $sql ="SELECT * FROM user WHERE mail='$mail' AND password='$userPassword'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
    echo '<script>alert("correcte")</script>';
      session_start();
      $_SESSION["mail"]=$mail;
      
    header("Location:../index.php");
    }else{
        echo '<script>alert("not correcte")</script>';

    header("Location:signup.php");
    }
}
if(isset($_POST["btnSignUp"])){
    $score=$_COOKIE['score'];
    $mail=$_POST["mail"];   
    $userPassword=$_POST["password"];
    $userName=$_POST["name"];   
    $sql ="INSERT INTO user(mail,name,password,score) VALUE ('$mail','$userName','$userPassword','$score')";
    mysqli_query($conn,$sql);
    session_start();
    $_SESSION["mail"]=$mail;
    header("Location:../index.php");
    setcookie("score", "", time() - 3600, "/");
}
if(isset($_POST["logOut"])){
    session_start();
    // session_unset($_SESSION['mail']);
    session_destroy();
    header("Location:../index.php");
}
?>