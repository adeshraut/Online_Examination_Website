

// Quiz Object: holds questions, choices and answers.
var quiz = [{
	question: "Question 1: Serval, caracal, lynx, and oncilla. These are all types of what?",
	choices: ["Cats", "Body Parts", "Bacteria", "Insects"], 
	correct: 0
}, {
	question: "Question 2: These numbers follow a pattern. 2, 7, 13, 20, 28. What comes next?",
	choices: ["30", "42", "36", "37"],
	correct: 3
}, {
	question: "Question 3: 7G, 10J, 13M, 16P, 19S. Which letter comes next in this sequence?",
	choices: ["T", "V", "U", "W"],
	correct: 1
}, {
	question:"Question 4: Which word fits in the blank in this sequence: mouse, squirrel, ____, hippo, blue whale",
	choices: ["Frog", "Deer", "Butterfly", "Lion"],
	correct: 1
}, {
	question: "Question 5: From the list of letters below, which one CAN NOT be turned upside down, reflected in a mirror and still look correct?",
	choices: ["B", "D", "U", "O"],
	correct: 2
}];


$(document).ready(function() {
	var numQuestions = quiz.length;
	var numCorrect = 0;
	var counter = 0;

	// display question function
	function nextQuest(){
		$('#questions').text(quiz[counter].question);
		$('#answer0').text(quiz[counter].choices[0]);
		$('#answer1').text(quiz[counter].choices[1]);
		$('#answer2').text(quiz[counter].choices[2]);
		$('#answer3').text(quiz[counter].choices[3]);
	}

	
	// client-sided validation
	function validate() {
		if ($('input').is(':checked')) {
	
			nextQuest(); // display next question
		}
		else {
			alert("Please make a selection.");
			counter--;
		}
	}

	// display first question
	nextQuest();


	// next button function
	$('#nextBtn').on('click', function() {
		var answer = ($('input[name="choice"]:checked').val());

		// increment score if answer is correct
		if (answer == quiz[counter].correct) {
			numCorrect++;
		}

		counter++;


		// display score screen
		if (counter >= numQuestions) {
			$('#main').hide().fadeIn("slow");
			document.getElementById('main').innerHTML="Quiz Complete! You scored " + numCorrect + " out of " + numQuestions;
			return; // returns false *(there has to be a better way! figure it out.)*
		}

		validate();

		// fade in new question
		$('.card').hide().fadeIn("slow");
		
		// clear previous selection
		$('input[name="choice"]').prop('checked', false);
	});


	// back button function
	$('#backBtn').on('click', function() {

		// fade out current question and fade in previous question
		$('.card').hide().fadeIn("slow");
		numCorrect--;
		counter--;
		
		// display previous question
		nextQuest();	
	});

});







