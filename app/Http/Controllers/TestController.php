<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Teacher;
use App\Models\KiderClass;

class TestController extends Controller
{
    public function inc(){
      $testimonials = Testimonial::where('published', 1)->get();
      $teacher = Teacher::where('active', 1)->get();
      $class = KiderClass::where('active', 1)->get();
        return 
        view('hometest', compact('testimonials', 'teacher', 'class')); 
          }

    public function classes(){
      $testimonials = Testimonial::get();
      $teacher = Teacher::get();
      $class = KiderClass::get();
            return 
            view('classes', compact('testimonials', 'class','teacher')); 
              }

   
  public function about(){
        return 
        view('aboutUs'); 
          } 

public function facilities(){
        return 
        view('facility'); 
          }

public function team(){
  $teacher = Teacher::get();
        return 
        view('team', compact('teacher')); 
          }
          
public function call(){
        return 
        view('call'); 
          }

public function testimonial(){
  $testimonials = Testimonial::get();      
  return  view('testimonial', compact('testimonials')); 
          }
               
          
public function error(){
        return 
        view('404Error'); 
          }               
          
}
