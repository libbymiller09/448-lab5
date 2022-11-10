<?php
  $answer1 = isset($_POST['q1']);
  // $correct1 =
  $answer2 = isset($_POST['q2']);
  // $correct2 =
  $answer3 = isset($_POST['q3']);
  // $correct3 =
  $answer4 = isset($_POST['q4']);
  // $correct4 =
  $answer5 = isset($_POST['q5']);
  // $correct5 =
  $total = 0;
  $score = ($total / 5) * 100;


  echo "Question 1: "
  echo "You answered: " .$answer1. "<br>";
  // echo "Correct answer: " .$correct1. "<br>";

  echo "Question 2: "
  echo "You answered: " .$answer2. "<br>";
  // echo "Correct answer: " .$correct2. "<br>";

  echo "Question 3: "
  echo "You answered: " .$answer3. "<br>";
  // echo "Correct answer: " .$correct3. "<br>";

  echo "Question 4: "
  echo "You answered: " .$answer4. "<br>";
  // echo "Correct answer: " .$correct4. "<br>";

  echo "Question 5: "
  echo "You answered: " .$answer5. "<br>";
  // echo "Correct answer: " .$correct5. "<br>";

  echo "You got " .$total. " out of 5";
  echo "Score: %" .$score. ;
?>
