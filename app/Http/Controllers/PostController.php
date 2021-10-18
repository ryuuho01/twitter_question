<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// use App\Models\Client;

class PostController extends Controller
{
    public function index()
  {
    // $items = Post::all();
    $namedata = new Post;
    $items = $namedata->getData();
    return $items;
    // return response()->json([
    //   'data' => $items
    // ], 200);
  }
  public function store(Request $request)
  {
    $item = Post::create($request->all());

    return response()->json([
      'data' => $item
    ], 201);
  }
  public function show(Post $post)
  {
    $item = Post::find($post);
    if ($item) {
      return response()->json([
        'data' => $item
      ], 200);
    } else {
      return response()->json([
        'message' => 'Not found',
      ], 404);
    }
  }
  public function update(Request $request, Post $post)
  {
    $update = [
      'post' => $request->post,
    ];
    $item = Post::where('id', $post->id)->update($update);
    if ($item) {
      return response()->json([
        'message' => 'Updated successfully',
      ], 200);
    } else {
      return response()->json([
        'message' => 'Not found',
      ], 404);
    }
  }
  public function destroy(Post $post)
  {
    $item = Post::where('id', $post->id)->delete();
    if ($item) {
      return response()->json([
        'message' => 'Deleted successfully',
      ], 200);
    } else {
      return response()->json([
        'message' => 'Not found',
      ], 404);
    }
  }
}
