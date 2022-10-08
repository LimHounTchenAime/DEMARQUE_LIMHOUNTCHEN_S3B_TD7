<?php

	namespace iutnc\deefy\render;
	use iutnc\deefy\audio\track\AudioTrack as AudioTrack;
	use iutnc\deefy\render\Renderer as Renderer;
abstract class AudioRender implements Renderer
{
	public AudioTrack $track;

	function __construct(AudioTrack $at)
	{
		$this->track = $at;	
	}

	public function short() : string {
		return "<p>{$this->track->titre} <br><audio controls src='{$this->track->fichier}'></p>";
	}

	public abstract function long() : string;
	public abstract function render(int $selector) : string;
}

?>