<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Banner::where('status',1)->orderBy('id','DESC')->get();
        return view('admin.banner.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
          'image' => 'required',
          'title_en' => 'required|max:240',
          'title_bn' => 'required|max:240',
          'title_arb' => 'required|max:240',
        ]);

        // make image
        $image = $request->file('image');
        $imageName = 'banner-image'.'-'.time().'-'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1920,750)->save('uploads/banner/'.$imageName);
        $save_url = 'uploads/banner/'.$imageName;
        // make image

        $data = $request->all();
        $data['image'] = $save_url;
        Banner::create($data);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Banner::where('status',1)->where('id',$id)->first();
        return view('admin.banner.edit',compact('data'));
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
      $request->validate([
        'image' => 'required',
        'title_en' => 'required|max:240',
        'title_bn' => 'required|max:240',
        'title_arb' => 'required|max:240',
      ]);

      if($request->file('image')){
        if($request->old_image != ""){
          unlink($request->old_image);
        }
        // make image
        $image = $request->file('image');
        $imageName = 'banner-image'.'-'.time().'-'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1920,750)->save('uploads/banner/'.$imageName);
        $save_url = 'uploads/banner/'.$imageName;
        // make image
        Banner::where('id',$id)->update([
          'title_en' => $request->title_en,
          'title_bn' => $request->title_bn,
          'title_arb' => $request->title_arb,
          'subtitle_en' => $request->subtitle_en,
          'subtitle_bn' => $request->subtitle_bn,
          'subtitle_arb' => $request->subtitle_arb,
          'button_en' => $request->button_en,
          'button_bn' => $request->button_bn,
          'button_arb' => $request->button_arb,
          'url' => $request->url,
          'image' => $save_url,
          'updated_at' => Carbon::now(),
        ]);
      }else{
        Banner::where('id',$id)->update([
          'title_en' => $request->title_en,
          'title_bn' => $request->title_bn,
          'title_arb' => $request->title_arb,
          'subtitle_en' => $request->subtitle_en,
          'subtitle_bn' => $request->subtitle_bn,
          'subtitle_arb' => $request->subtitle_arb,
          'button_en' => $request->button_en,
          'button_bn' => $request->button_bn,
          'button_arb' => $request->button_arb,
          'url' => $request->url,
          'updated_at' => Carbon::now(),
        ]);
      }
      Session::flash('update_success','value');
      return redirect()->back();
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
