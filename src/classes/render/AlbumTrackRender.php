<?php

namespace iutnc\deefy\render;
//require_once 'AudioRender.php';
class AlbumTrackRenderer extends AudioTrackRender
{

	function __construct(AlbumTrack $at)
	{
		parent::__construct($at);	
	}

	public function long() : string {
		return "<div class='track'>".
				"<h1>{$this->track->titre}</h1>".
				"<h2>{$this->track->artiste}</h2>".
				"<h2>album : {$this->track->album}</h2>".
				"<h3>{$this->track->annee}</h3>".
				"<p><audio controls src='{$this->track->fichier}'></p></div>";
	}

	public function render(int $selector) : string {
		switch ($selector) {
			case 1:
				return $this->short();
				break;
			case 2:
				return $this->long();
				break;
			default:
				return "";
				break;
		}
	}
}

?>