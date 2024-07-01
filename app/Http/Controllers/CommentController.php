<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::id();
        Comment::create($validated);
        return redirect()->back();
    }
}
