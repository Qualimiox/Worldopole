<header id="single-header">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>
				<?= $locales->NESTS_TITLE ?>
			</h1>
			<br>
			<h4><p><?= $locales->NESTS_MIGRATIONTEXT ?></p><p id="migration"></p></h4>
		</div>
	</div>
</header>

<div class="row">
	<div class="col-md-12 text-center">
		<div id="map">

		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 text-center">
<h2> Warum werden hier manche Nest-Spawnpunkte nicht angezeigt?</h2>
<p> Diese Karte zeigt alle Spawnpunkte, bei denen in den letzten 24 Stunden mindestens 6 Mal das gleiche Pokemon gespawnt ist. </br>
	Da jeder Nest-Spawnpunkt eine 25% Chance auf das Nest-Pokemon hat, gibt es immer einige Spawnpunkte, bei denen in den letzten 24 Stunden nur 1-5 Nest-Pokemon gespawnt sind. </p>
<p>	
	Als <strong> Faustregel</strong> könnt ihr pro Stunde aber mit halb so vielen Spawns in dem Nest rechnen, wie hier auf der Karte angezeigt werden. </br> 
	Also wenn hier ein Nest mit 10 Rihorn zu sehen ist, sollten in dem Nest <strong> im Durchschnitt </strong> 5 Rihorn pro Stunde spawnen.
</p>
<h2> Wann verändern sich die Nester und ab wann erscheinen die hier auf der Karte?</h2>
<p> 
	Die Nester ändern sich normalerweise alle 14 Tage immer Donnerstags um 2 Uhr. Hier eine Liste mit den vorraussichtlichen Daten der nächsten 5 Nestmigrationen: </br>
 <?php 
$date = new DateTime('first thu of April 2017 02:00');
for ($i=0; $i<5; $i++) {
	$date->modify('+2 week');
   echo $date->format('d.m.Y H'). ' Uhr'.'<br/>'.PHP_EOL;

}
 ?> </br>
	Nach jeder Nestmigration dauert es ca. 24 Stunden, bis die neuen Nester hier auf der Karte zuverlässig erscheinen. 
</p>
</div>
