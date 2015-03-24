<?php

function removePunctuationMarks($input) {
	return preg_replace("/[^a-zA-Z 0-9]+/", " ", $input);
}

?> 