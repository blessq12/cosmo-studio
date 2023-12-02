<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('crm::banners.index',[
            'banners' => Banner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crm::banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = new Banner([
            'header' => $request->header,
            'subheader' => $request->subheader
        ]);
        
        if (!$banner->save()){
            return back()->withErrors(['save' => 'Не удалось создать баннер']);
        }
        
        $imageName = 'banner-' . Banner::latest()->first()->id . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('public/uploads/banners', $imageName);

        $banner->image()->create(['path' => '/uploads/banners/' . $imageName]);

        return back()->with('success', 'Баннер успешно создан');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        Banner::findOrFail($id)->image()->first()->delete();
        Banner::find($id)->delete();
        return back()->with('success', 'Баннер удален');
    }
}
