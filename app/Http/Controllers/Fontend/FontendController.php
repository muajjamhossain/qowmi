<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class FontendController extends Controller{
    public function index(){
      return view('fontend.index');
    }

    public function about(){
      return view('fontend.about');
    }

    public function course(){
      return view('fontend.course');
    }

    public function courseDetails($id,$slug){
      $course = Course::where('id',$id)->first();
      return view('fontend.courseDetails',compact('course'));
    }

    public function teacher(){
      return view('fontend.teacher');
    }

    public function teacherDetails(){
      return view('fontend.teacherDetails');
    }

    public function shop(){
      return view('fontend.shop');
    }

    public function shopDetails(){
      return view('fontend.shopDetails');
    }

    public function research(){
      return view('fontend.research');
    }

    public function researchDetails(){
      return view('fontend.researchDetails');
    }

    public function gellary(){
      return view('fontend.gellary');
    }

    public function contact(){
      return view('fontend.contact');
    }

}
