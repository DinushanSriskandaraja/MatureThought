// $(function() {
//     $("#quiz").load("access.html");
// });
// let isLogin = false;

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



function editProfile() {
    window.location.href = "editProfile.html";

}