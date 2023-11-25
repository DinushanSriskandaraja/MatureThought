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
    <!-- <script src="script.js"></script> -->
    <script src="post.js"></script>
</head>

<body >
<?php
                    session_start();
                
                    // Check if the session storage item exists
                    $sessionExists = isset($_SESSION['mail']);
                    ?>
    <!-- <div id="loader">
        <h2 data-text="mature...">mature...</h2>
    </div> -->
    <!-- <iframe src="loader.html" id="loading" frameborder="0"></iframe> -->

    <section class="body">
        <section class="leftPanal">
            <!-- Profile Card -->
            <div class="card">
            <?php if (!$sessionExists):?>
                <div class="profile" id="logedin">
                    <img src="/assets/logo.png" alt="" id="profilePic" class="profilePic-MD">
                    <div class="profileData">
                        <h4>Mature Thoughts</h4>
                        <!-- <h6>user_name</h6> -->
                        <p><a href="">mail</a></p>
                        <p id="aboutUser">A sanctuary for mature minds to exchange refined thoughts.</p>
                    </div>
                </div>
                <?php else: ?>

                <div class="profile" id="logedout">
                    <img src="/assets/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" id="profilePic" class="profilePic-MD">
                    <div class="profileData">
                        <h4>Dinushan Sriskandaraja</h4>
                        <!-- <h6>user_name</h6> -->
                        <p><a href="">mail</a></p>
                        <p id="aboutUser">Curator of Knowledge, Advocate of Wisdom, and Champion of Thoughtful Discourse. Join me in cultivating a community of mature minds.</p>
                    </div>
                </div>
                <?php endif; ?>
                <div class="btnSet">
                    
                    <button onclick="attemptQuiz()" id="quizBtn">Attumpt Quiz</button>
                    <button onclick="seePost()" id="postBtn">See Post</button>
                    
                    
                
                    <?php if ($sessionExists):?>
                        <form method="post" action="/metureThought/php/access.php">
            <button type="submit" name="logOut">Log Out</button>
        </form>
                    <?php else: ?>
    
                        <button  onclick='window.location.href = "access.html"'   >Log In</button>
                    <?php endif; ?>
                    
                </div>
            </div>
            <a class="privacyPolicy" href="privacyPolicy.html">privacy policy</a>
        </section>

        <!-- Feed Panal -->
        <section class="feedPanal" id="scrollPost">
            <div class="scrollPost">
                <div id="post">
                    <div id="postUser">
                        <img src="/assets/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" srcset="" id="userProfilePic" class="profilePic-SM">
                        <div class="userData">
                            <a href="userProfile.html">
                                <h6 id="userName">Dinushan Sriskandaraja</h6>
                            </a>
                            <p>12.00 P.M</p>
                        </div>
                    </div>
                    <div id="feedPost">
                        <p>🚀 Excited to launch MatureThoughts, a space for insightful discussions and mature perspectives. Let's explore the depths of knowledge and wisdom together! 🧠💬 #MatureThoughts #WisdomSharing</p>
                    </div>
                </div>
                <div id="postContainer"></div>
                <?php if ($sessionExists):?>
                <!-- Post Writing -->
                <div class="newPost" id="postWriter">
                    <form action="">
                        <textarea name="" id="postContent"></textarea>
                        <div class="postBtn">
                            <!-- <button class="draft">Draft<i class="fa-regular fa-paper-plane"></i></button> -->
                            <button class="share" onclick="sharePost()" type="reset">Share<i
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
        <section class="rightPanal">
            <div id="shared">
                <h4>Your Writings</h4>
                <!-- <div id="post">
                    <div id="postUser">
                        <img src="/assets/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" srcset="" id="userProfilePic" class="profilePic-SM">
                        <div class="userData">

                            <h6 id="ownName">Dinushan Sriskandaraja</h6>
                            <p>12.00 P.M</p>
                        </div>
                    </div>
                    <div id="ownPost">
                        <p>🚀 Excited to launch MatureThoughts, a space for insightful discussions and mature perspectives. Let's explore the depths of knowledge and wisdom together! 🧠💬 #MatureThoughts #WisdomSharing</p>
                    </div>

                </div> -->
                <div id="post">
                    <div id="postUser">
                        <img src="/assets/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" srcset="" id="userProfilePic" class="profilePic-SM">
                        <div class="userData">
                            <a href="userProfile.html">
                                <h6 id="userName">Dinushan Sriskandaraja</h6>
                            </a>
                            <p>12.00 P.M</p>
                        </div>
                    </div>
                    <div id="feedPost">
                        <p>🚀 Excited to launch MatureThoughts, a space for insightful discussions and mature perspectives. Let's explore the depths of knowledge and wisdom together! 🧠💬 #MatureThoughts #WisdomSharing</p>
                    </div>
                </div>
                <div id="postContainer"></div>

            </div>

        </section>
    </section>
</body>

</html>