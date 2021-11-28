<?php

namespace App\Http\Controllers;

use App\Models\animal_image;
use App\Models\Animals;
use App\Models\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AnimalsController extends Controller
{
    public function index()
    {
        return view('buscador');
    }
    public function create()
    {
        return view('animal.create');
    }

    public function store(Request $request)
    {
        $animal = Animals::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'type' => $request->input('type'),
        ]);
        $files = $request->file('fileImage');

        if ($request->hasFile('fileImage')) {
            foreach ($files as $file) {
                $extention = $file->getClientOriginalExtension();
                $extentionname = $file->getClientOriginalName();
                $filename = $extentionname. time() . '.' . $extention;
                $file->move('uploads/animal/', $filename);
                $image = image::create([
                    'image' => $filename,
                ]);
                animal_image::create([
                    'image_id' => $image->id,
                    'animals_id' => $animal->id,
                ]);
            }
        }
        return redirect('Animals')->with('status', 'Se ha creado correctamente');
    }
}
