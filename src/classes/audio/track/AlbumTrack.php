<?php
	namespace iutnc\deefy\audio\track;
	require_once 'AudioTrack.php';
	
	class AlbumTrack extends AudioTrack{
		
		private string $artiste = "1234";
		private int $numero = 0;
		private string $album = "1234";

		public function __construct($t,$f){
			parent::__construct($t,$f);
			$artiste = "123";
			$numero = 0;
			$album = "abc";
		}

		public function __get(String $atr){
			if(property_exists($this, $atr)){
				return $this->$atr;
			}
		}
	}

?>