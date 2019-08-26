<?php
$news = file("news.txt");
$randIndex = array_rand($news);
print $news[$randIndex]
?>
