<?php
echo '<strong>CODE EXAMPLE: REFACTORING</strong>.<br /><br />';
 
function wordCount($input) {
  $count = str_word_count($input);
  echo 'The text includes '.$count.' words.<br />';
}
 
function charCount($input) {
  $charcount = strlen($input);
  echo 'The text includes '.$charcount.' characters.<br />';
}
 
function mostCommonWords($input) {
  $words = str_word_count($input, 1); 
  $frequency = array_count_values($words);
  $frequency = array_keys($frequency);
  $mostcommon = $frequency[0];
  echo 'The most common word in the text is '.$mostcommon.'.<br />';
}
 
$done = $_POST['formsubmit'];
$fulltext = $_POST['fulltext'];
 
if ($done) {
  // FORM RESULTS
  wordCount($fulltext);
  charCount($fulltext);
  mostCommonWords($fulltext);
} else {
  // FORM
  echo '<FORM method="post"><TEXTAREA name="fulltext"></TEXTAREA>
    <INPUT type="hidden" name="formsubmit" value="1" />
    <INPUT type="submit" value="Analyze!" /></FORM>';
}
?>