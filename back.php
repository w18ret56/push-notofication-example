<?php
$news = file("news.txt");
$randIndex = array_rand($news);
$r = explode($news[$randIndex],";");
print $r[0]."<br />";
print $r[1];
?>
