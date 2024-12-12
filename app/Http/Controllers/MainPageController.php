<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class MainPageController extends Controller
{
    public function home()
    {
          $currentUrl = URL::current();
          return view('main.home');
    }
    public function about()
    {
          return view('main.about');
    }
    public function service()
    {
          return view('main.service');
    }
    public function job()
    {
          return view('main.job');
    }
    public function whyus()
    {
          return view('main.whyus');
    }
}
