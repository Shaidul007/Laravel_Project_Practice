<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();
        return view('pages.index',compact('posts'));
    }
    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string',
            'title' => 'nullable|string',
            'birthdate' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'address' => 'nullable|string',
            'freelance' => 'required|string',
            'language' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        // Image processing
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = 'post_img_'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/images/posts'), $imageName);
        }

        // Post save

        $post = new PersonalInfo();
        $post->name = $request->input('name');
        $post->slug = $request->input('slug');
        $post->title = $request->input('title');
        $post->birthdate = $request->input('birthdate');
        $post->phone = $request->input('phone');
        $post->email = $request->input('email');
        $post->address = $request->input('address');
        $post->freelance = $request->input('freelance');
        $post->language = $request->input('language');
        $post->image = $imageName;

        // dd($post);

        $result = $post->save();

        if($result){
            return back()->with('success', 'Post Created Successfully');
        }else{
            return back()->with('fail', 'Something went wrong');
        }

    }
public function show($id){
        $post= Post::findOrFail($id);
        return view('pages.show',compact('post'));

}

public function edit($id){
    $post= Post::findOrFail($id);
    return view('pages.edit',compact('post'));
}

public function update(Request $request, $id){

    $request->validate([
        'name' => 'required|string',
        'slug' => 'required|string',
        'title' => 'nullable|string',
        'birthdate' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|string',
        'address' => 'nullable|string',
        'freelance' => 'required|string',
        'language' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
    ]);

    // Image processing
    if($request->hasFile('image')){
        $image = $request->file('image');
        $imageName = 'post_img_'.time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('assets/images/posts/'), $imageName);
    }

    $post= Post::findOrFail($id);
    $post->update( [
        'name'=>$request->name,
        'slug'=>$request->slug,
        'title'=>$request->title,
        'birthdate'=>$request->birthdate,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'address'=>$request->address,
        'freelance'=>$request->freelance,
        'language'=>$request->language,
        'image'=>$imageName,

    ] );

    return redirect()->back()->with( 'success', 'Post updated successfully' );

}

public function destroy($id){
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect()->back()->with('success', 'Post deleted successfully');
}

}
