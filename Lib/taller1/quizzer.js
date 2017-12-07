
var points,
	pointsPerQuestion,
	currentQuestion,
	questionTimer,
	timeForQuestion = 8, // seconds
	timeLeftForQuestion,
	questions = 5;  // 1

$(function() {

	$('button.start').click(start);
	$('.play_again button').click(restart);

	function restart() {
		points = 0;
		pointsPerQuestion = 10;
		currentQuestion = 0;
		timeLeftForQuestion = timeForQuestion;

		$('.finish.card').hide();
		$('div.start').show();
		$('.times_up').hide();
		$('.questions').html('');

		updateTime();
		updatePoints();
	}

	function start() {
		$('div.start').fadeOut(200, function() {
			moveToNextQuestion();
		});
	}

	// 2
	function moveToNextQuestion() {
		currentQuestion += 1;
		getQuestion();
	}

	// 3
	function getQuestion() {
		$.ajax({
			url 	: 'backend.php',
			data	: {					// 4
				action 	: 'get_question',
				number 	: currentQuestion
			},
			success	: function(data) {  // 5
				showQuestionCard(data);
				setupQuestionTimer();
			},
			error	: function(jqXHR, textStatus, errorThrown) {
				alert(textStatus);
			}
		})
	}

	// 6
	function showQuestionCard(html) {
		$('.questions').html(html);
		$('.question.card input').change(optionSelected);
	}

	function setupQuestionTimer() {
		if (currentQuestion > 1) {
			clearTimeout(questionTimer);
		}
		timeLeftForQuestion = timeForQuestion;
		questionTimer = setTimeout(countdownTick, 1000);
	}

	function countdownTick() {
		timeLeftForQuestion -= 1;
		updateTime();
		if (timeLeftForQuestion == 0) { 
			return finish();
		}
		questionTimer = setTimeout(countdownTick, 1000);
	}

	function updateTime() {
		$('.countdown .time_left').html(timeLeftForQuestion + 's');
	}

	function updatePoints() {
		$('.points span.points').html(points + ' puntos');
	}

	// 7
	function optionSelected() {
		var selected = parseInt(this.value);
		checkAnswer(selected);
	}

	// 8
	function checkAnswer(selected) {
		$.ajax({
			url 	: 'backend.php',
			data	: {
				action 	: 'check_answer',
				number 	: currentQuestion,
				answer 	: selected
			},
			success	: function(data) {
				// 9
				if (data) {
					points += pointsPerQuestion;
					updatePoints();
					correctAnimation();
				} else {
					wrongAnimation();
				}
				if (currentQuestion == questions) {
					clearTimeout(questionTimer);
					return finish();
				}
				moveToNextQuestion();
			},
			error	: function(jqXHR, textStatus, errorThrown) {
				alert(textStatus);
			}
		})
	}

	function correctAnimation() {
		animatePoints('right');
	}

	function wrongAnimation() {
		animatePoints('wrong');
	}

	function animatePoints(cls) {
		$('header .points').addClass('animate ' + cls);
		setTimeout(function() {
			$('header .points').removeClass('animate ' + cls);
		}, 500);
	}

	function finish() {
		if (timeLeftForQuestion == 0) {
			$('.times_up').show();
		}
		$('p.final_points').html(points + ' puntos');
		$('.question.card:visible').hide();
		$('.finish.card').show();
	}

	restart();

});