<?php

$text = 'areneaamnaearr ee ma er';
$crpt = 0;
if(!empty($text))
	{
		//$literemari = verificaLitera($text);
		//$text = str_replace(' ', '', strtolower($text));
		$textCriptat = '';
		$matrixCript = array();
		$col = 0;
		$nr = 0;
		for($i = 0; $i < strlen($text); $i++)
		{
			$nr++;
			$conditie = $crpt ? $nr > 8 : $nr > 4;
			if($conditie)
			{
				$col++;
				$nr = 1;
			}
			$matrixCript[$col][] = $text[$i];			
		}
		print_r($matrixCript);
		
		for($i = 0; $i < count($matrixCript[0]); $i++, $key++)
		{
			foreach($matrixCript as $key => $matr)
			{
				
				if(array_key_exists($i, $matrixCript[$key]))
					$textCriptat .= $matrixCript[$key][$i];
				else
					$textCriptat .= ' ';
			}
		}
		print_r($textCriptat);
	}