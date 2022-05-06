<?php

namespace App\Http\Controllers\Client;

use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $posts = Posts::paginate(10);    
        return view('client.index', compact('categories', 'posts'));
    }   

    public function getByCategory($category_id) {
        $categories = Categories::all();
        $nameCategory = Categories::find($category_id)->name;
        $posts = Posts::where('category_id', $category_id)->paginate(10);
        return view('client.index', compact('posts','categories','nameCategory'));
    }

    public function getByPost($post_id) {
        $post = Posts::find($post_id);
        return view('client.post-detail', compact('post'));
    }
}

?>
