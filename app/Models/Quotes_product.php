<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Quotes_product extends Model
{
	protected $table='quotes_product';
	protected $fillable=[
		'name','email','product_id','phone','content','status'
	];
	public function product(){
		return $this->hasOne('\App\Models\Product','id','product_id');
	}	
}
 ?>