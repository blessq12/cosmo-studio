<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Company;
use App\Models\GalleryCategory;
use App\Models\SlugCategory;
use App\Models\Studio;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $company = Company::find(1);
        $company->studios;
        
        return view('front::index',[
            'company' => $company,
            'slugs' => SlugCategory::all()->each( fn ($item) => $item->slugs),
            'banners' => Banner::all()->each( fn ($item) => $item->image ),
            'galleries' => GalleryCategory::all()->each( fn ($item) => $item->images ),
            'studios' => Studio::all()->each( fn ($item) => $item->image )
        ]);
    }
}
