<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public $company;
    public function __construct(){
        $this->company = Company::first();
    }
    public function index(){

        $company = $this->company;
        $studios = $company->studios->each(function($item){
            $item->workHours;
        });

        return view('front.index',[
            'company' => $company
        ]);
    }
}
