<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function wykonczenie()
    {
        $page = Page::find(7);
        return view('front.static.wykonczenie', compact('page'));
    }

    public function polityka()
    {
        $page = Page::find(5);
        return view('front.static.polityka', compact('page'));
    }
}
