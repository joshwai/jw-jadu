const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

$(document).ready(function () {

  if(urlParams.get('palin') == 1) {
    $('#palindromeValue').val(urlParams.get('pinput'));
    $('#plaindromeResult').text('True');
    $('#plaindromeResult').addClass('true');
    $('#isPalindrome').focus();
  } else {
    $('#palindromeValue').val(urlParams.get('pinput'));
    $('#plaindromeResult').text('False');
    $('#plaindromeResult').addClass('false');
    $('#isPalindrome').focus();
  }

  if(urlParams.get('anagr') == 1) {
    $('#anagramValue').val(urlParams.get('ainput'));
    $('#anagramComparisonValue').val(urlParams.get('ainput1'));
    $('#anagramResult').text('True');
    $('#anagramResult').addClass('true');
    $('#isAnagram').focus();
  } else {
    $('#anagramValue').val(urlParams.get('ainput'));
    $('#anagramComparisonValue').val(urlParams.get('ainput1'));
    $('#anagramResult').text('False');
    $('#anagramResult').addClass('false');
    $('#isAnagram').focus();
  }

  if(urlParams.get('pangr') == 1) {
    $('#pangramValue').val(urlParams.get('ninput'));
    $('#pangramResult').text('True');
    $('#pangramResult').addClass('true');
    $('#isPangram').focus();
  } else {
    $('#pangramValue').val(urlParams.get('ninput'));
    $('#pangramResult').text('False');
    $('#pangramResult').addClass('false');
    $('#isPangram').focus();
  }


});
