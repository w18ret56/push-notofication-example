<?php
$news = Array();
$news[0]["title"] = "Burza nad Warszawą";
$news[0]["content"] = "Wczoraj nad Warszawą rozpętała się straszna nawałnica";
$news[1]["title"] = "Loteria tygodnia";
$news[1]["content"] = "Wygraj 100 000 lub samochód";
$news[2]["title"] = "Miejski budżet";
$news[2]["content"] = "Trwa głosowanie co do miejskiego budżetu";
$news[3]["title"] = "Mały bohater";
$news[3]["content"] = "13-letni Tymek z Krakowa uratował swoich rodziców dzwoniąc pod 112";
$news[4]["title"] = "Problemy ze śmieciami";
$news[4]["content"] = "Co 4 osoba w Polsce pali śmieciami";
print json_encode($news);
?>
