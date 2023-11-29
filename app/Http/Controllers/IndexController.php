<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\SlugCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $company = Company::find(1);
        $company->studios;
        
        return view('front::index',[
            'company' => $company,
            'slugs' => SlugCategory::all()->each( fn ($item) => $item->slugs)
        ]);
    }
}
