<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }   
    public function banner(){
        return view('admin.banner');
    }
    public function bannerEdit(){
        return view('admin.banner-edit');
    }
    public function product(){
        return view('admin.product');
    }
    public function productCreate(){
        return view('admin.product-create');
    }
    public function productEdit(){
        return view('admin.product-edit');
    }
    public function user(){
        return view('admin.user');
    }    public function userCreate(){
        return view('admin.user-create');
    }
    public function userEdit(){
        return view('admin.user-edit');
    }

}
