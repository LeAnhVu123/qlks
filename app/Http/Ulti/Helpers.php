<?php 
namespace App\Http\Ulti;
use Illuminate\Support\Facades\DB;
class Helpers {
	public static function  truncateTable($model,$id){
		// $getAll = $model::all()->toSql();
		// dd($getAll);
		// $bindings = $select->getBindings();
		/**
		 * now go down to the "Network Layer"
		 * and do a hard coded select, Laravel is a little
		 * stupid here
		 */
		// $select = "select * from dichvus";
		// dd($select);
		$truncate = $model::truncate();
		$select = "select madv,tendv,gia from dichvus where madv = 1";
		$insertQuery = "INSERT into dichvus (madv,tendv,gia,created_at,updated_at) select madv,tendv,gia,created_at,updated_at from dichvus where madv = 1";
		$aa = DB::select($select);
		dd($aa);
		die;
		$truncate = $model::truncate();
		if($truncate){
			
			return true;
		}else{
			return false;
		}
						

		

		// $model::findOrFail($id)->delete();
		// $row = $model::all();
		// if(count($row) == 0){
		// 	$bb = $model::truncate();
		// 	return $bb;
		// }
		// return false;
	}

	public static function splitDate($date,$type,&$year,&$month,&$day){
		$split = str_replace($type,'',$date);
		$year = substr($split,0,4);
		$month = substr($split,0,4);
		$day = substr($split,6,2);
		return $split;
	}
}

?>