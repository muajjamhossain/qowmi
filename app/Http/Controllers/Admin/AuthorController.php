<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutAuthor;
use Illuminate\Http\Request;
use Session;
use Image;

class AuthorController extends Controller
{
    public function findInfo(){
        $data = AboutAuthor::where('id',1)->first();
        return view('admin.setting.aboutAuth',compact('data'));
    }

    public function updateInfo(Request $request){
        $this->validate($request,[
          'name' => 'required'
        ],[

        ]);

        $data = $request->all();
        // update data in database
        if($request->file('image')){
          $image = AboutAuthor::where('id',1)->first();
          if($image->image != ""){
            unlink($image->image);
          }
          // image making
          $image = $request->file('image');
          $imageName = 'author-image'.'-'.time().'-'.$image->getClientOriginalExtension();
          Image::make($image)->resize(300,300)->save('uploads/author/'.$imageName);
          $save_url = 'uploads/author/'.$imageName;
          // image making
          $data['image'] = $save_url;
          AboutAuthor::where('id',1)->update($data);
          Session::flash('success_update','value');
          return redirect()->back();
        }else{
          AboutAuthor::where('id',1)->update($data);
          Session::flash('success_update','value');
          return redirect()->back();
        }
        // update data in database

    }

}
