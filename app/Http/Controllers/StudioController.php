<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Nette\Utils\Random;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('crm::studios.index',[
            'studios' => Studio::all()
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
        $studio = new Studio([
            'company_id' => 1,
            'uri' => Random::generate(),
            'phone' => $request->phone,
            'address' => $request->address,
            'navYandex' => $request->navYandex
        ]);

        if (!$studio->save()){
            return back()->with('danger', 'Не удалось сохдать студию.');
        }
        
        $imageName = 'studio-' . Studio::latest()->first()->id . '.' . $request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('public/uploads/studios', $imageName);

        $studio->image()->create(['path' => '/uploads/studios/' . $imageName]);
        
        return back()->with('success', 'Студия создана');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        return view('crm::studios.show',[
            'studio' => Studio::findOrFail($id)
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
        Studio::findOrFail($id)->delete();
        return back()->with('success', 'Студия удалена');
    }
    /**
     * Store an image for studio instanse
     */
    public function storeImage(Request $request){
        $studio = Studio::findOrFail($request->studioId);

        $image = $studio->image()->create(['path' => 'temprorary']);
        $imageName = 'studio-' . $studio->id . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/public/uploads/studios', $imageName);

        $studio->image()->latest()->first()->update(['path' => '/uploads/studios/' .$imageName]);

        return back()->with('success', 'Фотография загружена');
    }

    public function destroyImage(string $studioId, string $id){
        $studio = Studio::findOrFail($studioId);
        $studio->image()->find($id)->delete();
        return back()->with('success', 'Фотография удалена');
    }
}
