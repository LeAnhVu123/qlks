<?php 
namespace App\Http\Ulti;

use App\Dichvu;
use Illuminate\Support\Facades\DB;
class Helpers {
	public static function truncateTable($model,$id){
		$model::findOrFail($id)->delete();
		$allRow = $model::all();
		$model::truncate();
		foreach($allRow as $row){			
			Dichvu::create([
				'tendv' => $row['tendv'],
				'gia' => $row['gia'],
			]);
		}
		return true;
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