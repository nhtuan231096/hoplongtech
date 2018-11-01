<?php 
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use App\Models\News;
use App\Models\Partners;
/**
* 
*/
class HomeController extends Controller
{
	public function index(){
		$slider=Slider::where('status','enable')->get();
		$categorys=Category::Where('parent_id','parent')->paginate(12);
		$best_seller=Product::Where('is_best_seller','enable')->get();
		$new_product=Product::Where('is_new_product','enable')->paginate(5);
		$promotion=Product::Where('is_promotion','enable')->get();
		$news=News::Where('status','enable')->paginate(2);
		$partners=Partners::Where('status','enable')->get();
		return view('home.index',[
			'sliders'=>$slider,
			'categorys'=>$categorys,
			'best_seller'=>$best_seller,
			'promotion'=>$promotion,
			'news'=>$news,
			'partners'=>$partners
			]);
	}
}
 ?>