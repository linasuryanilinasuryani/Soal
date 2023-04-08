<?php
namespace App\Http\Controllers;



class TestController extends Controller
{

    public function index($kode){
        return view('test', compact('kode'));
    }
}
