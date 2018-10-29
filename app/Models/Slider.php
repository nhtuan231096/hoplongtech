<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Slider extends Model
{
	protected $table='slider';
	protected $fillable=[
		'title','slug','created_by','cover_image','status','link'
	];
	public function scopeSearch($query)
	{
		if(empty(request()->search))
		{
			return $query;
		}
		else
		{
			return $query->where('title','like','%'.request()->search.'%');
		}	
	}	
}
 ?>