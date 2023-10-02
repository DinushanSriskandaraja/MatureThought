// $(function() {
//     $("#quiz").load("access.html");
// });

function attemptQuiz() {
    var y = document.getElementById("quiz");
    var x = document.getElementById("scrollPost");
    if (y.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";

    } else {
        x.style.display = "none";
        y.style.display = "block";
        $("#quiz").load("access.html");
    }
}