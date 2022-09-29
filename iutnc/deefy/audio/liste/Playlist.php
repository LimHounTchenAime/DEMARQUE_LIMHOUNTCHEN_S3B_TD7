<?php
namespace src\audio\liste;
class Playlist extends AudioList {

		public function __construct(String $n, $t = []){
			parent::__construct($n,$t);
		}

		public function addtrack(AudioTrack $a){
			array_push($this->tab, $a);
			$this->nbpiste++;
			$this->dureetot+=$a->duree;
		}

		public function suptrack(int $index){
			$a = $this->tab[$index];
			unset($this->tab[$index]);
			$this->nbpiste--;
			$this->dureetot-=$a->duree;
		}

		public function mergetrack($tab){
			array_unique(array_merge($this->tab, $tab),SORT_REGULAR);
			$this->nbpiste = array_count($this->tab);
			$this->dureetot = 0;
			foreach ($this->tab as $key => $value) {
				$this->dureetot += $value;
			}
		}
	}
?>