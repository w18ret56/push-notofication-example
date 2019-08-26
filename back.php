<?php
$news = file("news.txt");
$randIndex = array_rand($news);
$r = explode(";",$news[$randIndex]);
print "TYTUL => ".$r[0]." TRESC => ".$r[1];
?>
