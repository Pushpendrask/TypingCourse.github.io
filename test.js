// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//dissable f12 button and Right Click
window.oncontextmenu = function () {
				return false;
			}
			$(document).keydown(function (event) {
				if (event.keyCode == 123) {
					return false;
				}
				else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
					return false;
				}
			});
			

var timer = document.getElementById("timer");
var timeRemaining = 60;
var testPara = document.getElementById("testPara");
var textArea = document.getElementById("textArea");
var startWindow = document.getElementById("startWindow");
var startButton = document.getElementById("startButton");
var newTestWindow = document.getElementById("newTestWindow");
var newTestButton = document.getElementById("newTestButton");
var score = 0;


var calculateScore = function() {
	var paraSubmitted = textArea.value;
	var submittedWords = paraSubmitted.split(" ");
	var wordCount = submittedWords.length; 

	var testWords = testPara.innerHTML.split(" ");
	console.log(testWords);

	return wordCount;
};


var generatePassage = function(){
	
	paraContainer.style.display = "inline-block";
	textArea.style.display = "inline-block";
	var passages = [passage1, passage2, passage3, passage4, passage5];
	testPara.innerHTML = passages[Math.floor(Math.random()*10/2)];

};

var displayTime = function () {

	var getTime = setInterval(function() {
		timeRemaining--;
		timer.innerHTML = "Time Remaining: " + timeRemaining + "s"; 

		console.log(timeRemaining);

		if(timeRemaining == 0){

			clearInterval(getTime);
			
			var wrapper = document.getElementById("wrapper");
			wrapper.remove();

			timer.remove();

			document.body.appendChild(newTestWindow);
			document.getElementById("finalScore").innerHTML = "Your speed: " + calculateScore() + " words per minute.";
			newTestWindow.style.display = "block";
		} 
	}, 1000);

	textArea.removeEventListener("keydown", displayTime);
};

var test = function() {
	
	startWindow.style.display = "none";

	timer.innerHTML = "Time Remaining: 60s";
	timer.style.display = "block";

	textArea.addEventListener("keydown", displayTime);

	generatePassage();

};

startButton.addEventListener("click", test);


newTestButton.addEventListener("click", function(){
	window.location.reload();
});

var passage1 = "Four score and seven years ago our fathers brought forthon this continent a new nation, conceived in liberty, and dedicated to the proposition that all men are created equal.<br><br>Now we are engagedin a great civil war, testing whether that nation, or any nation so conceived and so dedicated, can long endure. We are met on a greatbattlefield of that war. We have come to dedicate a portion of that field,as a final resting place for those who here gave their lives that thatnation might live. It is altogether fitting and proper that we should dothis.";
var passage2 = "To have spent six years with that wonderful little fellow, Miller Huggins? Then to have spent the next nine years with that outstanding leader, that smart student of psychology, the best manager in baseball today, Joe McCarthy? Sure, I'm lucky.<br><br>When the New York Giants, a team you would give your right arm to beat, and vice versa, sends you a gift - that's something. When everybody down to the groundskeepers and those boys in white coats remember you with trophies — that's something. When you have a wonderful mother-in-law who takes sides with you.";

var passage3 = "But somewhere along the line, you changed. You stopped being you. You let people stick a finger in your face and tell you you’re no good. And when things got hard, you started lookin’ for something to blame, like a big shadow.<br><br>Let me tell you something you already know.The world ain’t all sunshine and rainbows. It’s a very mean and nasty place, and I don’t care how tough you are, it will beat you to your knees and keep you there permanently if you let it. You, me, or nobody is gonna hit as hard as life. But it ain’t about how hard you hit, language illing to take the hits.";
passage4 = "Their spirit is dead, if they ever had one. It's gone. You're building a rat ship here. A vessel for seagoing snitches, and if you think you're preparing these minnows for manhood, you better think again, because I say you are killing the very spirit this institution proclaims it instills. What a sham. What kind of a show you guys are putting on here today? I mean, the only class in this act is sitting next to me, and I'm here to tell ya this boy's soul is intact. It's non-negotiable. You know how I know? Someone here, and I'm not gonna say who, offered to buy it.";

passage5 = "Weinburg? I have a greater responsibility than you could possibly fathom. You weep for Santiago, and you curse the Marines. You have that luxury. You have the luxury of not knowing what I know. That Santiago's death, while tragic, probably saved lives. And my existence, while grotesque and incomprehensible to you, saves lives. You don't want the truth because deep down in places you don't talk about at parties, you want me on that wall, you need me on that wall. We use words like honor, code, loyalty. We use these words as the backbone of a life spent defending something.";
