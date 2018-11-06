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
use App\Models\Support;
use App\Models\Comment;
/**
* 
*/
class HomeController extends Controller
{
	public function index(){
		$slider=Slider::orderBy('sorder','ASC')->where('status','enable')->get();
		$categorys=Category::orderBy('sorder','ASC')->Where('parent_id','parent')->get();
		$best_seller=Product::Where('is_best_seller','enable')->get();
		$new_product=Product::Where('is_new_product','enable')->paginate(10);
		$promotion=Product::Where('is_promotion','enable')->get();
		$special_product=Product::Where('special_product','enable')->get();
		$company_news=News::Where('category_id','35')->paginate(10);
		$news=News::Where('category_id','32')->paginate(10);
		$supports=Support::Where('status','enable')->Where('type','technical')->paginate(10);
		$sp=Support::Where('status','enable')->Where('type','business')->paginate(10);
		$partners=Partners::Where('status','enable')->get();
		return view('home.index',[
			'sliders'=>$slider,
			'categorys'=>$categorys,
			'best_seller'=>$best_seller,
			'new_products'=>$new_product,
			'special_products'=>$special_product,
			'promotions'=>$promotion,
			'news'=>$company_news,
			'news_1'=>$news,
			'partners'=>$partners,
			'supports'=>$supports,
			'sp'=>$sp
			]);
	}
	public function view($slug, Request $req)
		{
			$category= Category::where('slug',$slug)->first();
			$product= Product::where('slug',$slug)->first();

			//sản phẩm khác
			$others=Product::where('category_id','<>','$id')->paginate(8);
			
			if($category)
			{
				$products= Product::where('category_id',$category->id);
				// if($req->ordering)
				// {	
				// 	$ordering = explode('-',$req->ordering);
				// 	$products =$products->orderBy($ordering[0],$ordering[1]);
				// }

				// if($req->price)
				// {	
				// 	$price = explode('-',$req->price);
				// 	$products =$products->where('price','>=',$price[0])->where('price','<=',$price[1]);
				// }
				$products = $products->paginate(10);
			
				return view('home.product-category',['category'=>$category,'products' => $products]);
			}
			else if($product)
			{
				$comment=Comment::orderBy('id','DESC')->where('status',1)->where('product_id',$product->id)->paginate(4);
				return view('home.detail',[
					'product'=>$product,
					'others'=>$others,
					'comments'=>$comment
					]);
			}
			else
			{
				return view('errors.404');
			}

		}
	public function comment(Request $req){
		$this->validate($req,[
			'comment' => 'required',
			'name' => 'required',
			'email' => 'required|email'
			],[
			'comment.required' => 'Nội dung không được để trống',
			'name.required' => 'Tên không được để trống',
			'email.required' => 'Email không được để trống',
			'email.email' => 'Email không đúng định dạng'
			]);

		$comment = Comment::create($req->all());
		return redirect()->back()->with('success','Đánh giá đang chờ phê duyệt');

	}
}
 ?>