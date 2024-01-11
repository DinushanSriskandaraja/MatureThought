<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetureThought</title>
    <link rel="icon" href="assets/logo.ico" type="image/x-icon" />
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="post.js"></script>
</head>

<body>
    <?php
    include('php/config.php');
    session_start();
    $sessionExists = isset($_SESSION['mail']);
    if ($sessionExists) {
        $mail = $_SESSION['mail'];
    } else {
        $mail = 'matureThoughts@maturethoughts.com';
    }
    $sql = "SELECT * FROM user WHERE mail='$mail'";
    $result = $conn->query($sql);
    $userData = $result->fetch_assoc();
    $postSql = "SELECT thoughts.time, user.name, thoughts.thoughts 
    FROM thoughts
    JOIN user ON user.mail = thoughts.mail ORDER BY id ";
    $postResult = $conn->query($postSql);
    // $postData = $postResult->fetch_assoc();
    ?>


    <section class="body">
        <section class="leftPanal">
            <!-- Profile Card -->
            <div class="card">
                <div class="profile" id="logedin">
                    <img src="/assets/logo.png" alt="" id="profilePic" class="profilePic-MD">
                    <div class="profileData">
                        <h4>
                            <?php echo $userData['name']; ?>
                        </h4>

                        <p><a href="">
                                <?php echo $userData['mail']; ?>
                            </a></p>
                        <p id="aboutUser">
                            <?php echo $userData['Bio']; ?>
                        </p>
                    </div>
                </div>
                <div class="btnSet">
                    
                    <?php if ($sessionExists): ?>
                        <form method="post" action="/php/access.php">
                            <button type="submit" name="logOut">Log Out</button>
                        </form>
                        <form method="post" action="/editProfile.php">
                            <input type="hidden" name="mail"  value="<?php echo $_SESSION['mail']?>">
                            <button type="submit" name="editProfile" >Edit Profile</button>
                        </form>
                    <?php else: ?>
                        <button onclick="attemptQuiz()" id="quizBtn">Attumpt Quiz</button>
                    <button onclick="seePost()" id="postBtn">See Post</button>
                        <button onclick='window.location.href = "access.php"'>Log In</button>
                    <?php endif; ?>
                </div>
            </div>
            <a class="privacyPolicy" href="privacyPolicy.html">privacy policy</a>
        </section>
        <!-- Feed Panal -->
        <section class="feedPanal" id="scrollPost">
            <div class="scrollPost">
                <?php while ($row = $postResult->fetch_assoc()) {?>
                    <div id="post">
                        <div id="postUser">
                            <img src="/assets/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg"
                                alt="" srcset="" id="userProfilePic" class="profilePic-SM">
                            <div class="userData">
                                <a href="userProfile.html">
                                    <h6 id="userName">
                                        <?php echo $row['name']; ?>
                                    </h6>
                                </a>
                                <p>
                                    <?php echo $row['time']; ?>
                                </p>
                            </div>
                        </div>
                        <div id="feedPost">
                            <p>
                                <?php echo $row['thoughts']; ?>
                            </p>
                        </div>
                    </div>
                    <?php }?>
                <div id="postContainer"></div>
                <?php if ($sessionExists): ?>
                    <!-- Post Writing -->
                    <div class="newPost" id="postWriter">
                        <form action="/php/post.php" method="post">
                            <textarea name="thought" id="postContent"></textarea>
                            <div class="postBtn">
                                <button class="share" type="submit" name="shareBtn">Share<i
                                        class="fa-regular fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>

            </div>
        </section>

        <section id="quiz"></section>
        <!-- <iframe  src="quiz.html" frameborder="0"></iframe> -->
        <!-- Own Post -->
        <?php if ($sessionExists): ?>
            <section class="rightPanal">
                <div id="shared">
                    <h4>Your Writings</h4>
                    <?php
                    $sql = "SELECT thoughts.time, user.name, thoughts.thoughts 
                    FROM thoughts
                    JOIN user ON thoughts.mail = user.mail
                    WHERE thoughts.mail = '$mail' ORDER BY id DESC";
                    $ownPost = $conn->query($sql);
                    while ($draft = $ownPost->fetch_assoc()) {
                        // Display user data in a loop
                        ?>
                        <div id="post">
                            <div id="postUser">
                                <img src="/assets/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg"
                                    alt="" srcset="" id="userProfilePic" class="profilePic-SM">
                                <div class="userData">
                                    <a href="userProfile.html">
                                        <h6 id="userName">
                                            <?php echo $draft['name']; ?>
                                        </h6>
                                    </a>
                                    <p>
                                        <?php echo $draft['time']; ?>
                                    </p>

                                    
                                </div>
                            </div>
                            <div id="feedPost">
                                <p>
                                    <?php echo $draft['thoughts']; ?>
                                </p>
                            </div>
                        </div>
                        <div id="postContainer"></div>
                        <?php
                    }

                    // Free the result set
                    ?>
                </div>

            </section>
        <?php endif ?>
    </section>
</body>

</html>