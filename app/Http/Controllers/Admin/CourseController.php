<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Carbon\Carbon;
use Session;
use Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = Course::get();
       return view('admin.course.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.create');
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
        'course_name_en' => 'required|max:220|string',
        'course_name_bn' => 'required|max:220|string',
        'course_name_arb' => 'required|max:220|string',
      ],[

      ]);
      // insert data in database
      $data = $request->all();

      // duration
      $start_date = strtotime($request->start_date);
      $end_date = strtotime($request->end_date);
      $date = abs($end_date-$start_date);
      $output = ($date/60/60/24);
      // duration
      // make thumbnail
      $imageThumbnail = $request->file('thumbnail');
      $imageNameThumbnail = 'course-thumbnail'.'-'.time().'-'.$imageThumbnail->getClientOriginalExtension();
      Image::make($imageThumbnail)->resize(1140,451)->save('uploads/course/'.$imageNameThumbnail);
      $save_urlThumbnail = 'uploads/course/'.$imageNameThumbnail;
      // make thumbnail
      $data['thumbnail'] = $save_urlThumbnail;
      $data['duration'] = $output;
      $data['slug'] = strtolower(str_replace(' ','-',$request->course_name_en));

      if($request->file('image')){
        // image making
        $image = $request->file('image');
        $imageName = 'course-image'.'-'.time().'-'.$image->getClientOriginalExtension();
        Image::make($image)->resize(970,1000)->save('uploads/course/'.$imageName);
        $save_url = 'uploads/course/'.$imageName;
        // image making
        $data['image'] = $save_url;
        Course::create($data);
        Session::flash('success_store','value');
        return redirect()->route('course.index');
      }else{
        Course::create($data);
        Session::flash('success_store','value');
        return redirect()->route('course.index');
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Course::where('id',$id)->first();
        return view('admin.course.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Course::where('id',$id)->first();
        return view('admin.course.edit',compact('data'));
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
        'course_name_en' => 'required|max:220|string',
        'course_name_bn' => 'required|max:220|string',
        'course_name_arb' => 'required|max:220|string',
      ],[

      ]);
      // insert data in database
      $data = $request->all();
      $data['slug'] = strtolower(str_replace(' ','-',$request->course_name_en));

      if($request->file('image')){
        $image = Course::where('id',$id)->first();
        if($image->image != ""){
          unlink($image->image);
        }
        // image making
        $image = $request->file('image');
        $imageName = 'course-image'.'-'.time().'-'.$image->getClientOriginalExtension();
        Image::make($image)->resize(970,1000)->save('uploads/course/'.$imageName);
        $save_url = 'uploads/course/'.$imageName;
        // image making
        $data['image'] = $save_url;
        Course::where('id',$id)->update($data);
        Session::flash('success_update','value');
        return redirect()->route('course.index');
      }else{
        Course::where('id',$id)->update($data);
        Session::flash('success_update','value');
        return redirect()->route('course.index');
      }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Course::where('id',$id)->delete();
        Session::flash('success_delete','value');
        return redirect()->back();
    }
}
