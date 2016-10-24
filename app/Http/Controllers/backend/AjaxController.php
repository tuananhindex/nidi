<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Request;
use DB;


class AjaxController extends Controller
{
   
    public function get_data_cursor()
    {
        if(Request::ajax()) {
            $data = DB::table($_GET['cursor'])->select('alias','name')->get();
            $html = '';
            $html .= '<div class="form-group">';
            $html .= '<label>Đối tượng trỏ đến</label>';
            $html .= '<select class="form-control" name="cursor_id">';
            foreach ($data as $key => $value) {
                $html .= '<option value="'.$value->alias.'">'.ucfirst($value->name).'</option>';
            }
            $html .= '</select>';
            $html .= '</div>';
            echo $html;
        }
        //return 123;
    }

    
}
