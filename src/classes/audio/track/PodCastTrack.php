<?php
namespace iutnc\deefy\audio\track;
	use iutnc\deefy\audio\track\AudioTrack as AudioTrack;
	
	
	class PodcastTrack extends AudioTrack {

		private string $auteur = "1234";

		function __construct($t, $f){
			parent::__construct($t,$f);
		}

	}

?>