<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrmController extends Controller
{
    public function index(){
        return redirect()->route('crm.companies.index');
    }
}
