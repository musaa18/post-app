<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

//   public function index($id)
//   {
////       $data = DB::table('laravel')->where('id', $id)->first();
//       $data = Post::find($id);
//       return view( 'Post.index', [
//           'post' => $data
//           ]
//       );
//   }
}
