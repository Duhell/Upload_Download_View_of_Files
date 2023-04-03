<?php

namespace App\Http\Controllers;

use App\Models\FileManage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing(){
        return view('pages.landingPage');
    }
    public function uploadPage(){
        return view('pages.uploadPage');
    }
    public function showAllFiles(){
        $data = FileManage::all();
        $total = FileManage::count();
        return view('pages.showFilesPage',compact('data','total'));
    }

    public function storeNewFiles(Request $request){
        $data = new FileManage();
        $file = $request->file;
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$fileName);
        $data->file = $fileName;
        $data->name = $request->nameOfFile;
        $data->description = $request->descriptionOfFile;
        if($data->save()){
            session()->flash('response',"Upload Successfully!");
            return redirect()->route('upload');
        }else{
            session()->flash('response',"Failed to upload your file");
            return redirect()->route('upload');
        }

    }

    public function downloadFile(Request $request,$file){
        return response()->download(public_path('assets/'.$file));
    }

    public function viewFile($id){
        $data = FileManage::findOrFail($id);
        $extension = pathinfo($data->file,PATHINFO_EXTENSION);
        return view('pages.viewPage',compact('data','extension'));
    }

}
