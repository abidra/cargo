<?php
namespace App\Helpers;
use Modules\Documents\Entities\DocCategory;
use Modules\Documents\Entities\DocType;
use App\Role;

class Helpers
{

    public static function select_ubis($name='ubis',$val=null)
    {
      $ubis = Role::whereNotIn('name', ['admin','super_admin','vendor'])->get();
      $select  = '<select class="form-control" id="'.$name.'" name="'.$name.'" required>';
      $select .= '<option value="">Pilih UBIS/AP</option>';
      foreach ($ubis as $dt) {
        $selected = '';
        if($val==$dt['id']){
          $selected = 'selected="selected"';
        }
        $select .= '<option value="'.$dt['name'].'" '.$selected.'>'.$dt['display_name'].'</option>';
      }
      $select .= '</select>';
      return $select;
    }
    public static function select_category($name='category',$val=null)
    {
      $cat = DocCategory::all();
      $select  = '<select class="form-control" id="'.$name.'" name="'.$name.'" required>';
      $select .= '<option value="">Pilih Kategori</option>';
      foreach ($cat as $dt) {
        $selected = '';
        if($val==$dt['id']){
          $selected = 'selected="selected"';
        }
        $select .= '<option value="'.$dt['name'].'" '.$selected.'>'.$dt['title'].'</option>';
      }
      $select .= '</select>';
      return $select;
    }
}
