<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

class PagesController extends Controller
{
    public function home() {
        return view('index');
    }

    public function hiscore() {
        return view('hiscore');
    }

    public function member() {
        /*$members = Member::all();
        return $members;*/
        return view('member');
    }

    public function about() {
        return view('about');
    }
}