<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function wykonczenie()
    {
        $page = Page::find(1);
        return view('front.static.wykonczenie', compact('page'));
    }
}
