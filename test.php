<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:signin.php');
}
?>

<!doctype html>
<html>
	<head>
		<title>Test</title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<?php include 'header.php';?>

<div class="container">
	<a href="logout.php" class="float-right btn btn-primary">Logout</a>
	<h1> Welcome <?php echo $_SESSION['username']; ?></h1>
</div>

<div class="container w-100 m-auto">
<h2>Rules for Typing Test : </h2>
<p>Formula for Calculating Typing Speed

For calculating Typing Speed there are two formulas are used. One formula is based upon characters counting and the second one is directly applied on words count. Let explore the two typing test speed calculation formulas in detail. 
1. Character based Formula : 

A . Gross WPM
hindi typing gross word per minute formula

Here WPM = Word Per Minute

All typed entries = Total Key Strokes (or key depression)

 

Gross WPM is really the typing speed that you typed in one minute its getting by total key Stroke (Key depression) divided by 5 (One word = 5 character) and then divided by total minute to get word per minute speed.

If you type 200 character in 1 minute then your typing speed will be = 200 / 5 = 40 WPM

But GWPM is not your actual speed, actual speed is calculating by correct word you typed known as 'Net WPM'.</p>
	<a href="speedtest.php" class="m-5 btn btn-success w-25 m-auto">Speed Test</a>
</div>
<hr height="2px solid black"/>
<div class="container w-100 m-auto">
<h2>Rules for Typing Test : </h2>
<p>Rule #1: Test comprehension and critical thinking, not just recall

Multiple choice questions are criticized for testing the superficial recall of knowledge. You can go beyond this by asking learners to interpret facts, evaluate situations, explain cause and effect, make inferences, and predict results.
Rule #2: Use simple sentence structure and precise wording

Write test questions in a simple structure that is easy to understand. And try to be as accurate as possible in your word choices. Words can have many meanings depending on colloquial usage and context.
Rule #3: Place most of the words in the question stem

If you’re using a question stem, rather than an entire question, ensure that most of the words are in the stem. This way, the answer options can be short, making them less confusing and more legible.
Rule #4: Make all distractors plausible

All of the wrong answer choices should be completely reasonable. This can be very hard to accomplish, but avoid throwing in those give-away distractors as it detracts from the test’s validity. If you’re really stuck, get help from your friendly SME. (BTW, this word can also be spelled as “distracter.”)
Rule #5: Keep all answer choices the same length

This can be difficult to achieve, but expert test-takers can use answer length as a hint to the correct answer. Often the longest answer is the correct one. When I can’t get all four answers to the same length, I use two short and two long.
Rule #6: Avoid double negatives

No big news here, right? Don’t use combinations of these words in the same question: not, no, nor, the -un prefix, etc. For example, this type of question could confuse test-takers: ‘Which of the following comments would NOT be unwelcome in a work situation?’ Flip it around and write it in the positive form: ‘Which of the following comments are acceptable in a work situation?’
Rule #7: Mix up the order of the correct answers

Make sure that most of your correct answers aren’t in the “b” and “c” positions, which can often happen. Keep correct answers in random positions and don’t let them fall into a pattern that can be detected. When your test is written, go through and reorder where the correct answers are placed, if necessary.
Rule #8: Keep the number of options consistent

Did you ever have to convince a SME that he or she can’t have answer choices that go to ‘h’ in one question and ‘c’ in the next? It’s something of a user interface issue. Making the number of options consistent from question to question helps learners know what to expect. Research doesn’t seem to agree on whether 3 or 4 or 5 options is best. Personally, I like to use 4 options. It feels fair.
Rule #9: Avoid tricking test-takers

As faulty as they are, tests exist to measure knowledge. Never use questions or answer options that could trick a learner. If a question or its options can be interpreted in two ways or if the difference between options is too subtle, then find a way to rewrite it.
Rule #10: Use ‘All of the Above’ and ‘None of the Above’ with caution

I hate this rule because when you run out of distractors, All of the Above and None of the Above can come in handy. But they may not promote good instruction. Here’s why. All of the Above can be an obvious give-away answer when it’s not used consistently. Also, the All of the Above option can encourage guessing if the learner thinks one or two answers are correct. In addition, the downside to None of the Above is that you can’t tell if the learner really knew the correct answer.</p>
	<a href="quiz.php" class="m-5 mb-5 my-5 btn btn-success w-25 m-auto">MCQ Test</a>
</div>	

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
 <script src="javascript.js"></script> 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php include 'footer.php';?>
</body>
</html>