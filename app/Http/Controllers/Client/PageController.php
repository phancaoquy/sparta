<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('client.home');
    }
    public function men()
    {
        return view('client.collection');
    }
    public function women()
    {
        return view('client.collection');
    }
    public function product()
    {
        return view('client.product');
    }
    public function blog()
    {
        return view('client.blog');
    }
    public function about()
    {
        return view('client.about');
    }
}
