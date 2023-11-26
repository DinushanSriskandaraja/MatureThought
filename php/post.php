<?php
session_start();
include('config.php');
if(isset($_POST["shareBtn"])){
echo'clicked';

    $time=date('Y-m-d H:i');
    $mail = $_SESSION['mail'];
    $thoughts=$conn->real_escape_string($_POST['thought']);
    $sql ="INSERT INTO thoughts (thoughts, time, mail) VALUE ('$thoughts','$time','$mail')";
    $result=mysqli_query($conn,$sql);
    header("Location:../index.php");
}