<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="access.css">
    <title>Your Profile</title>
</head>

<body>
    <?php 
    include('php/config.php');
    if(isset($_SESSION['mail'])){
        header("Location:index.php");
    }
    if(isset($_POST['editProfile'])){
        $mail = $_POST["mail"];
        $sql = "SELECT * FROM user WHERE mail='$mail'";
        $result = $conn->query($sql);
        $userData = $result->fetch_assoc();
    }


    if(isset($_POST['saveBtn'])){
    // Handle form submission to update the user's profile
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $bio = $_POST["Bio"];
    
    // Use prepared statement to avoid SQL injection
    $updateSql = "UPDATE user SET name=?, Bio=? WHERE mail=?";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bind_param("sss", $name, $bio, $mail);
    
    if($updateStmt->execute()){
        // Profile updated successfully
        header('Location:index.php');
    } else {
        // Handle the case where the update fails
        echo "Error updating profile: " . $updateStmt->error;
    }
    
    $updateStmt->close();
}
    ?>
    <section class="profilePage">
        <form method="post" action="">
            <!-- <input type="text" name="name"><label for="name">full name</label> -->
            <input type="text" name="name" value="<?php echo $userData['name']; ?>"><label for="name">user name</label>
            <input type="email" name="mail" value="<?php echo $userData['mail']; ?>"><label for="mail">Email Address</label>
            <textarea name="Bio" id="bio" ><?php echo $userData['Bio']; ?></textarea><label for="bio">Bio</label>
            <button name="saveBtn" type="submit">Save</button>
        </form>
    </section>

</body>
<style>
    textarea {
        transform: translateX(10px);
        width: 90%;
        border-bottom: solid 2px var(--secDark);
    }
    
    label {
        transform: translateY(-80px);
    }
    
    label[for="bio"] {
        transform: translateY(-120px);
    }
    
    form {
        min-width: 350px;
        padding-top: 70px;
    }
    
    button {
        margin: 0;
    }
</style>

</html>