<?php

  //Pull in post value from form
  $phrase = $_POST['pangramValue'];
  //Default result to false
  $result = false;

  // If phrase is blank return to the homepage without checking anything
  if ($phrase != '') {
    // Create the alphbet using a php range function
    $alphabet = range('a','z');
    // Split phrase into an array and make sure all characters are lower case to match our range alphabet
    $comparison = str_split( strtolower($phrase) );
    // If the alphabet doesn't appear in the comparison array return false
    $result = (!array_diff($alphabet, $comparison)) ? true : false;
  }

  header('Location: http://localhost/testing/index.php?ninput=' . $_POST['pangramValue'] . '&pangr=' . $result);

?>
