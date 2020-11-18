<?php

namespace App\Http\Ulti;

class Helper
{
	public static function convertDate($string, $offset, $init)
	{
		$replace = str_replace($init, $offset, $string);
		$day = substr($replace, 2, 2);
		$month = substr($replace, 0, 2);
		$year = substr($replace, 4, 4);
		$convertDate = $year . '/' . $month . '/' . $day;
		return $convertDate;
	}
	public static function moveImg($img,$link)
	{
		$name = $img->getClientOriginalName(); //ten hinh
		$b = substr("$name", 0, -4);
		$imgText = rand(0, 100) . $b . rand(0, 100) . '.jpg';;
		$path =  public_path() . $link;
		$img->move($path, $imgText);
		return $imgText;
	}

	public static function removeImg($img,$link){		
		$path =  public_path() . $link. $img;
		unlink($path);
	}
}
