<?php

/**
* 
*/


namespace App\Http\Helpers;

use DB;

class AdminHelper{

	public static function _substr($str, $length, $minword = 3)
	{
		$sub = '';
		$len = 0;
		foreach (explode(' ', $str) as $word)
		{
		    $part = (($sub != '') ? ' ' : '') . $word;
		    $sub .= $part;
		    $len += strlen($part);
		    if (strlen($word) > $minword && strlen($sub) >= $length)
		    {
		      break;
		    }
		}
		return $sub . (($len < strlen($str)) ? '...' : '');
	}

	public static function check_alias($table,$alias,$id = 0){

	    if($id == 0){

	        $check = DB::table($table)->where('alias','like','%'.$alias.'%')->select('alias')->get();

	    }else{

	        $check = DB::table($table)->where('alias','like','%'.$alias.'%')->whereNotIn('id',[$id])->select('alias')->get();

	    }



	    if(count($check) == 0){

	        return $alias;

	    }else{

	        $num = count($check) + 1;

	        return $alias.'-'.$num;

	    }

	}



	public static function alert_admin($class,$class_i,$alert){

	    $return = ' <div class="alert alert-'.$class.' alert-custom alert-dismissible">

	                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

	                    <h4><i class="icon fa '.$class_i.'"></i> Thông Báo !</h4>

	                    '.ucfirst($alert).'.

	                </div>';

	    return $return;

	}



	



	public static function MultiLevelSelect($arr,$parent = 0,$char='',$select = 0){

		$result = '';

		foreach ($arr as $value) {

			if($value->fk_parentid == $parent){

				if($select != 0 && $value->id == $select){

					$result .= '<option value="'.$value->id.'" selected="selected" >'.$char.ucfirst($value->name).'</option>';

				}else{

					$result .= '<option value="'.$value->id.'">'.$char.ucfirst($value->name).'</option>';

				}

				$result .= self::MultiLevelSelect($arr,$value->id,$char.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',$select);

			}

		}

		return $result;

	}







	public static function category_root($arr,$parent){

		$result = '';

		foreach ($arr as $value) {

			if($parent == $value->id){

				if($value->fk_parentid != 0){

					$result = category_root($arr,$value->fk_parentid);

				}else{

					$result = $value->id;

					break;

				}

				

				

			}



		}

		return $result;

	}



	



	public static function menu($arr,$parent = 0,$select = 0){
		$rs = '';
		if($parent != 0){
			$rs .= '<ul><div class="submenu_group"><div class="submenu_col">';
		}
		
		foreach ($arr as $key => $val) {
			if($val->fk_parentid == $parent){
				if(empty($val->cursor)){
					$href = 'javascript:void(0)';
				}else{
					$href = route('menu',$val->alias);
				}
				$rs .= '<li class="sub-menu">';
				$rs .= '<a class="menu" href="'.$href.'"><span class="menu_title">
				'.ucfirst($val->name).'</span>';
				if($parent == 0 && !empty(self::child_id($arr,$val->id))){
					$rs .= '<i class="fa fa-caret-down"></i>';
				}
				
				$rs .= '</a>';
				$rs .= self::menu($arr,$val->id,$select);
				$rs .= '</li>';
			}
			
		}
		

		if($parent != 0){
			$rs .= '</div></div></ul>';
		}
		return $rs;
	}

	public static function menu_mobi($arr,$parent = 0,$select = 0){
		$rs = '';
		if($parent != 0){
			$rs .= '<ul class="mobile-nav__sublist">';
		}
		
		foreach ($arr as $key => $val) {
			if($val->fk_parentid == $parent){
				if(empty($val->cursor)){
					$href = 'javascript:void(0)';
				}else{
					$href = route('menu',$val->alias);
				}
				$rs .= '<li class="mobile-nav__item "><div class="mobile-nav__has-sublist">';
				$rs .= '<a class="menu" href="'.$href.'"><span class="menu_title">
				'.ucfirst($val->name).'</span></a>';
				if(!empty(self::child_id($arr,$val->id))){
					$rs .= '<div class="mobile-nav__toggle">
								<button type="button" class="icon-fallback-text mobile-nav__toggle-open">
									<span class="fa fa-angle-right fa-lg"></span>
								</button>
								<button type="button" class="icon-fallback-text mobile-nav__toggle-close">
									<span class="fa fa-angle-right fa-lg fa-rotate-90"></span>
								</button>
							</div>';
				}
				$rs .= '</div>';
				$rs .= self::menu_mobi($arr,$val->id,$select);
				$rs .= '</li>';
			}
			
		}
		

		if($parent != 0){
			$rs .= '</ul>';
		}
		return $rs;
	}



	public static function child_id_str($data,$id){

		$result = '';

		foreach ($data as $value) {

			if($value->fk_parentid == $id){

				$result .= $value->id.',';

				$result .= self::child_id_str($data,$value->id);

			}

			

		}

		return $result;

	}

	public static function child_id($data,$id){

		$str = self::child_id_str($data,$id);

		$arr = explode(',', $str);



		array_pop($arr);

		//$arr[] = $id;

		$arr = array_unique($arr);

		

		return $arr;

	}

	public static function parent_id_str($data,$id){

		$result = '';

		foreach ($data as $value) {

			if($value->id == $id){

				$result .= $value->id.',';

				$result .= self::parent_id_str($data,$value->fk_parentid);

			}

			

		}

		return $result;

	}

	public static function parent_id($data,$id){

		$str = self::parent_id_str($data,$id);

		$arr = explode(',', $str);



		array_pop($arr);

		//$arr[] = $id;

		$arr = array_unique($arr);

		

		return $arr;

	}

	
	
}

	

	



?>