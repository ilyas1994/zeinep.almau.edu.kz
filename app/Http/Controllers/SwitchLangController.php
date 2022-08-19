<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SwitchLangController extends Controller
{
    public function index($lang) {

        $data = DB::table('main_pages')->where('lang', '=', $lang)->get();

        return view('indexMain')->with('data', $data);
    }
}
