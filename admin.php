<?php
if (!isset($_SESSION['adminMail'])) {
    header('Location:/index.php');
}
include('php/config.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        #editBtn {
    color: var(--txt);
    background-color: var(--bg);
    border: 2px solid;
    padding: 8px 20px;
    border-radius: 20px;
}

#dltBtn {
    background-color: var(--txt);
    color: var(--bg);
    border: 2px solid;
    padding: 8px 20px;
    border-radius: 20px;
}
table {
    border-radius: 70px;
    width: 90%;
    border-collapse: collapse;
    margin: 20px;
}

th, td {
    font-weight: 450;
    font-size: 14px;
    color: var(--txt);
    margin: 15px 0 20px 0;
    border: 1px solid var(--txt);
    padding: 12px;
    /* text-align: left; */
    /* text-align: center; */

}

th {
    text-align: center;
    color: var(--bg);
    background-color: var(--txt);
}
section{
    display: flex;
    flex-direction:column;
    align-items: center;
    justify-content: center;
}
    </style>
    <title>Admin</title>
</head>

<body>
    <section>
        <?php $sql = "SELECT * FROM user";
$result = $conn->query($sql);
// $userData = $result->fetch_assoc();
?>
        <h1>User List</h1>
    <table>
        <thead>
            <th>Name</th>
            <th>Mail</th>
            <th>Score</th>
            <th >Bio</th>
            <th>Action</th>
        </thead>
        <tbody>
            
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $row['name']?></td>
                    <td><?php echo $row['mail']?></td>
                    <td><?php echo $row['score']?></td><td><?php echo $row['Bio']?></td>
                    <td><form method='post' action=''>
                  <input type='hidden' name='mail' value="<?php echo $row['mail']?>">
                  <button id="dltBtn" name="dltBtn" type="submit">Delete</button>
              </form>
              <form method='post' action=''>
                <input type='hidden' name='mail' value="<?php echo $row['mail']?>">
                  <button id="dltBtn" name="viewBtn" type="submit">View</button>
              </form></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
    if(isset($_POST["dltBtn"])){
    $mail = $_POST['mail'];

    // Validate and sanitize the input if necessary

    // Delete the user from the database
    $deleteQuery = "DELETE FROM user WHERE mail = '$mail'";

    if (mysqli_query($conn, $deleteQuery)) {

        header("Location: ".$_SERVER['PHP_SELF']);
       
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }}
    ?>
    </section>

<!-- user messages -->
<?php if(isset($_POST["viewBtn"])){?>
    <section>
        <?php
        $mail=$_POST['mail'];
        $sql = "SELECT * FROM thoughts WHERE mail ='$mail'";
$result = $conn->query($sql);
// $userData = $result->fetch_assoc();
?>
        <h1><?php echo $mail?>'s thoughts</h1>
    <table>
        <thead>
            <th>Thoughts</th>
            <th>Time</th>
            <th>Action</th>
        </thead>
        <tbody>
            
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $row['thoughts']?>
            </td>
                    <td><?php echo $row['time']?></td>
                    <td>
                    <form method='post' action=''>
                        <input type='hidden' name='id' value="<?php echo $row['id']?>">
                        <button id="dltBtn" name="dltThoughtBtn" type="submit">Delete Thought</button>
                    </form>
                </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    </section>
    <?php }?><?php
    if(isset($_POST["dltThoughtBtn"])){
    $id = $_POST['id'];


    // Delete the user from the database
    $deleteQuery = "DELETE FROM thoughts WHERE id = $id";

    if (mysqli_query($conn, $deleteQuery)) {
        // header("Location: ".$_SERVER['PHP_SELF']);
       
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }}
    ?>
</body>

</html>