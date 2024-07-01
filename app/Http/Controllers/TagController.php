<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Request $request)
    {
        $search = $request->input('term');
        $tags = Tag::where('name', 'LIKE', "%{$search}%")->get();

        return response()->json($tags);
    }
}
