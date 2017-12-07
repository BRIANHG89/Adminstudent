
  var points, 
      pointsPerQuestion,
      currentQuestion,
      questionTimer,
      timeForQuestion=10,
      timeLeftForQuestion,
      questions=5;//

      $(function(){

      	$('button.start').click(start);
      	$('.play_again button').click(restart);

      	function restart(){
      		points=0;
      		pointsPerQuestion=10;
      		currentQuestion=0;
      		timeForQuestion=timeForQuestion;

      		//
      		$('.finish.card').hide();
      		$('div.start').show();
      		$('times_up').hide();
      		$('.questions').html('');

      		updateTime();
      		updatePoints();

      	}
      	//
      	function start(){
      		$('div.start').fadeOut(200, function(){
      			moveToNextQuestion();
      		});
      	}
      	
      }) 