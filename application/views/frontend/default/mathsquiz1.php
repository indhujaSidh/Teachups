
<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.footer-area{
    display:none;
}
body {
  background-color:#fff;
}
.start-screen,
.score-container {
    background-color:#fff;
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
button {
  border: none;
  outline: none;
  cursor: pointer;
}
#start-button,
#restart {
  font-size: 1.3em;
  padding: 0.5em 1.8em;
  border-radius: 0.2em;
}
#restart {
  margin-top: 0.9em;
}
#display-container {
  background-color: #ffffff;
  padding: 3.1em 1.8em;
  width: 80%;
  max-width: 37.5em;
  margin: 0 auto;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  border-radius: 0.6em;
}
.header {
  margin-bottom: 1.8em;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 0.6em;
  border-bottom: 0.1em solid #c0bfd2;
}
.timer-div {
  background-color: #e1f5fe;
  width: 7.5em;
  border-radius: 1.8em;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.7em 1.8em;
}
.question {
  margin-bottom: 1.25em;
  font-weight: 600;
}
.option-div {
  font-size: 0.9em;
  width: 100%;
  padding: 1em;
  margin: 0.3em 0;
  text-align: left;
  outline: none;
  background: transparent;
  border: 1px solid #c0bfd2;
  border-radius: 0.3em;
}
.option-div:disabled {
  color: #000000;
  cursor: not-allowed;
}
#next-button {
  font-size: 1em;
  margin-top: 1.5em;
  background-color: #0a69ed;
  color: #ffffff;
  padding: 0.7em 1.8em;
  border-radius: 0.3em;
  float: right;
}
.hide {
  display: none;
}
.incorrect {
  background-color: #ffdde0;
  color: #d32f2f;
  border-color: #d32f2f;
}
.correct {
  background-color: #e7f6d5;
  color: #689f38;
  border-color: #689f38;
}
#user-score {
  font-size: 1.5em;
  color: #ffffff;
}

#start-button,
#next-button,
#restart{
    background-color:#4e0742 ;
}

</style> 
<div class="section">
<div class="start-screen">
      <button id="start-button"style="color:white">Start Your question here</button>
    </div>
    <div id="display-container">
      <div class="header">
        <div class="number-of-count">
          <span class="number-of-question">1 of 10 questions</span>
        </div>
        <div class="timer-div">
          <img src="timer-icon.svg" />
          <span class="time-left">10s</span>
        </div>
      </div>
      <div id="container">
        <!-- questions and options will be displayed here -->
      </div>
      <button id="next-button" stye="color:white">Next</button>
    </div>
    <div class="score-container hide">
      <div id="user-score" style="color:#7c4a69">Demo Score</div>
      <button id="restart" style="color:white">Restart</button>
    </div>
</section>



<script>
    //References
let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let countOfQuestion = document.querySelector(".number-of-question");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");
let questionCount;
let scoreCount = 0;
let count = 11;
let countdown;

//Questions and Options array

const quizArray = [
  {
    id: "0",
    question: "What is 78 + 56?",
    options: ["134", "138", "124", "128"],
    correct: "134",
  },
  {
    id: "1",
    question: "Which is a good strategy for adding 9?",
    options: ["Add 20 and take away 11", "Add 10 and take away 1", "Take away 10 add 1", "Take away 20 add 11"],
    correct: "Add 10 and take away 1",
  },
  {
    id: "2",
    question: "75 subtract 40?",
    options: ["30", "35", "40", "45"],
    correct: "35",
  },
  {
    id: "3",
    question: "Which will not total 100?",
    options: ["65 + 35", "55 + 45", "75 + 35", "85 + 15"],
    correct: "75 + 35",
  },
  {
    id: "4",
    question: "Which number sentence is incorrect?",
    options: ["8 + 5 = 13", "13 - 5 = 8", "5 + 8 = 13", "8 - 5 = 13"],
    correct: "8 - 5 = 13",
  },
  {
    id: "5",
    question: "Which is the best method of calculating 45 + 46?",
    options: ["Double 45 add 1", "Add the tens first and then the ones", "Count on from 45", "Add the ones first and then the tens"],
    correct: "Double 45 add 1",
  },
  {
    id: "6",
    question: "Add 8, 9 and 4.",
    options: ["17", "20", "21", "25"],
    correct: "21",
  },
  {
    id: "7",
    question: "What is the sum of 14 and 8?",
    options: ["18", "20", "22", "25"],
    correct: "22",
  },
  {
    id: "8",
    question: "Which is the missing number: 7 + __ = 20?",
    options: ["10", "12", "13", "14"],
    correct: "13",
  },
  {
    id: "9",
    question: "17 take away 8.",
    options: ["9", "15", "12", "14"],
    correct: "9",
  },



];

//Restart Quiz
restart.addEventListener("click", () => {
  initial();
  displayContainer.classList.remove("hide");
  scoreContainer.classList.add("hide");
});

//Next Button
nextBtn.addEventListener(
  "click",
  (displayNext = () => {
    //increment questionCount
    questionCount += 1;
    //if last question
    if (questionCount == quizArray.length) {
      //hide question container and display score
      displayContainer.classList.add("hide");
      scoreContainer.classList.remove("hide");
      //user score
      userScore.innerHTML =
        "Your score is " + scoreCount + " out of " + questionCount;
    } else {
      //display questionCount
      countOfQuestion.innerHTML =
        questionCount + 1 + " of " + quizArray.length + " Question";
      //display quiz
      quizDisplay(questionCount);
      count = 11;
      clearInterval(countdown);
      timerDisplay();
    }
  })
);

//Timer
const timerDisplay = () => {
  countdown = setInterval(() => {
    count--;
    timeLeft.innerHTML = `${count}s`;
    if (count == 0) {
      clearInterval(countdown);
      displayNext();
    }
  }, 5000);
};

//Display quiz
const quizDisplay = (questionCount) => {
  let quizCards = document.querySelectorAll(".container-mid");
  //Hide other cards
  quizCards.forEach((card) => {
    card.classList.add("hide");
  });
  //display current question card
  quizCards[questionCount].classList.remove("hide");
};

//Quiz Creation
function quizCreator() {
  //randomly sort questions
  quizArray.sort(() => Math.random() - 0.5);
  //generate quiz
  for (let i of quizArray) {
    //randomly sort options
    i.options.sort(() => Math.random() - 0.5);
    //quiz card creation
    let div = document.createElement("div");
    div.classList.add("container-mid", "hide");
    //question number
    countOfQuestion.innerHTML = 1 + " of " + quizArray.length + " Question";
    //question
    let question_DIV = document.createElement("p");
    question_DIV.classList.add("question");
    question_DIV.innerHTML = i.question;
    div.appendChild(question_DIV);
    //options
    div.innerHTML += `
    <button class="option-div" onclick="checker(this)">${i.options[0]}</button>
     <button class="option-div" onclick="checker(this)">${i.options[1]}</button>
      <button class="option-div" onclick="checker(this)">${i.options[2]}</button>
       <button class="option-div" onclick="checker(this)">${i.options[3]}</button>
       
    `;
    quizContainer.appendChild(div);
  }
}

//Checker Function to check if option is correct or not
function checker(userOption) {
  let userSolution = userOption.innerText;
  let question =
    document.getElementsByClassName("container-mid")[questionCount];
  let options = question.querySelectorAll(".option-div");

  //if user clicked answer == correct option stored in object
  if (userSolution === quizArray[questionCount].correct) {
    userOption.classList.add("correct");
    scoreCount++;
  } else {
    userOption.classList.add("incorrect");
    //For marking the correct option
    options.forEach((element) => {
      if (element.innerText == quizArray[questionCount].correct) {
        element.classList.add("correct");
      }
    });
  }

  //clear interval(stop timer)
  clearInterval(countdown);
  //disable all options
  options.forEach((element) => {
    element.disabled = true;
  });
}

//initial setup
function initial() {
  quizContainer.innerHTML = "";
  questionCount = 0;
  scoreCount = 0;
  count = 11;
  clearInterval(countdown);
  timerDisplay();
  quizCreator();
  quizDisplay(questionCount);
}

//when user click on start button
startButton.addEventListener("click", () => {
  startScreen.classList.add("hide");
  displayContainer.classList.remove("hide");
  initial();
});

//hide quiz and display start screen
window.onload = () => {
  startScreen.classList.remove("hide");
  displayContainer.classList.add("hide");
};

</script>

