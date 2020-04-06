<?php

function wordcount($input){

	$count = str_word_count($input);
	echo 'the text includes '.$count. ' words.<br/>';
}

function charCount($input){
	$charcount = strlen($input);

	echo 'the text includes '.$charcount.' characters.<br />';
}
function mostCommonwords($input){

	$words = str_word_count($input,1);
	$frequency =array_count_values($words);
	$frequency = array_keys($frequency);
	$mostcommon = $frequency[0];
	echo 'the most common word in the text is '.$mostcommon.'<br />';
}

$done = $_POST['formsubmit'];
$fulltext = $_POST['fulltext'];
if($done){
	//form results 

	wordcount($fulltext);
	charCount($fulltext);
	mostCommonwords($fulltext);
}

else {

	echo '<FORM method="post"><TEXTAREA name="fulltext"></TEXTAREA>
	<INPUT TYPE="hidden" name="formsubmit" value="1"/>
	<INPUT TYPE="submit" value="Analyze!"/></FORM>';
}
?>