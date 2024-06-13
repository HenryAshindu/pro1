<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        $posts=Post::all();
        return view('Posts.homepost', compact('posts'));
    }

    public function create(){
        return view('Posts.createpost');
    }

    public function store(Request $request){
        $data = new Post;

        $data->title = $request->title;
        $data->content = $request->content;

        $image=$request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('pictures', $imagename);
            $data->image = $imagename;

            $data->save();
        }
        return redirect(route('post.index'));
    }

    public function edit($id){
        $data= Post::find($id);
        return view('Posts.editpost', compact('data'));
    }

    public function update(Request $request, $id){
       $data = Post::find($id);

       $data->title = $request->title;
       $data->content = $request->content;

       $image=$request->image;
       if($image){
           $imagename = time().'.'.$image->getClientOriginalExtension();
           $request->image->move('pictures', $imagename);
           $data->image = $imagename;
       }

       $data->update();
       return redirect(route('post.index'));
    }

    public function delete($id){
        $data = Post::find($id);

        $data->delete();
        return redirect(route('post.index'));
    }
}
