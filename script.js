// $(function() {
//     $("#quiz").load("access.html");
// });

function attemptQuiz() {
    var y = document.getElementById("quiz");
    var x = document.getElementById("scrollPost");
    // if (y.style.display === "none" || x.style.display === "flex") {
    //     x.style.display = "block";
    //     y.style.display = "none";

    // } else {
    x.style.display = "none";
    y.style.display = "block";
    $("#quiz").load("quiz.html");
    // }
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