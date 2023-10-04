const questions = [{
        question: "You're at a social gathering, and someone makes a snide remark about you. What's the mature response?",
        options: ["Retaliate with an even snarkier comment.", "Ignore the remark and walk away.", "Burst into tears and seek sympathy from others.", "Publicly criticize the person for their comment."],
        correctAnswer: "Ignore the remark and walk away."
    },
    {
        question: "Your friend borrowed money from you and hasn't paid it back as promised. What's the mature course of action?",
        options: ["Pretend you never lent the money.", "Bad-mouth your friend to others.", "Threaten legal action immediately.", "Patiently remind your friend and discuss a repayment plan."],
        correctAnswer: "Patiently remind your friend and discuss a repayment plan."
    },
    {
        question: "Your co-worker takes credit for your idea during a team meeting. How should you handle this situation?",
        options: ["Confront your co-worker publicly and accuse them of stealing your idea.", "Sulk and avoid participating in future meetings.", " Discuss the matter privately with your co-worker and express your concerns.", "Take credit for their ideas in retaliation."],
        correctAnswer: "Discuss the matter privately with your co-worker and express your concerns."
    },
    {
        question: "You've made a mistake at work that could cost your team time and effort to fix. What's the mature response?",
        options: ["Blame a colleague for the mistake to avoid consequences.", "Conceal the error and hope no one notices.", "Quit your job to avoid facing the consequences.", "Own up to the mistake, apologize, and work on a solution."],
        correctAnswer: "Own up to the mistake, apologize, and work on a solution."
    },
    {
        question: "You're driving, and another driver cuts you off and gestures angrily. How should you react?",
        options: ["Ignore the driver and continue driving safely.", "Tailgate the other driver and retaliate with aggressive gestures.", "Shout insults at the driver and make obscene gestures.", "Report the incident to the police immediately."],
        correctAnswer: "Ignore the driver and continue driving safely."
    }
];

let currentQuestionIndex = 0;
let correctAnswerCount = 0;

const questionElement = document.getElementById("question");
const optionsContainer = document.getElementById("options-container");
const nextButton = document.getElementById("next-button");

function displayQuestion(question) {
    questionElement.textContent = question.question;
    optionsContainer.innerHTML = "";

    for (const option of question.options) {
        const optionElement = document.createElement("button");
        optionElement.textContent = option;
        optionElement.addEventListener("click", () => checkAnswer(option, question.correctAnswer));
        optionsContainer.appendChild(optionElement);
    }
}

function checkAnswer(selectedOption, correctAnswer) {
    if (selectedOption === correctAnswer) {
        // Handle correct answer
        ++correctAnswerCount;
    }
    // else {
    //     // Handle incorrect answer
    //     alert("Incorrect. The correct answer is: " + correctAnswer);
    // }

    currentQuestionIndex++;

    if (currentQuestionIndex < questions.length) {
        displayQuestion(questions[currentQuestionIndex]);
    } else {
        if ((correctAnswerCount / questions.length) * 100 >= 70) {
            window.location.href = "access.html";
            var signUp = document.getElementById("signUp");
            signUp.style.display = "felx";
        } else {
            alert("Score is insufficient, Please try again")
            seePost();
        }
    }
}
// Initial display
displayQuestion(questions[currentQuestionIndex]);