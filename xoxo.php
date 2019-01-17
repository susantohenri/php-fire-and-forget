<?php

function xoxo () {
	$myfile = fopen("logs.txt", "a") or die("Unable to open file!");
	$date = new DateTime();
	$txt = $date->format('Y-m-d H:i:s');
	fwrite($myfile, "\n". $txt);
	fclose($myfile);
}

for ($i = 0; $i < 7000; $i++) {
	xoxo();
	sleep(2);
}