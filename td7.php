<?php

	require_once 'vendor/autoload.php';
	use src\audio\track\AlbumTrack as AlbumTrack;
	use src\audio\liste\Playlist as Playlist;
	use src\render\AudioListRenderer as AudioListRenderer;
	use src\exception\NonEditablePropertyException as NonEditablePropertyException;
	use src\exception\InvalidPropertyNameException as InvalidPropertyNameException;
	use src\exception\InvalidPropertyValueException as InvalidPropertyValueException;
	
	$track1 = new AlbumTrack('Take Control','take_control.mp4');
	$track2 = new AlbumTrack('Trough the fire and flames', 'through_the_fire_and_flames.mp4');

	try{
		$track2->ttre = "Stygia";
	} catch (InvalidPropertyNameException $ipne) {
		echo "<br>".$ipne->getMessage()." in ".$ipne->getFile()." line : ".$ipne->getLine()."<br>";
	} 

	try {
		$track1->titre = "Stygia";
	} catch (NonEditablePropertyException $nepe) {
		echo "<br>".$nepe->getMessage()." in ".$nepe->getFile()." line : ".$nepe->getLine()."<br>";
	} 

	try {
		$track1->duree = "Stygia";
	} catch (InvalidPropertyValueException $ipve){
		echo "<br>".$ipve->getMessage()." in ".$ipve->getFile()." line : ".$ipve->getLine()."<br>";
	}

	$audio = new Playlist("playlist1", [$track1,$track2]);
	$r = new AudioListRenderer($audio);
	$r->render();
	
	
?>