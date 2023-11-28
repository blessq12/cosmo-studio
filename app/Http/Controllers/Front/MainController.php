<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\SlugCategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('front::index');
    }
}
