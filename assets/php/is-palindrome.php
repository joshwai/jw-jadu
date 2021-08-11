<?php

  //Pull in post value from form
  $word = $_POST['palindromeValue'];
  //Default result to false
  $result = false;

  // Set string to all the same case beforing checking it's a palindrome
  // This stops 'Anna' returning false and 'anna' returning true
  // If word is blank return to the homepage without checking anything
  if ($word != '') {
    $wordLower = strtolower($word);
    $result = ($wordLower == strrev($wordLower)) ? true : false;
  }

  header('Location: http://localhost/testing/index.php?pinput=' . $_POST['palindromeValue'] . '&palin=' . $result);

?>
