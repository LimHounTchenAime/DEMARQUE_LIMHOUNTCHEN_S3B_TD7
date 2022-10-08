<?php

namespace iutnc\deefy\render;

use iutnc\deefy\render\AudioRender as AudioRender;
	class PodcastTrackRender extends AudioRender
	{

	function __construct(PodcastTrack $pt)
	{
		parent::__construct($pt);
	}

	public function long() : string {
		return "<div class='track'>".
				"<h1>{$this->track->titre}</h1>".
				"<h2>{$this->track->auteur}</h2>".
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