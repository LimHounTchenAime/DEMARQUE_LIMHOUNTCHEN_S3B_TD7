<?php
namespace src\audio\track;
	require_once 'AudioTrack.php';
	
	
	class PodcastTrack extends AudioTrack {

		private string $auteur = "1234";

		function __construct($t, $f){
			parent::__construct($t,$f);
		}

	}

?>