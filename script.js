// $(function() {
//     $("#quiz").load("access.html");
// });
var isLogin = false;

function attemptQuiz() {
    var y = document.getElementById("quiz");
    var x = document.getElementById("scrollPost");
    x.style.display = "none";
    y.style.display = "block";
    $("#quiz").load("quiz.html");
    postBtn.style.display = "block";
    quizBtn.style.display = "none";
}

function seePost() {
    var quiz = document.getElementById("quiz");
    var post = document.getElementById("scrollPost");
    var postBtn = document.getElementById("postBtn");
    post.style.display = "flex";
    quiz.style.display = "none";
    postBtn.style.display = "none";
    quizBtn.style.display = "block";
}

function logOut() {
    var logInBtn = document.getElementById("logIn");
    var logOutBtn = document.getElementById("logOut");

    logInBtn.style.display = "block";
    logOutBtn.style.display = "none";
    return isLogin = false;
}

function logIn() {
    var logInBtn = document.getElementById("logIn");
    var logOutBtn = document.getElementById("logOut");
    logInBtn.style.display = "none";
    logOutBtn.style.display = "block";
    window.open("access.html", "_blank");
    return isLogin = true;
}


// function isLoged() {
//     if (isLogin) {
//         logOut();
//     } else {
//         logIn();
//     }
//     return isLogin;
// }