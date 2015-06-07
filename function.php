<?php

function criptareCezar($text, $deplasare, $cript)
{
	$letter = range('a', 'z');
	
	if(!empty($text))
	{
		$literemari = verificaLitera($text);
		$text = strtolower($text);
		$textCriptat = '';
		for($i = 0; $i < strlen($text); $i++)
		{
			if($text[$i] != ' ')
			{
				foreach($letter as $key => $lt)
				{
					if($lt === $text[$i])
					{
						$condition = $cript ? $key >= (count($letter) - $deplasare) : $key < $deplasare;
						
						if($condition)
						{
							$dpl = $key + ($cript ?  $deplasare : -$deplasare)  + ($cript ?   -count($letter) : count($letter));
						}
						else
						{
							$dpl = $key + ($cript ?  $deplasare : -$deplasare);
						}
						$textCriptat .= $letter[$dpl];
					}
				}
			}
			else
			{
				$textCriptat .= ' ';
			}
		}
	}
	
	return restabLitereMari($textCriptat, $literemari);
}

function criptarePermutare($text, $permut, $cript = 1)
{
	$alfabet = array_flip(range('a', 'z'));

	$alfabet_2 = range('a', 'z');

	if(!empty($text))
	{
		$literemari = verificaLitera($text);
		$text = strtolower($text);
		$textCriptat = '';
		
		for($i = 0; $i < strlen($text); $i++)
		{
			if($text[$i] != ' ')
			{
				
				 $textCriptat .= $alfabet_2[($alfabet[$text[$i]]*$permut)%count($alfabet_2)] ;
			}
			else
			{
				$textCriptat .= ' ';
			}
		}
		return restabLitereMari($textCriptat, $literemari);
	}	
}


function verificaLitera($text)
{
	$letter = range('A', 'Z');
	$key = array();
	for($i = 0; $i < strlen($text); $i++)
	{
		foreach($letter as $lt)
		{
			if(strpos($text[$i], $lt) !==FALSE)
			{
				$key[] = $i;
			}
		}
	}
	
	return $key;
}

function restabLitereMari($text, $key)
{
	foreach($key as $k)
	{
		$text[$k] = strtoupper($text[$k]);
	}
	
	return $text;
}

function encrypt($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}

function decrypt($encrypted_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}


function cifrulTranspozitiei($text, $crpt)
{
	$alfabet = array_flip(range('a', 'z'));

	$alfabet_2 = range('a', 'z');

	if(!empty($text))
	{
		$literemari = verificaLitera($text);
		if($crpt)
			$text = str_replace(' ', '', strtolower($text));
		$textCriptat = '';
		$matrixCript = array();
		$col = 0;
		$nr = 0;
		for($i = 0; $i < strlen($text); $i++)
		{
			$nr++;
			$conditie = $crpt ? $nr > 8 : $nr > ((strlen($text)-(strlen($text)%8))/8);
			if($conditie)
			{
				$col++;
				$nr = 1;
			}
			$matrixCript[$col][] = $text[$i];			
		}
		for($i = 0; $i < count($matrixCript[0]); $i++, $key++)
		{
			foreach($matrixCript as $key => $matr)
			{
				if(isset($matrixCript[$key][$i]))
					$textCriptat .= $matrixCript[$key][$i];
				else
					$textCriptat .= ' ';
			}
		}
		return $textCriptat;
	}
}