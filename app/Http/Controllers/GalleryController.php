<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('crm::galleries.index',[
            'categories' => GalleryCategory::all()->each(fn($category)=>$category->images)
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
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'uri' => 'required',
        ],[
            'name.required' => 'Название обязательно',
            'uri.required' => 'URI обязательно'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }
        
        $gallery = new GalleryCategory($validator->validated());
        if (!$gallery->save()){
            return back()->withErrors(['create' => 'Не удалось создать галерею']);
        }
        return back()->with('success', 'Галерея создана');
    }

    /**
     * Store an image for existing gallery.
     */
    public function storeImage(Request $request){

        $validator = Validator::make($request->all(),[
            'image' => 'image',
            'galleryId' => 'required'
        ],[
            'image.image' => 'Файл не является изображением',
            'galleryId.required' => 'Не найдена галлерея'
        ]);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        // get category instanse for image upload
        $gallery = GalleryCategory::findOrFail($validator->validate()['galleryId']);
        // create temprorary row in images table to get uniq identificator of it
        $tempImage = $gallery->images()->create(['path' => '/assets/asdasd/asdasd.jog']);
        // get id of latest image rows
        $imgId = $gallery->images()->latest()->first()->id;
        // create uniq image name 
        $imageName = $gallery->uri .'-'. $imgId .'.'. $request->file('image')->getClientOriginalExtension();
        // store image file in storage 
        $path = $request->file('image')->storeAs('/public/uploads/galleries', $imageName);
        // update temrorary row and set correct path to link file
        $gallery->images()->latest()->first()->update(['path' => '/uploads/galleries/' . $imageName]);

        return back()->with('success', 'Успешно загружено');
    }

    /**
     * Destroy single image row.
     */
    public function destroyImage(string $galleryId, string $id){
        $gallery = GalleryCategory::findOrFail($galleryId);
        $gallery->images()->find($id)->delete();

        return back()->with('success', 'Фотография успешно удалена');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = GalleryCategory::findOrFail($id);

        return view('crm::galleries.gallery',[
            'gallery' => $category,
            'images' => $category->images
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
        $gallery = GalleryCategory::findOrFail($id);

        if ($gallery->images){
            $gallery->images()->delete();
        }
        
        $gallery->delete();

        return back()->with('success', 'Галерея удалена');
    }
}
