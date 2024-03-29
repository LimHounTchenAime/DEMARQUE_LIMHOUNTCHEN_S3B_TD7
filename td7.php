<?php

	require_once 'vendor/autoload.php';
	use iutnc\deefy\audio\track\AlbumTrack as AlbumTrack;
	use iutnc\deefy\audio\liste\Playlist as Playlist;
	use iutnc\deefy\render\AudioListRenderer as AudioListRenderer;
	use iutnc\deefy\render\AlbumTrackRender as AlbumTrackRender;
	use iutnc\deefy\exception\NonEditablePropertyException as NonEditablePropertyException;
	use iutnc\deefy\exception\InvalidPropertyNameException as InvalidPropertyNameException;
	use iutnc\deefy\exception\InvalidPropertyValueException as InvalidPropertyValueException;
	
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

	$re = new AlbumTrackRender($track1);
	echo $re->render();
	
	
?>