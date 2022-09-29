<?php
	namespace src\render;
	use src\audio\liste\AudioList as AudioList;
	class AudioListRenderer implements Renderer {
		private AudioList $al;

		public function __construct($a){
			$this->al = $a;
		}

		public function short(): string{
			return "";
		}

		public function __get(String $atr){
			if(property_exists($this, $atr)){
				return $this->$atr;
			} else {
				throw new Exception("Invalid property : $atr");
			}
		}

		public function render(){
			echo "<div><p>".$this->al->nom."</p>\n<ul>";
			foreach ($this->al->tab as $key => $value) {
				echo "\n<li>".$key." - ".$value->titre." par ".$value->artiste."</li>";
			}
			echo "\n</ul>\n<p>".$this->al->nbpiste." pistes : ".$this->al->dureetot." s";
		}
	}

?>