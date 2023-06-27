<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CloneGramController extends Controller
{

//トップページ・一覧画面
    public function index(){
        return view('Clone-gram.index');
    }

//マイページ
    public function my_page(){
        return view('Clone-gram.my_page');
    }
}
