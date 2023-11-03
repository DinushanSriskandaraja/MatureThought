// $(function() {
//     $("#quiz").load("access.html");
// });
let isLogin = false;

function loader() {
    if (document.readyState !== "complete") {
        document.getElementsByClassName("body").style.visibility = "hidden";
        document.getElementById("loader").style.visibility = "visible";
    } else {
        document.getElementById("loader").style.visibility = "hidden";
        document.getElementsByClassName("body").style.visibility = "visible";
    }
}

function attemptQuiz() {
    let quiz = document.getElementById("quiz");
    let post = document.getElementById("scrollPost");
    let postBtn = document.getElementById("postBtn");
    // let postBtn = document.getElementById("quizBtn");
    post.style.display = "none";
    quiz.style.display = "block";
    $("#quiz").load("quiz.html");
    // includeHTML()
    postBtn.style.display = "block";
    quizBtn.style.display = "none";
}



function seePost() {
    let quiz = document.getElementById("quiz");
    let post = document.getElementById("scrollPost");
    post.style.display = "flex";
    quiz.style.display = "none";
    postBtn.style.display = "none";
    quizBtn.style.display = "block";
}

function logOutTriger() {
    let logInBtn = document.getElementById("logIn");
    let logOutBtn = document.getElementById("logOut");
    let editProfile = document.getElementById("editProfile");
    let logedProfile = document.getElementById("logedin");
    let logedOutProfile = document.getElementById("logedout");
    logedOutProfile.style.display = "none";
    logedProfile.style.display = "flex";
    logInBtn.style.display = "block";
    logOutBtn.style.display = "none";
    editProfile.style.display = "none";
    postWriter.style.display = "none";
    shared.style.display = "none";
    return isLogin = false;
}

function logInTriger() {
    let logInBtn = document.getElementById("logIn");
    let logOutBtn = document.getElementById("logOut");
    let editProfile = document.getElementById("editProfile");
    let logedProfile = document.getElementById("logedin");
    let logedOutProfile = document.getElementById("logedout");
    logedOutProfile.style.display = "flex";
    logedProfile.style.display = "none";
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
    window.location.href = "editProfile.html";

}