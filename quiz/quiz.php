<?php

  $doc = new DOMDocument;

  $answer1 = $_POST['q1'];
  $question1 = $doc->getElementById('question1');
  $correct1 = $doc->getElementById('correct1');
  $answer2 = $_POST['q2'];
  $question2 = $doc->getElementById('question2');
  $correct2 = $doc->getElementById('correct2');
  $answer3 = $_POST['q3'];
  $question3 = $doc->getElementById('question3');
  $correct3 = $doc->getElementById('correct3');
  $answer4 = $_POST['q4'];
  $question4 = $doc->getElementById('question4');
  $correct4 = $doc->getElementById('correct4');
  $answer5 = $_POST['q5'];
  $question5 = $doc->getElementById('question5');
  $correct5 = $doc->getElementById('correct5');
  $total = 0;
  $score = ($total / 5) * 100;


  echo "<p> $question1 </p>";
  echo "<p>You answered: $answer1</p><br>";
  echo "<p>Correct answer: $correct1 </p><br>";

  echo "<p> $question2 </p>";
  echo "<p>You answered: $answer2</p><br>";
  echo "<p>Correct answer: $correct2 </p><br>";

  echo "<p> $question3 </p>";
  echo "<p>You answered: $answer3</p><br>";
  echo "<p>Correct answer: $correct3 </p><br>";

  echo "<p> $question4 </p>";
  echo "<p>You answered: $answer4</p><br>";
  echo "<p>Correct answer: $correct4 </p><br>";

  echo "<p> $question5 </p>";
  echo "<p>You answered: $answer5</p><br>";
  echo "<p>Correct answer: $correct5 </p><br>";

  echo "<p>You got $total out of 5 correct!</p><br>";
  echo "<p>Score: $score </p>";
?>

