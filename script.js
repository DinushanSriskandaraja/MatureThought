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

function logOutTriger() {
    var logInBtn = document.getElementById("logIn");
    var logOutBtn = document.getElementById("logOut");
    var editProfile = document.getElementById("editProfile");
    logInBtn.style.display = "block";
    logOutBtn.style.display = "none";
    editProfile.style.display = "none";
    postWriter.style.display = "none";
    shared.style.display = "none";
    return isLogin = false;
}

function logInTriger() {
    var logInBtn = document.getElementById("logIn");
    var logOutBtn = document.getElementById("logOut");
    var editProfile = document.getElementById("editProfile");
    logInBtn.style.display = "none";
    logOutBtn.style.display = "block";
    editProfile.style.display = "block";
    postWriter.style.display = "block";
    window.open("access.html", "_blank");
    shared.style.display = "block";

    // window.location.href = "access.html";
    return isLogin = true;
}

function editProfile() {
    window.location.href = "profile.html";

}