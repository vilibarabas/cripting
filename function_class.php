<?php

class SelectClass
{
	protected $script_name;
	protected $text;
	protected $param;
	protected $cript_type;
	public function __construct($script_name, $text, $param, $script_type)
	{
		$this->script_name = $script_name;
		$this->text = $text;
		$this->cript_type = $script_type;
		$this->param = $param;
	}
	
	public function callFunction()
	{
		if(strpos($this->script_name, 'Cezar') !== FALSE)
		{
			$textRez = criptareCezar($this->text, $this->param, $this->cript_type);
			
			return $textRez;
		}
		if(strpos($this->script_name, 'Permutare') !== FALSE)
		{
			$textRez = criptarePermutare($this->text, $this->param, $this->cript_type);
			
			return $textRez;
		}
		if(strpos($this->script_name, 'Transpozitie') !== FALSE)
		{
			$textRez = cifrulTranspozitiei($this->text, $this->cript_type);
			
			return $textRez;
		}
		if(strpos($this->script_name, 'ECB') !== FALSE)
		{
			$textRez = criptarePermutare($this->text, $this->cript_type);
			
			return $textRez;
		}
	}
}