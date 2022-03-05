// checkAnwer
function checkAnswer(answer){
if( answer == questions[runningQuestion].correct){
// answer is correct
score++;
// change progress color to green
answerIsCorrect();
}else{
// answer is wrong
// change progress color to red
answerIsWrong();
}
count = 0;
if(runningQuestion < lastQuestion){
runningQuestion++;
renderQuestion();
}else{
// end the quiz and show the score
clearInterval(TIMER);
scoreRender();
}
}
// answer is correct
function answerIsCorrect(){
document.getElementById(runningQuestion).style.backgroundColor =
"#0f0";
}
// answer is Wrong
function answerIsWrong(){
document.getElementById(runningQuestion).style.backgroundColor =
"#f00";
}
// score render
function scoreRender(){
scoreDiv.style.display = "block";
// calculate the amount of question percent answered by the user
constscorePerCent = Math.round(100 * score/questions.length);
// choose the image based on the scorePerCent
let img = (scorePerCent >= 80) ? "img/5.png" :
(scorePerCent >= 60) ? "img/4.png" :
(scorePerCent >= 40) ? "img/3.png" :
(scorePerCent >= 20) ? "img/2.png" :
"img/1.png";
scoreDiv.innerHTML = "<img src="+ img +">";
scoreDiv.innerHTML += "<p>"+ scorePerCent +"%</p>";
}