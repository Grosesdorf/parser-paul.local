<?php
include_once('lib/sql.php');
include_once('lib/curl_query.php');
include_once('lib/simple_html_dom.php');

$html = curl_get("http://ntschool.ru/courses");
$dom = str_get_html("$html");
$courses = $dom->find(".one_title");

foreach ($courses as $course) {
	$a = $course->find("a", 0);
	echo $a->href . "<br />";
}

unset($html);

