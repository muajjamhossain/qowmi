<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Models\TeachersContact;
use Carbon\Carbon;
use Session;
use Image;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Teachers::get();
        return view('admin.teachers.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request,[
          'image' => 'required',
          'name_en' => 'required|max:220|string',
          'name_bn' => 'required|max:220|string',
          'name_arb' => 'required|max:220|string',
          'title_en' => 'required|max:220|string',
          'title_bn' => 'required|max:220|string',
          'title_arb' => 'required|max:220|string',
        ],[

        ]);
        // insert data in database
        $data = $request->all();
        $data['slug'] = strtolower(str_replace(' ','-',$request->name_en));
        // image making
        $image = $request->file('image');
        $imageName = 'teachers-image'.'-'.time().'-'.$image->getClientOriginalExtension();
        Image::make($image)->resize(450,400)->save('uploads/teachers/'.$imageName);
        $save_url = 'uploads/teachers/'.$imageName;
        // image making
        $data['image'] = $save_url;
        Teachers::create($data);
        Session::flash('store_success','value');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Teachers::where('id',$id)->first();
        return view('admin.teachers.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = Teachers::where('id',$id)->first();
       return view('admin.teachers.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation
        $this->validate($request,[
          'name_en' => 'required|max:220|string',
          'name_bn' => 'required|max:220|string',
          'name_arb' => 'required|max:220|string',
          'title_en' => 'required|max:220|string',
          'title_bn' => 'required|max:220|string',
          'title_arb' => 'required|max:220|string',
        ],[

        ]);
        // insert data in database
        $data = $request->all();
        $data['slug'] = strtolower(str_replace(' ','-',$request->name_en));
        if($request->file('image')){
          $image = Teachers::where('id',$id)->first();
          if($image->image != ""){
            unlink($image->image);
          }
          // image making
          $image = $request->file('image');
          $imageName = 'teachers-image'.'-'.time().'-'.$image->getClientOriginalExtension();
          Image::make($image)->resize(450,400)->save('uploads/teachers/'.$imageName);
          $save_url = 'uploads/teachers/'.$imageName;
          // image making
          $data['image'] = $save_url;
          Teachers::where('id',$id)->update($data);
          Session::flash('success_update','value');
          return redirect()->route('teachers.index');
        }else{
          Teachers::where('id',$id)->update($data);
          Session::flash('success_update','value');
          return redirect()->route('teachers.index');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
