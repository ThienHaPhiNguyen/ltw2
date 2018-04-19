<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model {

    protected $table = 'menu';
    protected $primaryKey = 'menu_id';

public function getParents(){									
		$parents = self::where('menu_id_parent',NULL)->get();								
		return $parents;									
	}
	public function getChilds($parents){
		if($parents)
		{
			foreach ($parents as $parent) {									
				$parent->childs = self::where('menu_id_parent', $parent->menu_id)->get();
				$this->getChilds($parent->childs);	
			}			 						
		}																		
	}    
}
