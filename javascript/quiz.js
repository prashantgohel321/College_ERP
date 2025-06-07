const questions = [
    {
        
        question: "The full form of CSS is:?",
        optionA: "CSS is a style sheet language",
        optionB: "CSS is styel sheet language",
        optionC: "CSS is Cascading Style Sheets",
        optionD: "All of the mentioned",
        correctOption: "option"
    },

    {
        question: "Which of the following tag is used to embed css in html page? ?",
        optionA: "css",
        optionB: "!DOCTYPE html",
        optionC: "script",
        optionD: "style",
        correctOption: "optionD"
    },

    {
        question: "Which of the following CSS selectors are used to specify a group of elements??",
        optionA: "tag",
        optionB: "id",
        optionC: "class",
        optionD: "both class and tag",
        correctOption: "optionC"
    },

    {
        question: "Which of the following has introduced text, list, box, margin, border, color, and background properties?",
        optionA: "HTML",
        optionB: "PHP",
        optionC: "CSS",
        optionD: "Ajax",
        correctOption: "optionC"
    },

    {
        question: "Which of the following CSS framework is used to create a responsive design?",
        optionA: "django",
        optionB: "rails",
        optionC: "larawell",
        optionD: "bootstrap",
        correctOption: "optionD"
    },

    {
        question: "Which of the following CSS style property is used to specify an italic text?",
        optionA: "style",
        optionB: " font",
        optionC: "font-style",
        optionD: " @font-face",
        correctOption: "optionC"
    },

    {
        question: " Which of the following are the CSS Extension Prefixes for Webkit?",
        optionA: "-chrome",
        optionB: "-web",
        optionC: "-o-",
        optionD: "-webkit",
        correctOption: "optionD"
    },

    {
        question: "Which of the following function defines a linear gradient as a CSS image?",
        optionA: "gradient()",
        optionB: "linear-gradient()",
        optionC: "grayscale()",
        optionD: "image()",
        correctOption: "optionB"
    },

    {
        question: "Which of the following CSS property is used to set the color of the text?",
        optionA: "text-decoration",
        optionB: "pallet",
        optionC: "colour",
        optionD: "color",
        correctOption: "optionD"
    },

    {
        question:"Which of the following property is used to align the text in a table?",
        optionA: "text-align",
        optionB: " align",
        optionC: "text",
        optionD: "non of the mentioned",
        correctOption: "optionA"
    },

    {
        question: "Which of the following CSS property defines the space between cells in a table?",
        optionA: " border-spacing",
        optionB: "border-style",
        optionC: "border",
        optionD: "none of the mentioned",
        correctOption: "optionA"
    },

    {
        question: "Which of the following CSS property is used to specify table borders in CSS?",
        optionA: "table:border",
        optionB: "table",
        optionC: "border",
        optionD: "none of the mentioned",
        correctOption: "optionC"
    },


    {
        question: "The CSS property used to make the text bold is -",
        optionA: "weight: bold",
        optionB: "font-weight : bold",
        optionC: "font: bold",
        optionD: "style: bold",
        correctOption: "optionB"
    },

    {
        question: "Are the negative values allowed in padding property?",
        optionA: "Yes",
        optionB: "No",
        optionC: "Can't say",
        optionD: "May be",
        correctOption: "optionB"
    },

    {
        question: "The CSS property used to specify the transparency of an element is -",
        optionA: "opacity",
        optionB: "filter",
        optionC: "visibility",
        optionD: "overlay",
        correctOption: "optionA"
    },

    {
        question: "How to select the elements with the class name example?",
        optionA: "example",
        optionB: "#example",
        optionC: ".example",
        optionD: "Class example",
        correctOption: "optionC"
    },

    {
        question: "Which of the following CSS property is used to add shadows to the text??",
        optionA: "text-shadow",
        optionB: "text-stroke",
        optionC: "text-overflow",
        optionD: "text-decoration",
        correctOption: "optionA"
    },

    {
        question: "Which of the following is not a value of the font-variant property in CSS?",
        optionA: "normal",
        optionB: "small-caps",
        optionC: "large-caps",
        optionD: "inherit",
        correctOption: "optionC"
    },

    {
        question: "Which of the following is not a type of combinator?",
        optionA: ">",
        optionB: "~",
        optionC: "+",
        optionD: "*",
        correctOption: "optionD"
    },

    {
        question: " Which property is used to define the background color??",
        optionA: "bgcolor",
        optionB: "bg-color ",
        optionC: "background",
        optionD: "background-color",
        correctOption: "optionD"
    },

    {
        question: "To make a text italic, which CSS property is used??",
        optionA: "font",
        optionB: "font-family",
        optionC: "font-style",
        optionD: "All of the above",
        correctOption: "optionC"
    },

    {
        question: "Which CSS property and value is used to center an element??",
        optionA: "text-align:center",
        optionB: "align:center",
        optionC: "text-align:middle",
        optionD: "align:middle",
        correctOption: "optionA"
    },

    {
        question: " HTML elements are positioned ___ by default.?",
        optionA: "static",
        optionB: "fixed",
        optionC: "relative",
        optionD: "none",
        correctOption: "optionA"
    },

    {
        question: "Which CSS property specifies the opacity/transparency of an element? ?",
        optionA: "transparency",
        optionB: "opacity",
        optionC: "transform-opacity",
        optionD: "opacity-all",
        correctOption: "optionB"
    },

    {
        question: "Which CSS function uses the largest value??",
        optionA: "large()",
        optionB: "maximum()",
        optionC: "max_value()",
        optionD: "max()",
        correctOption: "optionD"
    }

]


let shuffledQuestions = [] //empty array to hold shuffled selected questions out of all available questions

function handleQuestions() { 
    //function to shuffle and push 10 questions to shuffledQuestions array
    //app would be dealing with 10questions per session
    while (shuffledQuestions.length <= 9) {
        const random = questions[Math.floor(Math.random() * questions.length)]
        if (!shuffledQuestions.includes(random)) {
            shuffledQuestions.push(random)
        }
    }
}


let questionNumber = 1 //holds the current question number
let playerScore = 0  //holds the player score
let wrongAttempt = 0 //amount of wrong answers picked by player
let indexNumber = 0 //will be used in displaying next question

//function for displaying next question in the array to dom
//also handles displaying players and quiz information to dom
function NextQuestion(index) {
    handleQuestions()
    const currentQuestion = shuffledQuestions[index]
    document.getElementById("question-number").innerHTML = questionNumber
       document.getElementById("display-question").innerHTML = currentQuestion.question;
    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
    const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
    const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
    let correctOption = null

    options.forEach((option) => {
        if (option.value === currentQuestionAnswer) {
            //get's correct's radio input with correct answer
            correctOption = option.labels[0].id
        }
    })

    //checking to make sure a radio input has been checked or an option being chosen
    if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
        document.getElementById('option-modal').style.display = "flex"
    }

    //checking if checked radio button is same as answer
    options.forEach((option) => {
        if (option.checked === true && option.value === currentQuestionAnswer) {
            playerScore++ //adding to player's score
            indexNumber++ //adding 1 to index so has to display next question..
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }

        else if (option.checked && option.value !== currentQuestionAnswer) {
            const wrongLabelId = option.labels[0].id
            wrongAttempt++ //adds 1 to wrong attempts 
            indexNumber++
            //set to delay question number till when next question loads
            setTimeout(() => {
                questionNumber++
            }, 1000)
        }
    })
}

//called when the next button is called
function handleNextQuestion() {
    checkForAnswer() //check if player picked right or wrong option
    unCheckRadioButtons()
    //delays next question displaying for a second just for some effects so questions don't rush in on player
    setTimeout(() => {
        if (indexNumber <= 9) {
//displays next question as long as index number isn't greater than 9, remember index number starts from 0, so index 9 is question 10
            NextQuestion(indexNumber)
        }
        else {
            handleEndGame()//ends game if index number greater than 9 meaning we're already at the 10th question
        }
        resetOptionBackground()
    }, 1000);
}



// unchecking all radio buttons for next question(can be done with map or foreach loop also)
function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}

// function for when all questions being answered
function handleEndGame() {
    let remark = null
    let remarkColor = null

    // condition check for player remark and remark color
    if (playerScore <= 3) {
        remark = "Bad Grades, Keep Practicing."
        //remarkColor = "red"
    }
    else if (playerScore >= 4 && playerScore < 7) {
        remark = "Average Grades, You can do better."
        //remarkColor = "orange"
    }
    else if (playerScore >= 7) {
        remark = "Excellent, Keep the good work going."
        //remarkColor = "green"
    }
    const playerGrade = (playerScore / 10) * 100

    //data to display to score board
    document.getElementById('remarks').innerHTML = remark
    document.getElementById('remarks').style.color = remarkColor
    document.getElementById('grade-percentage').innerHTML = playerGrade
    document.getElementById('wrong-answers').innerHTML = wrongAttempt
    document.getElementById('right-answers').innerHTML = playerScore
    document.getElementById('score-modal').style.display = "flex"

}

//closes score modal, resets game and reshuffles questions
function closeScoreModal() {
    questionNumber = 1
    playerScore = 0
    wrongAttempt = 0
    indexNumber = 0
    shuffledQuestions = []
    NextQuestion(indexNumber)
    document.getElementById('score-modal').style.display = "none"
}

//function to close warning modal
function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none"
}