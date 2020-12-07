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
}

?>