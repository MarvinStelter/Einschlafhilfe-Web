<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Einschlafhilfe">
  <meta name="author" content="Marvin Stelter">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Einschlafhilfe">
  <!apple web app meta tags>
	<link rel="apple-touch-icon" href="images/touch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="167x167" href="images/touch-icon-ipad-retina.png">
	<link rel="apple-touch-startup-image" href="images/touch-icon-ipad-retina.png">
  <title>Einschlafhilfe</title>


</head>
<body bgcolor="#000000">
<font color=red> <h1 href="#" align="left">Start</h1></font>
<p> <a href="https://marvin-stelter.de/ddf/log.html"><font  align="left" color=red>Log</font></a>
<p> <a href="http://play.google.com/store/apps/details?id=de.msdevs.einschlafhilfe"><font  align="left" color=red>Android App</font></a>
<p> <a href="https://github.com/MarvinStelter/Einschlafhilfe-Web"><font align="left" color=red>Quellcode</font></a>
<p> <a href=""><font  align="left" color=red>Impressum</font></a>
<p> <a href=""><font  align="left" color=red>Datenschutzerklärung</font></a>


<?php
$folgen_liste = array("Die drei ???: und der Karpatenhund:3",
"Die drei ???: und die schwarze Katze:4",
"Die drei ???: und der Fluch des Rubins:5",
"Die drei ???: und der sprechende Totenkopf:6",
"Die drei ???: und der unheimliche Drache:7",
"Die drei ???: und der grüne Geist:8",
"Die drei ???: und die rätselhaften Bilder:9",
"Die drei ???: und die flüsternde Mumie:10",
"Die drei ???: und das Gespensterschloss:11",
"Die drei ???: und der seltsame Wecker:12",
"Die drei ???: und der lachende Schatten:13",
"Die drei ???: und das Bergmonster:14",
"Die drei ???: und der rasende Löwe:15",
"Die drei ???: und der Zauberspiegel:16",
"Die drei ???: und die gefährliche Erbschaft:17",
"Die drei ???: und die Geisterinsel:18",
"Die drei ???: und der Teufelsberg:19",
"Die drei ???: und die flammende Spur:20",
"Die drei ???: und der tanzende Teufel:21",
"Die drei ???: und der verschwundene Schatz:22",
"Die drei ???: und das Aztekenschwert:23",
"Die drei ???: und die silberne:24",
"Die drei ???: und die singende Schlange:25",
"Die drei ???: und die Silbermine:26",
"Die drei ???: und der magische Kreis:27",
"Die drei ???: und der Doppelgänger:28",
"Die drei ???: - Die Originalmusik:29",
"Die drei ???: und das Riff der Haie:30",
"Die drei ???: und das Narbengesicht:31",
"Die drei ???: und der Ameisenmensch:32",
"Die drei ???: und die bedrohte Ranch:33",
"Die drei ???: und der rote Pirat:34",
"Die drei ???: und der Höhlenmensch:35",
"Die drei ???: und der Super-Wal:36",
"Die drei ???: und der heimliche Hehler:37",
"Die drei ???: und der unsichtbare Gegner:38",
"Die drei ???: und die Perlenvögel:39",
"Die drei ???: und der Automarder:40",
"Die drei ???: und das Volk der Winde:41",
"Die drei ???: und der weinende Sarg:42",
"Die drei ???: und der höllische Werwolf:43",
"Die drei ???: und der gestohlene Preis:44",
"Die drei ???: und das Gold der Wikinger:45",
"Die drei ???: und der schrullige Millionär:46",
"Die drei ???: und der giftige Gockel:47",
"Die drei ???: und die gefährlichen Fässer:48",
"Die drei ???: und die Comic-Diebe:49",
"Die drei ???: und der verschwundene Filmstar:50",
"Die drei ??? -: Hexen-Handy:101",
"Die drei ??? -: Doppelte Täuschung:102",
"Die drei ??? -: Das Erbe des Meisterdiebs:103",
"Die drei ??? - Gift per E-Mail:104",
"Die drei ???: und der Nebelberg:105",
"Die drei ??? -: Der Mann ohne Kopf:106",
"Die drei ??? -: Der Schatz der Mönche:107",
"Die drei ??? -: Die sieben Tore:108",
"Die drei ??? -: Gefährliches Quiz:109",
"Die drei ??? -: Panik im Park:110",
"Die drei ??? -: Die Höhle des Grauens:111",
"Die drei ??? -: Schlucht der Dämonen:112",
"Die drei ??? -: Das Auge des Drachen:113",
"Die drei ??? -: Die Villa der Toten:114",
"Die drei ??? -: Auf tödlichem Kurs:115",
"Die drei ??? -: Codename Cobra:116",
"Die drei ??? -: Der finstere Rivale:117",
"Die drei ??? -: Das düstere Vermächtnis:118",
"Die drei ??? -: Der geheime Schlüssel:119",
"Die drei ??? -: Der schwarze Skorpion:120",
"Die drei ??? -: Spur ins Nichts:121",
"Die drei ???: und der Geisterzug:122",
"Die drei ??? -: Fußballfieber:123",
"Die drei ??? -: Geister-Canyon:124",
"Die drei ??? -: Feuermond:125",
"Die drei ??? -: Schrecken aus dem Moor:126",
"Die drei ??? -: Schwarze Madonna:127",
"Die drei ??? -: Schatten über Hollywood:128",
"Die drei ??? -: SMS aus dem Grab:129",
"Die drei ??? -: Der Fluch des Drachen:130",
"Die drei ??? -: Haus des Schreckens:131",
"Die drei ??? -: Spuk im Netz:132",
"Die drei ??? -: Fels der Dämonen:133",
"Die drei ??? -: Der tote Mönch:134",
"Die drei ??? -: Fluch des Piraten:135",
"Die drei ???: und das versunkene Dorf:136",
"Die drei ??? -: Pfad der Angst:137",
"Die drei ??? -: Die geheime Treppe:138",
"Die drei ??? -: Das Geheimnis der Diva:139",
"Die drei ??? -: Stadt der Vampire:140",
"Die drei ???: und die Fußball-Falle:141",
"Die drei ??? -: Tödliches Eis:142",
"Die drei ???: und die Poker-Hölle:143",
"Die drei ??? -: Zwillinge der Finsternis:144",
"Die drei ???: und die Rache der Samurai:145",
"Die drei ??? -: Der Biss der Bestie:146",
"Die drei ??? -: Grusel auf Campbell Castle:147",
"Die drei ???: und die feurige Flut:148",
"Die drei ??? -: Der namenlose Gegner:149",
"Die drei ??? -: Geisterbucht:150",
"Die drei ??? -: Schwarze Sonne:151",
"Die drei ??? -: Skateboardfieber:152",
"Die drei ???: und das Fußballphantom:153",
"Die drei ??? -: Botschaft aus der Unterwelt:154",
"Die drei ???: und der Meister des Todes:155",
"Die drei ??? -: Im Netz des Drachen:156",
"Die drei ??? -: Im Zeichen der Schlangen:157",
"Die drei ???: und der Feuergeist:158",
"Die drei ??? -: Nacht der Tiger:159",
"Die drei ??? -: Geheimnisvolle Botschaften:160",
"Die drei ??? -: Die blutenden Bilder:161",
"Die drei ???: und der schreiende Nebel:162",
"Die drei ???: und der verschollene Pilot:163",
"Die drei ??? -: Fußball-Teufel:164",
"Die drei ??? -: Im Schatten des Giganten:165",
"Die drei ???:  und die brennende Stadt:166",
"Die drei ???: und das blaue Biest:167",
"Die drei ??? -: GPS Gangster:168",
"Die drei ???: und die Spur des Spielers:169",
"Die drei ??? -: Straße des Grauens:170",
"Die drei ???: und das Phantom aus dem Meer:171",
"Die drei ???: und der Eisenmann:172",
"Die drei ??? -: Dämon der Rache:173",
"Die drei ??? und das Tuch der Toten:174",
"Die drei ??? -: Schattenwelt:175",
"Die drei ???: und der gestohlene Sieg:176",
"Die drei ??? -: Der Geist des Goldgräbers:177",
"Die drei ??? -: Der gefiederte Schrecken:178",
"Die drei ??? -: Die Rache des Untoten:179",
"Die drei ??? -: Die flüsternden Puppen:180",
"Die drei ??? -: Das Kabinett des Zauberers:181",
"Die drei ??? -: Im Haus des Henkers:182",
"Die drei ???: und der letzte Song:183",
"Die drei ???: und der Hexengarten:184",
"Die drei ???: und der Mann ohne Augen:185",
"Die drei ??? -: Insel des Vergessens:186",
"Die drei ???: und das silberne Amulett:187",
"Die drei ??? -: Signale aus dem Jenseits:188",
"Die drei ???: und der unsichtbare Passagier:189",
"Die drei ???: und die Kammer der Rätsel:190",
"Die drei ??? -: Verbrechen im Nichts:191",
"Die drei ??? -: Im Bann des Drachens:192",
"Die drei ??? -: Schrecken aus der Tiefe:193",
"Die drei ???: und die Zeitreisende:194",
"Die drei ??? -: Im Reich der Ungeheuer:195",
"Die drei ??? -: Geheimnis des Bauchredners:196",
"Die drei ???: und der Superpapagei:1",
"Die drei ???: und der verschwundene Filmstar:50",
"Die drei ??? -: Der riskante Ritt:51",
"Die drei ??? -: Die Musikpiraten:52",
"Die drei ??? -: Die Automafia:53",
"Die drei ??? -: Gefahr im Verzug:54",
"Die drei ??? -: Gekaufte Spieler:55",
"Die drei ??? -: Angriff der Computer-Viren:56",
"ie drei ??? -: Tatort Zirkus:57",
"Die drei ???: und der verrückte Maler:58",
"Die drei ??? -: Giftiges Wasser:59",
"Die drei ??? -: Dopingmixer:60",
"Die drei ???: und die Rache des Tigers:61",
"Die drei ??? -: Spuk im Hotel:62",
"Die drei ??? -: Fußball-Ganster:63",
"Die drei ??? -: Geisterstadt:64",
"Die drei ??? -: Diamantenschmuggel:65",
"Die drei ???: und die Schattenmänner:66",
"Die drei ???: und das Geheimnis der Särge:67",
"Die drei ???: und der Schatz im Bergsee:68",
"Die drei ??? -: Späte Rache:69",
"Die drei ??? -: Schüsse aus dem Dunkel:70",
"Die drei ??? -: Dreckiger Deal:72",
"Die drei ??? -: Die verschwundene Seglerin:71",
"Die drei ??? -: Poltergeist:73",
"Die drei ???: und das brennende Schwert:74",
"Die drei ??? -: Die Spur des Raben:75",
"Die drei ??? -: Stimmen aus dem Nichts:76",
"Die drei ??? -: Pistenteufel:77",
"Die drei ??? -: Das leere Grab:78",
"Die drei ??? -: Im Bann des Voodoo:79",
"Die drei ??? -: Verdeckte Fouls:80",
"Die drei ??? -: Geheimakte Ufo:81",
"Die drei ??? -: Die Karten des Bösen:82",
"Die drei ??? -: Meuterei auf hoher See:83",
"Die drei ??? -: Musik des Teufels:84",
"Die drei ??? -: Feuerturm:85",
"Die drei ??? -: Nacht in Angst:86",
"Die drei ??? -: Wolfsgesicht:87",
"Die drei ??? -: Vampir im Internet:88",
"Die drei ??? -: Tödliche Spur:89",
"Die drei ??? -: Der Feuerteufel:90",
"Die drei ??? -: Labyrinth der Götter:91",
"Die drei ??? -: Todesflug:92",
"Die drei ??? -: Das Geisterschiff:93",
"Die drei ??? -: Das schwarze Monster:94",
"Die drei ??? -: Botschaft von Geisterhand:95",
"Die drei ???: und der rote Rächer:96",
"Die drei ??? -: Insektenstachel:97",
"Die drei ??? -: Tal des Schreckens:98",
"Die drei ??? -: Rufmord:99",
"Die drei ??? -:Toteninsel:100");

$random_folge = array_rand($folgen_liste, 2);
$folge_geschnitten = explode(":", $folgen_liste[$random_folge[0]]);
$folge = $folge_geschnitten[0] .$folge_geschnitten[1];
//Folge anzeigen lassen.
echo "<div style=\"text-align: center\">";

echo '<span style="color:#FF0000;text-align:center;">' .$folge .'</span>';
echo "</div>";


 
?>

</body>