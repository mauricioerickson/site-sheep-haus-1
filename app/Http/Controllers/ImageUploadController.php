<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class ImageUploadController extends Controller
{
    public function store(Request $request)

    {
        $id = $request->property_id;

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        
        $gallery = array(
            'property_id' => $id,
            'src' => $imageName
        );

        Gallery::create($gallery);

        return redirect()->route('property.edit', [$id]);
    }

    public function delete(Request $request) {

        Gallery::where('id', '=', $request->id)->delete();
        return redirect()->route('property.edit', [$request->property_id]);
    }
}
