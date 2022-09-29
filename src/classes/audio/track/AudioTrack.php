<?php
	namespace iutnc\deefy\audio\track;
	use iutnc\deefy\exception\InvalidPropertyNameException as InvalidPropertyNameException;
	use iutnc\deefy\exception\NonEditablePropertyException as NonEditablePropertyException;
	use iutnc\deefy\exception\InvalidPropertyValueException as InvalidPropertyValueException;

	class AudioTrack {
		protected string $titre;
		protected int $annee = 0;
		protected string $genre = "";
		protected int $duree = 180;
		protected string $fichier;

		public function __construct($t, $f){
			$this->titre = $t;
			$this->fichier = $f;
		}

		public function __get(string $atr){
			if(property_exists($this, $atr)){
				return $this->$atr;
			}
			throw new InvalidPropertyNameException("Invalid Property : $atr");
		}

		public function __set(string $atr, $value){
			if(!property_exists($this, $atr)){
				throw new InvalidPropertyNameException("Invalid Property : $atr");
			}
			if($atr === "titre" || $atr === "fichier"){
			throw new NonEditablePropertyException("Non Editable Property : $atr");
			}
			if(gettype($this->atr)!=gettype($value)){
				throw new InvalidPropertyValueException("Invalid Property Value : $value");
			}	
			$this->$atr = $value;
		}


		public function __toString(){
			return json_encode($this);
		}
	}
	
?>