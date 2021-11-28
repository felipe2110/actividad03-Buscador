<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use Illuminate\Http\Request;

class buscarController extends Controller
{
    public function getAnimalsSearchValue(Request $request)
    {
        $type = $request->get('search');
        if (strlen($type) >= 3) {
            $animals  = Animals::where('name', 'LIKE', '%' . $type . '%')
                ->orwhere('description', 'LIKE', '%' . $type . '%')
                ->orwhere('type', 'LIKE', '%' . $type . '%') ->get();
            $animals->load('images');
        } elseif (strlen($type) == 0) {
            $animals  = Animals::with('images')->get();
        }
        return view('get.animals_for_type', compact('animals'));
    }
}
