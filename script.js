// $(function() {
//     $("#quiz").load("access.html");
// });
var isLogin = false;

function attemptQuiz() {
    var quiz = document.getElementById("quiz");
    var post = document.getElementById("scrollPost");
    var postBtn = document.getElementById("postBtn");
    // var postBtn = document.getElementById("quizBtn");
    post.style.display = "none";
    quiz.style.display = "block";
    $("#quiz").load("quiz.html");
    postBtn.style.display = "block";
    quizBtn.style.display = "none";
}

function seePost() {
    var quiz = document.getElementById("quiz");
    var post = document.getElementById("scrollPost");
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
    // window.location.href = "access.html";
    return isLogin = true;
}

// function isegistered() {
//     if (isLogin) {
//         if ((correctAnswerCount / questions.length) * 100 >= 70) {
//             window.location.href = "access.html";
//         } else {
//             alert("Score is insufficient, Please try again")
//             seePost();
//         }
//     } else {
//         alert("Score succesfully updates!");
//     }
// }
// function isLoged() {
//     if (isLogin) {
//         logOut();
//     } else {
//         logIn();
//     }
//     return isLogin;
// }