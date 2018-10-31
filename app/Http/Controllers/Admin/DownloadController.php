<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Download_service;
use App\Models\Category;
use Illuminate\Http\Request;
/**
* 
*/
class DownloadController extends Controller
{
	
	public function index()
	{	
		$download=Download_service::search()->orderBy('id','desc')->paginate(10);
		$cates=Category::where('status','enable')->get();
		return view('admin.download.index',[
			'downloads'=>$download,
			'cates'=>$cates
			]);
	}
	public function add(Request $req){
		$img='';
		if($req->hasFile('file_upload')){
			$file=$req->file_upload;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		$this->validate($req,[
			'title' => 'required|unique:download_service,title'
		],[
			'title.required' => 'Tiêu đề không được để trống',
			'title.unique' => 'Tiêu đề đã tồn tại'
		]);
		$add = Download_service::create($req->all());
		if ($add) {
			return redirect()->route('download')->with('success','Thêm mới thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi khi thêm mới');
		}
		// dd($req->all());
	}
	public function editDownload($id){
		$edit=Download_service::find($id);
		$download=Download_service::orderBy('id','desc')->paginate(10);
		$cates=Category::where('status','enable')->get();
		return view('admin.download.index',[
			'downloads'=>$download,
			'cates'=>$cates,
			'edit'=>$edit
			]);
	}
	public function PostEditDownload($id, Request $req){
		$download=Download_service::find($id);
		$img=$download->cover_image;
		if($req->hasFile('file_upload')){
			$file=$req->file_upload;
			$file->move(base_path('uploads/download'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		$this->validate($req,[
			'title' => 'required|unique:download_service,title,'.$id,
		],[
			'title.required' => 'Tiêu đề không được để trống',
			'title.unique' => 'Tiêu đề đã tồn tại'
		]);
		$edit = $download->update($req->all());
		if ($edit) {
			return redirect()->route('download')->with('success','Cập nhật thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi khi thêm mới');
		}
	}
	public function delete($id){
		$delete = Download_service::find($id)->delete();
		if ($delete) {
			return redirect()->route('download')->with('success','Xóa thành công');
		}
		else{
			return redirect()->back()->with('error','Có lỗi khi xóa');
		}
	}
}
 ?>