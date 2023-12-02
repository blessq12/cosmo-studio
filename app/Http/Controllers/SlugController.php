<?php

namespace App\Http\Controllers;

use App\Models\SlugCategory;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class SlugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('crm::slugs.index',[
            'slugs' => SlugCategory::all()->each( fn ($item) => $item->slugs)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slugCategory = new SlugCategory([
            'uri' => Random::generate(),
            'name' => $request->name
        ]);
        if ($slugCategory->save()){
            return back()->with('success', 'Категория создана');
        }
    }

    /**
     * Store a newly created child resource in storage.
     */
    public function storeSlug(Request $request){
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('crm::slugs.category',[
            'category' => SlugCategory::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
