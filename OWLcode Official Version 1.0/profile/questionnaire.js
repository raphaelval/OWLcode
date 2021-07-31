
function Quiz(questions) {
    this.pythonScore = 0;
    this.javaScore = 0;
    this.htmlScore = 0;
    this.javascriptScore = 0;
    this.cScore = 0;
    this.cplusScore = 0;

    this.questions = questions;
    this.questionIndex = 0;
}
 
Quiz.prototype.getQuestionIndex = function() {
    return this.questions[this.questionIndex];
}
 
Quiz.prototype.guess = function(answer) {
    if(this.questionIndex==0) {
        if(answer == "Web Design"){
		this.htmlScore++;
		this.javascriptScore++;
	}
        if(answer == "Object Oriented Programming"){
		this.cScore++;
		this.javasScore++;
		this.cplusScore++;
		this.pythonScore++;
	}
        if(answer == "Application Design"){
		this.pythonScore++;
		this.javaScore++;
	}
        if(answer == "No Preference"){

	}
    }

    if(this.questionIndex==1) {
        if(answer === "HTML/CSS/Javascript"){
		this.htmlScore += 2;
		this.javascriptScore += 2;
	}
        if(answer == "Python"){
		this.pythonScore += 2;
	}
        if(answer == "C/C++"){
		this.cScore += 2;
		this.cplusScore += 2;
	}
        if(answer == "Java"){
		this.javaScore += 2;
	}
    }

    if(this.questionIndex==2) {
        if(answer == "I want to make web pages interactive"){
		this.javascriptScore++;
	}
        if(answer == "I want to design the basis of a website"){
		this.htmlScore++;
	}
        if(answer == "I prefer more user friendly OOP languages"){
		this.pythonScore++;
		this.cplusScore++;
	}
        if(answer == "I prefer stricter OOP languages that require attention to detail"){
		this.javaScore++;
		this.cScore++;
	}
    }
 
    this.questionIndex++;
}
 
Quiz.prototype.isEnded = function() {
    return this.questionIndex === this.questions.length;
}
 
 
function Question(text, choices) {
    this.text = text;
    this.choices = choices;
}

  
function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;
 
        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }
 
        showProgress();
    }
};
 
function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};
 
 
function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};
 
function showScores() {
    var gameOverHTML = "<h2>Here Is What We Suggest:</h2><hr style='margin-bottom: 20px'>";
    var maxScore = Math.max(quiz.pythonScore,quiz.javaScore,quiz.htmlScore,quiz.cScore,quiz.cplusScore,quiz.javascriptScore);
    if(quiz.pythonScore == maxScore || quiz.pythonScore == maxScore -1){
	var str = "<button style='margin:5px;' class='btn btn-success' >Click here to learn more about <span style='font-weight: bold;'>Python</span>!</button>";
	var result = str.link("../topics/python.php");
        gameOverHTML += result;
	gameOverHTML += "<br>";
    }

    if(quiz.htmlScore == maxScore  || quiz.htmlScore == maxScore -1){
	var str = "<button style='margin:5px;' class='btn btn-success' >Click here to learn more about making webpages with <span style='font-weight: bold;'>HTML & CSS</span>!</button>";
	var result = str.link("../topics/html-css.php");
        gameOverHTML += result;
	gameOverHTML += "<br>";
    }

    /*if(quiz.javaScore == maxScore  || quiz.javaScore == maxScore -1){
	var str = "Click here to learn more about java!";
	var result = str.link("topics/java.html");
        gameOverHTML += result;
	gameOverHTML += "<br>";
    }

    if(quiz.cScore == maxScore  || quiz.cScore == maxScore -1){
	var str = "Click here to learn more about the C programming Language!";
	var result = str.link("topics/c.html");
        gameOverHTML += result;
	gameOverHTML += "<br>";
    }*/

    if(quiz.javascriptScore == maxScore  || quiz.javascriptScore == maxScore -1){
	var str = "<button style='margin:5px;' class='btn btn-success' >Click here to learn more about <span style='font-weight: bold;'>JavaScript</span> and making web pages interactive!</button>";
	var result = str.link("../topics/javascript.php");
        gameOverHTML += result;
	gameOverHTML += "<br>";
    }

    if(quiz.cplusScore == maxScore  || quiz.cplusScore == maxScore -1){
	var str = "<button style='margin:5px;' class='btn btn-success' >Click here to learn more about the <span style='font-weight: bold;'>C++</span> programming language!</button>";
	var result = str.link("../topics/cplusplus.php");
        gameOverHTML += result;
	gameOverHTML += "<br>";
    }
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML += "<hr style='margin-top: 50px'>";

};
 
// create questions here
var questions = [
    new Question("What are you interested in?", ["Web Design", "Object Oriented Programming","Application Design", "No Preference"]),
    new Question("Is there a specific language you would like to learn about?", ["Python", "HTML/CSS/Javascript","C/C++", "Java"]),
    new Question("Based off question 1:", ["I want to make web pages interactive", "I want to design the basis of a website", "I prefer more user friendly OOP languages", "I prefer stricter OOP languages that require attention to detail"])];
 
// create quiz
var quiz = new Quiz(questions);
 
// display quiz
populate();