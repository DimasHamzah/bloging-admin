<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    public function index(): JsonResponse
    {
        $blogs = Blog::with('categories')->paginate(10);

        return response()->json([
            'error' => false,
            'result' => $blogs
        ]);
    }
}
