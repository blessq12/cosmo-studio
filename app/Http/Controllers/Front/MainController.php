<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\SlugCategory;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $company;
    public function __construct(){
        $this->company = Company::first();
    }
    public function index(){
        
        // company with studios
        $company = $this->company;
        $studios = $company->studios->each(function($item){
            $item->workHours;
        });

        // slug categories with slugs
        $slugCategories = SlugCategory::all();
        $slugs = $slugCategories->each(function($category){
            $category->slugs;
        });

        return view('front.index',[
            'company' => $company,
            'slugs' => $slugs
        ]);
    }
}
