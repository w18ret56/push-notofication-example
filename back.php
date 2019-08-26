<?php
$news = file("news.txt");
$randIndex = array_rand($news);
$r = explode(";",$news[$randIndex]);
print json_encode($r);
?>
