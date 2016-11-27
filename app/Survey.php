<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    

    protected $table = 'surveys';

	public static function LabelName($x)
	{
		if ($x <= 1) {
			$z = 'Strongly Dissatisfied';
		}
		else if ($x <= 2) {
			$z = 'Dissatisfied';
		}
		else if ($x <= 3) {
			$z = 'Normal';
		}
		else if ($x <= 4) {
			$z = 'Satisfied';
		}
		else if ($x <= 5) {
			$z = 'Strongly Satisfied';
		}
		else {
			$z = 'Unknown';
		}					
		return $z;	
	}


	public function UserInfo() {
		return $this->belongsTo('App\User', 'user_id');
	}



	public function save_survey($data)
	{
		$this->user_id = auth()->user()->id;
		$this->date_apply = date('Y-m-d H:i:s');
		$this->name = $data['project'];		
		$this->a1 = $data['a1'];
		$this->a2 = $data['a2'];
		$this->a3 = $data['a3'];
		$this->a4 = $data['a4'];
		$this->a5 = $data['a5'];
		$this->ax = $data['ax'];
		$this->b1 = $data['b1'];
		$this->bx = $data['bx'];
		$this->c1 = $data['c1'];
		$this->c2 = $data['c2'];
		$this->c3 = $data['c3'];
		$this->cx = $data['cx'];
		$this->d1 = $data['d1'];
		$this->d2 = $data['d2'];
		$this->d3 = $data['d3'];
		$this->d4 = $data['d4'];
		$this->d5 = $data['d5'];
		$this->d6 = $data['d6'];
		$this->d7 = $data['d7'];
		$this->d8 = $data['d8'];
		$this->d9 = $data['d9'];
		$this->dx = $data['dx'];
		$this->save();			
		return true;
	}





}


