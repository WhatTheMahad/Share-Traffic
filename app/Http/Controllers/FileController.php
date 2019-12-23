<?php
namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;
class FileController extends Controller
{
		public function showUploadForm()
	{
		return view('page');
	}
	public function storeFile(Request $request)
	{
		$employee = new File();
		$employee->title = $request->input('title');

		if ($request->hasfile('image')) {
			$file= $request->file('image');
			$extension = $file->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('uploads/employee/', $filename);
			$employee->image = $filename;
		}
		else
		{
		return $reuest;
		$employee->image='';
		}
		$employee->save();
		return back()->with('success','Image Uploaded Successfully')->with('page',$filename);

	}
	public function display()  //Display Files
	{
		$disp = File ::all();
		return view ('view', compact('disp'));
	}

	public function delete($title)		//File Delete
	{
		$delete = File::find($title);
		$delete->delete();
		return redirect('/view')->with('delete',$delete);
	}

	public function download()
	{
		$download = File::table('upload_files')->get();
		return view('download.view' ,compact('download'));
	}

	public function update($id)
	{
		$edit = File::find($id);
		return view('/update')->with('edit',$edit);
	}

	public function updated(Request $request, $id)
	{
		$edit = File::find($id);
		$edit->title = $request->input('title');
		
		if ($reuest->hasfile('image'))
		{
			$file = $reuest->file('image');
			$extension = $reuest->getClientOriginalExtension();
			$filename = time().'.'.$extension;
			$file->move('uploads/employee/',$filename);
			$edit->image = $filename;
		}
		$edit->save();
		return redirect('/view')->with('edit',$edit);
	}
}
