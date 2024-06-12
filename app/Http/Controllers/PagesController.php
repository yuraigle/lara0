<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function about(Request $request): View
    {
        return view('pages.about');
    }

    public function contact(Request $request): View
    {
        return view('pages.contact', []);
    }
}
