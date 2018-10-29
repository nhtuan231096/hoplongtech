<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Slider;
/**
* 
*/
class SliderController extends Controller
{
	public function index()
	{	
		$slider=Slider::orderBy('id','desc')->paginate(10);
		return view('admin.slider.index',[
			'sliders' => $slider
			]);
	}
	public function addSlider(Request $req){
		$this->validate($req,[
			'title' => 'required',
			'slug' => 'required|unique:slider,slug',
			'link' => 'required',
			'file_upload' => 'required|mimes:jpeg,jpg,bmp,png'
		],[
			'title.required' => 'Tiêu đề không được để trống',
			'slug.required' => 'Đường dẫn không được để trống',
			'link.required' => 'Liên kết không được để trống',
			'slug.unique' => 'Đường dẫn đã tồn tại',
			'file_upload.required' => 'Ảnh không được để trống',
			'file_upload.mimes' => 'Ảnh không đúng định dạng'
		]);
		$img='';
		if ($req->hasFile('file_upload')) 
		{
			$file=$req->file_upload;
			$file->move(base_path('uploads/slider'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
			// dd($req->all());	
		$add=Slider::create($req->all());
		if($add)
		{
			return redirect()->route('slider')->with('success','Thêm mới thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi khi thêm mới');
		}
	}
	public function delSlider($id){
		$delSlider=Slider::destroy($id);
		if($delSlider)
		{
			return redirect()->route('slider')->with('success','Xóa thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi khi Xóa');
		}
	}
	public function editSlider($id){
		$editSlider=Slider::find($id);
		$slider=Slider::orderBy('id','desc')->paginate(10);
		return view('admin.slider.index',[
			'sliders' => $slider,
			'editSlider' => $editSlider
			]);
	}
}
 ?>