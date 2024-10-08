<?php

namespace App\Http\Controllers\Front\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        $page = Page::find(3);
        $galleries = Gallery::where('status', 1)->get();
        return view('front.gallery.index', ['page' => $page, 'galleries' => $galleries]);
    }
}
