<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    




	public static function LabelName($x)
	{
		if ($x < 2) {
			$z = 'Strongly Dissatisfied';
		}
		else if ($x < 3) {
			$z = 'Dissatisfied';
		}
		else if ($x < 4) {
			$z = 'Normal';
		}
		else if ($x < 5) {
			$z = 'Satisfied';
		}
		else if ($x < 6) {
			$z = 'Strongly Satisfied';
		}
		else {
			$z = 'Unknown';
		}					
		return $z;	
	}



}
