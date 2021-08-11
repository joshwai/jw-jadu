<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jadu Code Test</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>
</head>
<body>

  <h1><a href="/">Josh Wainwright Code Test</a></h1>

  <hr>

  <section class="card-container">

    <section class="card" id="isPalindrome">
      <h2>isPalindrome</h2>
      <form action="assets/php/is-palindrome.php" method="post">
        <input type="text" name="palindromeValue" id="palindromeValue">
        <button type="submit">Go!</button>
      </form>
      <section id="plaindromeResult" class="result">
      </section>
    </section>

    <section class="card" id="isAnagram">
      <h2>isAnagram</h2>
      <form action="assets/php/is-anagram.php" method="post">
        Is:
        <input type="text" name="anagramValue" id="anagramValue">
        an anagram of:
        <input type="text" name="anagramComparisonValue" id="anagramComparisonValue">
        <button type="submit" name="submit">Go!</button>
      </form>
      <section id="anagramResult" class="result">
      </section>
    </section>

    <section class="card" id="isPangram">
      <h2>isPangram</h2>
      <form action="assets/php/is-pangram.php" method="post">
        <input type="textarea" name="pangramValue" id="pangramValue">
        <button type="submit" name="submit">Go!</button>
      </form>
      <section id="pangramResult" class="result">

      </section>
    </section>

  </section>

  <hr>

  <section class="content">
    <h3>Stuff to copy and paste</h3>
    <ul>
      <li>anna</li>
      <li>Bark</li>
      <li>coalface</li>
      <li>cacao elf</li>
      <li>dark elf</li>
      <li>The quick brown fox jumps over the lazy dog</li>
      <li>The British Broadcasting Corporation ( BBC ) is a British public
service broadcaster.</li>
    </ul>
  </section>


</body>
</html>
