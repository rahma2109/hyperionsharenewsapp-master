<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryApiController extends Controller
{
    public function index(){
        $categories = Category::all();
        return CategoryResource::collection( $categories );
    }

    public function posts( $id ){
        $category = Category::find($id);
        $posts = $category->posts;
        return PostResource::collection( $posts );
    }
}
