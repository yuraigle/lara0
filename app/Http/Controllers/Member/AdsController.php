<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdsController extends Controller
{
    public function index(Request $request): View
    {
        return view('member.ads', []);
    }
}
