// Global variables
let shuffledQuestions = [] // Will hold the 10 questions from the API
let questionNumber = 1 //holds the current question number
let playerScore = 0  //holds the player score
let wrongAttempt = 0 //amount of wrong answers picked by player
let indexNumber = 0 //will be used in displaying next question

/**
 * Decodes HTML entities from a string.
 * e.g., "Don&#039;t" becomes "Don't"
 * @param {string} text The text to decode.
 * @returns {string} The decoded text.
 */
function decodeHTMLEntities(text) {
    if (typeof text !== 'string') {
        console.warn("decodeHTMLEntities received non-string input:", text);
        return text || ""; // Return empty string for null/undefined
    }
    try {
        var textArea = document.createElement('textarea');
        textArea.innerHTML = text;
        return textArea.value;
    } catch (e) {
        console.error("Error decoding entities:", e);
        return text; // Return original text on error
    }
}

/**
 * Fetches questions from the OpenTDB API, formats them, and stores them in shuffledQuestions.
 * @returns {boolean} Returns true if questions were loaded successfully, false otherwise.
 */
async function fetchQuestions() {
    const API_URL = 'https://opentdb.com/api.php?amount=10&category=9&difficulty=easy&type=multiple';
    let questionsLoaded = false;
    try {
        const response = await fetch(API_URL);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();
        
        if (data.results && data.results.length > 0) {
            shuffledQuestions = data.results.map((apiQuestion) => {
                const incorrectAnswers = apiQuestion.incorrect_answers;
                const correctAnswer = apiQuestion.correct_answer;
                
                // Combine and shuffle answers
                const allAnswers = [...incorrectAnswers, correctAnswer];
                // Simple shuffle
                const shuffledAnswers = allAnswers.sort(() => Math.random() - 0.5);

                // Find which option (A, B, C, D) is the correct one
                const correctOptionIndex = shuffledAnswers.findIndex(answer => answer === correctAnswer);
                // Handle case where findIndex might fail (though it shouldn't)
                const correctOptionKey = ['optionA', 'optionB', 'optionC', 'optionD'][correctOptionIndex] || 'optionA';

                // Return the formatted question object
                return {
                    question: decodeHTMLEntities(apiQuestion.question),
                    optionA: decodeHTMLEntities(shuffledAnswers[0]),
                    optionB: decodeHTMLEntities(shuffledAnswers[1]),
                    optionC: decodeHTMLEntities(shuffledAnswers[2]),
                    optionD: decodeHTMLEntities(shuffledAnswers[3]),
                    correctOption: correctOptionKey
                };
            });
            questionsLoaded = true;
        } else {
            throw new Error("API returned no questions.");
        }
    } catch (error) {
        console.error("Error fetching quiz questions:", error);
        // Display error to the user
        document.getElementById("display-question").innerHTML = "Failed to load questions. Please try refreshing the page.";
    }
    return questionsLoaded;
}

/**
 * Entry point for the quiz. Fetches questions then displays the first one.
 */
async function startQuiz() {
    // Show loading state
    document.getElementById("display-question").innerHTML = "Loading Quiz...";
    document.getElementById("question-number").innerHTML = "1"; // Show 1 even while loading
    // Disable next button while loading
    document.querySelector(".next-button-container button").disabled = true;

    // Fetch and format questions
    const questionsLoaded = await fetchQuestions();

    // Check if questions were loaded
    if (questionsLoaded && shuffledQuestions.length > 0) {
        // Hide loading and display the first question
        NextQuestion(indexNumber);
        // Re-enable next button
        document.querySelector(".next-button-container button").disabled = false;
    } else {
        // Show error if fetching failed
        document.getElementById("display-question").innerHTML = "Error: Could not load quiz. Please check the console and try again.";
        // Keep button disabled
    }
}


/**
 * Displays the next question and options.
 * @param {number} index The index of the question in shuffledQuestions.
 */
function NextQuestion(index) {
    const currentQuestion = shuffledQuestions[index];
    
    if (!currentQuestion) {
        console.error("No question found at index:", index);
        // This might happen if API returns < 10 questions and game logic expects 10
        handleEndGame(); // End game if questions run out
        return;
    }

    document.getElementById("question-number").innerHTML = questionNumber;
    document.getElementById("display-question").innerHTML = currentQuestion.question;
    document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
    document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
    document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
    document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;
}

/**
 * Checks the selected answer against the correct answer.
 * @returns {boolean} Returns true if an option was selected, false otherwise.
 */
function checkForAnswer() {
    const currentQuestion = shuffledQuestions[indexNumber]; 
    if (!currentQuestion) return false; // Guard clause

    const currentQuestionAnswer = currentQuestion.correctOption; 
    const options = document.getElementsByName("option");
    
    let selectedOption = null;
    for (const option of options) {
        if (option.checked) {
            selectedOption = option;
            break;
        }
    }

    // 1. Check if an option was selected
    if (!selectedOption) {
        document.getElementById('option-modal').style.display = "flex";
        return false; // Stop execution, don't proceed to next question
    }

    // 2. An option was selected, so check if it's correct
    if (selectedOption.value === currentQuestionAnswer) {
        playerScore++;
    } else {
        wrongAttempt++;
    }

    // 3. Increment index
    indexNumber++;
    
    // 4. Set timeout to increment visual question number (as in original)
    setTimeout(() => {
        // Only update if not past the last question
        if (indexNumber < 10) {
            questionNumber++;
        }
    }, 1000); 

    return true; // Proceed to next question
}


/**
 * Called when the 'Next' button is clicked.
 */
function handleNextQuestion() {
    const proceed = checkForAnswer(); //check if player picked right or wrong option
    
    if (proceed) { // Only proceed if an answer was selected
        unCheckRadioButtons();
        //delays next question displaying for a second
        setTimeout(() => {
            if (indexNumber < 10) { // Use < 10 because indexNumber is 0-based
                NextQuestion(indexNumber);
            }
            else {
                handleEndGame(); //ends game if index number is 10
            }
        }, 1000);
    }
}


// unchecking all radio buttons for next question
function unCheckRadioButtons() {
    const options = document.getElementsByName("option");
    for (let i = 0; i < options.length; i++) {
        options[i].checked = false;
    }
}

// function for when all questions being answered
function handleEndGame() {
    let remark = null;
    let remarkColor = null;

    // condition check for player remark and remark color
    if (playerScore <= 3) {
        remark = "Bad Grades, Keep Practicing.";
        remarkColor = "red";
    }
    else if (playerScore >= 4 && playerScore < 7) {
        remark = "Average Grades, You can do better.";
        remarkColor = "orange";
    }
    else if (playerScore >= 7) {
        remark = "Excellent, Keep the good work going.";
        remarkColor = "green";
    }
    const playerGrade = (playerScore / 10) * 100;

    //data to display to score board
    document.getElementById('remarks').innerHTML = remark;
    document.getElementById('remarks').style.color = remarkColor;
    document.getElementById('grade-percentage').innerHTML = playerGrade;
    document.getElementById('wrong-answers').innerHTML = wrongAttempt;
    document.getElementById('right-answers').innerHTML = playerScore;
    document.getElementById('score-modal').style.display = "flex";

}

//closes score modal, resets game and reshuffles questions
function closeScoreModal() {
    // Reset all game state variables
    questionNumber = 1;
    playerScore = 0;
    wrongAttempt = 0;
    indexNumber = 0;
    shuffledQuestions = []; // Clear old questions
    
    // Hide the modal
    document.getElementById('score-modal').style.display = "none";
    
    // Uncheck any lingering radio buttons
    unCheckRadioButtons(); 

    // Fetch new questions and restart the quiz
    startQuiz(); 
}

//function to close warning modal
function closeOptionModal() {
    document.getElementById('option-modal').style.display = "none";
}