<?php
namespace iutnc\deefy\audio\liste;
class Album extends AudioList {
		String $artiste,$datesortie;

		public function __construct(String $n, $t = [],String $a, String $ds){
			parent::__construct($n,$t);
			$this->artiste = $a;
			$this->datesortie = $ds;
		}

		public function __set(String $atr, $value){
			if(!property_exists($this, $atr)){
				throw new Exception("Invalid Property : $atr");
			}
			$this->$atr = $value;
		}
	}
?>