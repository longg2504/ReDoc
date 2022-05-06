<?php

namespace App\Http\Controllers\Client;

use App\Models\Categories;
use App\Models\Disease_symptoms;
use App\Models\Symptoms;
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
        $categories = Categories::all();
        $posts = Posts::where('category_id', $category_id)->paginate(5);
        return view('client.index', compact('posts','categories'));
    }

    public function getByPost($post_id) {
        $post = Posts::find($post_id);
        return view('client.post', compact('post'));
    }
}

?>
