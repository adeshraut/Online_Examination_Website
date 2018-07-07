

// Quiz Object: holds questions, choices and answers.
var quiz = [{
	question: "1. _________ allows us to control electronic components",
	choices: ["RETful API", "RESTful API", "HTTP", "MQTT"], 
	correct: 0
}, {
	question: "2.MQTT stands for _____________",
	choices: ["MQ Telemetry Things", "MQ Transport Telemetry", "MQ Transport Things", "MQ Telemetry Transport"],
	correct: 3
}, {
	question: "3.MQTT is _________ protocol. ",
	choices: ["Machine to Machine", "Internet of Things", " Machine to Machine and Internet of Things", "Machine Thing"],
	correct: 2
}, {
	question:"4.Which protocol is lightweight? ",
	choices: ["MQTT", "HTTP", "CoAP", "SPI"],
	correct: 1
}, {
	question: "5. From the list of letters below, which one CAN NOT be turned upside down, reflected in a mirror and still look correct?",
	choices: ["B", "D", "U", "O"],
	correct: 2

}
];


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







