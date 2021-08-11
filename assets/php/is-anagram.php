<?php

  //Pull in post values from form
  $word = $_POST['anagramValue'];
  $comparison = $_POST['anagramComparisonValue'];
  //Default result to false
  $result = false;

  // If word or comparison is blank return to the homepage without checking anything
  if($word != '' || $comparison != '') {
    // Count_Chars will count how many characters appear in a given stirng if the same amount
    // of characters are in each string then return true
    $result = (count_chars(str_replace(" ","",strtolower($word))) == count_chars(str_replace(" ","",strtolower($comparison)))) ? true : false;
  }

  header('Location: http://localhost/testing/index.php?ainput=' . $_POST['anagramValue'] . '&ainput1=' . $_POST['anagramComparisonValue'] . '&anagr=' . $result);

?>
