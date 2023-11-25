<?php
include('config.php');
// if (!$conn) {
//     echo '<script>alert("not connected")</script>';
// }else{
//     echo '<script>alert("connected")</script>'; }
// echo"hi";
if(isset($_POST["btnLogin"])){
    
    $mail=$_POST["mail"];   
    $userPassword=$_POST["password"];    

    $sql ="SELECT * FROM user WHERE mail='$mail' AND password='$userPassword'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
    echo '<script>alert("correcte")</script>';
      session_start();
      $_SESSION["mail"]=$mail;
    header("Location:../index.php");
    }else{
        echo '<script>alert("not correcte")</script>';

    header("Location:signup.html");
    }
}
if(isset($_POST["btnSignUp"])){
    $mail=$_POST["mail"];   
    $userPassword=$_POST["password"];
    $userName=$_POST["name"];   
    $sql ="INSERT INTO user VALUE ('$mail','$userName','$userPassword',null,null)";
    mysqli_query($conn,$sql);
    session_start();
    $_SESSION["mail"]=$mail;
    header("Location:../index.php");
}
if(isset($_POST["logOut"])){
    session_start();
    // session_unset($_SESSION['mail']);
    session_destroy();
    header("Location:../index.php");
}
?>