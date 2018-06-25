<?php

namespace App\model\backend;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
	protected $table = 'Product';
	protected $primaryKey = 'prod_id';
    // protected $fillable = [

    // 	'full_name','name','email','password','level',
    // ];
	protected  $guarded = [];
	
	public function category(){
    	return $this->hasmany('App\model\backend\CaloteryModel','prod_cate');//thuan

    }
}
