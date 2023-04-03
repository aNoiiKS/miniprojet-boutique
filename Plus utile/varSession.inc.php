<?php

/* $categories = [
	'manga' => [["Mangas"],['m01','Attaque des Titans Tome 1','6,95€ ','50',"<img src='/img/mangas/snk1head.jpg' alt='' />"],['m02','Bleach Tome 1','2,99€','50',"<img src='/img/mangas/bleach1head.jpg' alt='' />"],['m03','Dragon Ball Tome 1','6,90€','50',"<img src='/img/mangas/db1head.jpeg' alt='' />"],
	['m04','Naruto Tome 1','2,99€','50',"<img src='/img/mangas/naruto1head.jpg' alt='' />"],['m05','One piece Tome 1','3,99€','50',"<img src='/img/mangas/op1head.jpg' alt='' />"]],
	'figurines' => [["Figurines"],['f01','Attaque des Titans Figurine LivaiVsTitanBestial','599,99€','0',"<img src='/img/figurines/snk1figurine.png' alt='' />"],['f02','Bleach Figurine Ulquiorra ','249,99€','3',"<img src='/img/figurines/bleach1figurine.png' alt='' />"],['f03','Dragon Ball Figurine Goku','39,99€','50',"<img src='/img/figurines/db1figurine.jpeg' alt='' />"],
	['f04','Naruto Figurine Naruto ','39,99€','26',"<img src='/img/figurines/naruto1fig.jpg' alt='' />"],['f05','One piece Figurine Zoro','399,99€','2',"<img src='/img/figurines/op1figurine.jpg' alt='' />"]],
	'goodies' => [["Goodies"],['g01',"Attaque des Titans Cape Bataillon d'Exploration",'19.90€','50',"<img src='/img/goodies/goodiesnk.png' alt='' />"],['g02','Bleach Tableau Incarnation Getsuga ','29.90€','30',"<img src='/img/goodies/goodiesbleach.png' alt='' />"],['g03',' Dragon Ball Tasse Arc Black Goku','9,90€','100',"<img src='/img/goodies/goodiesdb.png' alt='' />"],
	['g04','Naruto Bandeau Konoha','9.90€','80',"<img src='/img/goodies/goodiesnaruto.png' alt='' />"],['g05','One piece Katana "Enma" ',' 39,90€','20',"<img src='/img/goodies/goodiesop.PNG' alt='' />"]]];  */
$xml = simplexml_load_file('info.xml');
$json = json_encode($xml);

$_SESSION['Menu']=json_decode($json,true);
 ?>


