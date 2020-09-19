<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //

    public function easy(){
      return view('challanges/easy');
    }

    public function medium(){
      return view('challanges/medium');
    }

    public function hard(){
      return view('challanges/hard');
    }

    public function alladinandthemagiclamp(){
      return view('challanges/alladin-and-the-magic-lamp');
    }

    public function thetempest(){
      return view('challanges/the-tempest');
    }

    public function python(){
      return view('programming/python');
    }

    public function java(){
      return view('programming/java');
    }

    public function c(){
      return view('programming/c');
    }

    public function cplusplus(){
      return view('programming/c++');
    }
    public function get_url_val(){
      return view('execute');
    }
}
