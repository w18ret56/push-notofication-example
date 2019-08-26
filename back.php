<?php
$news = file("news.txt");
$randIndex = array_rand($news);
print "<br />===<br />";
print $news[$randIndex];
print "<br />===<br/>"

?>
