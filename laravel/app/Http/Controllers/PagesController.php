<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      return view('pages.index');
    }
    public function team(){
      return view('pages.team');
    }
    public function web(){
      return view('pages.web');
    }
    public function social(){
      return view('pages.social');
    }
    public function seo(){
      return view('pages.seo');
    }
    public function video(){
      return view('pages.video');
    }
    public function design(){
      return view('pages.design');
    }
    public function church(){
      return view('pages.church');
    }
    public function quote(){
      return view('pages.quote');
    }
}
