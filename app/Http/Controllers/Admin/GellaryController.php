<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gellary;
use Carbon\Carbon;
use Session;
use Image;

class GellaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gellary::orderBy('id','DESC')->get();
        return view('admin.gellary.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //////////////////// Multiple image uplod start /////////////////////////////////
      $images = $request->file('multi_img');
      foreach ($images as $img) {
          $make_name = 'gellary-image'.'-'.time().'-'.$img->getClientOriginalExtension();
          Image::make($img)->resize(600,500)->save('uploads/gellary/'.$make_name);
          $uplodPath = 'uploads/gellary/'.$make_name;

          Gellary::insert([
              'image_path' => $uplodPath,
              'created_at' => Carbon::now(),
          ]);
       }

       Session::flash('success_store','value');
       return redirect()->back();
       //////////////////// Multiple image uplod End /////////////////////////////////
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Gellary::where('id',$id)->first();
        unlink($data->image_path);
        Gellary::where('id',$id)->delete();

        Session::flash('success_delete','value');
        return redirect()->back();
    }
}
