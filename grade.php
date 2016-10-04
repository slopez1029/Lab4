<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>The Impossible Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>The Impossible Quiz</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "No, but a tin can") { $totalCorrect++; }
            if ($answer2 == "An elephant") { $totalCorrect++; }
            if ($answer3 == "n") { $totalCorrect++; }
            if ($answer4 == "F'TAANG") { $totalCorrect++; }
            if ($answer5 == "Up his sleevies") { $totalCorrect++; }
            			
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
			echo "<br>";
			echo "<br>";
			echo "<br>";
            echo"                     
                    <h2>Can a match box?</h2>
                    <h3>Entered Answer: $answer1<h3>   					
					<h3>Correct Answer: No, but a tin can<h3>
					<br>
					<br>
					<br>
                    <h2>The answer is really big</h2>
					<h3>Entered Answer: $answer2<h3>   					
					<h3>Correct Answer: An elephant<h3>
					<br>
					<br>
					<br>
                    <h2>What follows December 2nd?</h2>
					<h3>Entered Answer: $answer3<h3>   					
					<h3>Correct Answer: n<h3>
					<br>
					<br>
					<br>
                    <h2>What sound does a bell make?</h2>
					<h3>Entered Answer: $answer4<h3>   					
					<h3>Correct Answer: F'TAANG <h3>
					<br>
					<br>
					<br>
                    <h2>Where does a general keep his armies?</h2>
					<h3>Entered Answer: $answer5<h3>   					
					<h3>Correct Answer: Up his sleevies<h3>
										
					";
        ?>	
	</div>
	


</body>

</html>