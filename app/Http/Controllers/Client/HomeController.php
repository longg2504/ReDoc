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
        $posts = Posts::paginate(5);
        return view('client.index', compact('categories', 'posts'));
    }

    public function getByCategory($category_id) {
        $posts = Posts::where('category_id', $category_id)->paginate(5);
        return view('client.index', compact('posts'));
    }

    public function getByPost($post_id) {
        $post = Posts::find($post_id);
        return view('client.post', compact('post'));
    }
}

?>
