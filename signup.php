<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="access.css">
    <title>access to Mature Thought</title>
</head>

<body>
<!-- <script>
function getCookie(cookieName) {
    var name = cookieName + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var cookieArray = decodedCookie.split(';');

    for (var i = 0; i < cookieArray.length; i++) {
        var cookie = cookieArray[i].trim();
        if (cookie.indexOf(name) == 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }

    return null;
}

// Get the value of the "score" cookie
var scoreValue = getCookie("score");

// Use the retrieved value as needed
console.log("Score from cookie: " + scoreValue);</script> -->
    <section>
        <div class="signUp" id="signUp">
            <form action="/metureThought/php/access.php" method="post" id="signup">
                <!-- <input type="text" name="mail"><label for="">Email</label> -->
                <input type="text" id="name" name="name"><label for="name">user name</label>
                <input type="email" id="mail" name="mail"><label for="mail">Email Address</label>
                <input type="password" name="password" id="password">
                <label for="password">Password</label>
                <input type="text" disabled id="score" value=<?php $score = isset($_COOKIE['score']) ? $_COOKIE['score'] : null; echo $score; ?> name="score"><label for="score">Your Score</label>
                <button name="btnSignUp">Sign-up</button>
            </form>
        </div>
    </section>

    <script src="script.js"></script>
    <script src="quiz.js"></script>

</body>


</html>