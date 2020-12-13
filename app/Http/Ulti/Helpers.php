<?php 
namespace App\Http\Ulti;
class Helpers {
	public static function  truncateTable($model,$id){
		$model::findOrFail($id)->delete();
		$row = $model::all();
		if(count($row) == 0){
			$bb = $model::truncate();
			return $bb;
		}
		return false;
	}

	public static function splitDate($date,&$year,&$moth,&$day){
		$split = str_replace('-','',$date);
		$year = substr($split,0,4);
		$month = substr($split,4,2);
		$day = substr($split,6,2);
		return $split;
	}
}

?>