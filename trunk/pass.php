<?php


echo randompass(mt_rand(8,12));

function randomin($alphabet,$length)
{
	$sample_length = strlen($alphabet);
	$result = "";
	for ($i=0; $i<$length; $i++)
	{
		$result.= substr($alphabet,mt_rand(1,$sample_length)-1,1);
	}
	return $result;
}

function randompass($length)
{
	return randomin("abcdefghijklmnopqrstuvwxyz-+_.#$!=0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ",$length);
}

?>
