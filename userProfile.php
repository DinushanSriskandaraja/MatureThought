<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <?php
    session_start();
    if(!isset($_SESSION['mail'])){
        header("Location:access.html");
    }
    ?>
    <section class="body">
        <section class="leftPanal">
            <!-- Profile Card -->
            <div class="card">
                <div class="profile">
                    <img src="/misaya muruku dp.jpg" alt="" id="profilePic" class="profilePic-MD">
                    <div class="profileData">
                        <h4>Dinushan Sriskandaraja</h4>
                        <!-- <h6>user_name</h6> -->
                        <p><a href="">mail</a></p>
                        <p id="aboutUser">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed commodi natus facere corporis repellat optio, labore magni laborum dolore corrupti molestias impedit exercitationem odit. Recusandae adipisci fugit numquam obcaecati
                            quibusdam!
                        </p>
                    </div>
                </div>
                <br>
            </div>
        </section>
        <section class="feedPanal" id="scrollPost">
            <div class="scrollPost">
                <div id="post">
                    <div id="postUser">
                        <img src="/misaya muruku dp.jpg" alt="" srcset="" id="userProfilePic" class="profilePic-SM">
                        <div class="userData">
                            <h6 id="userName">Dinushan Sriskandaraja</h6>
                            <p>12.00 P.M</p>
                        </div>
                    </div>
                    <div id="feedPost">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugit expedita, laudantium pariatur deleniti, dolorem illo eligendi omnis voluptas iusto reiciendis itaque dignissimos modi, beatae ab ratione maiores optio voluptates.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>

</html>