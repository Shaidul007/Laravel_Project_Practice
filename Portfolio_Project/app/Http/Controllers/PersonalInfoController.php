<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function index()
    {
        $data = PersonalInfo::all();
        return view('Backend.pages.Personal_info.index', compact('data'));
    }

    public function create(){

        return view('Backend.pages.Personal_info.create');
    }

    //store data

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'title' => 'nullable|string',
            'birthday' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'address' => 'nullable|string',
            'freelance' => 'required|string',
            'language' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);
    
        if($request->hasFile('image')){
            $image = $request->file('image'); 
            $imageName = 'post_img_'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('database/assets/img/personal_info'), $imageName);
        }
        
        $data = new PersonalInfo();
        $data->name = $request->input('name');
        $data->designation = $request->input('designation');
        $data->title = $request->input('title');
        $data->birthday = $request->input('birthday');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->address = $request->input('address');
        $data->freelance = $request->input('freelance');
        $data->language = $request->input('language');
        $data->image = $imageName;
    
        $result = $data->save();
    
        if ($result) {
            return back()->with('success', 'Data inserted successfully');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
    
    public function show($id)
    {
        $data = PersonalInfo::findOrFail($id);
        return view('Backend.pages.Personal_info.show', compact('data'));
        
    }
    public function edit($id){
        $data = PersonalInfo::findOrFail($id);
        return view('Backend.pages.Personal_info.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'title' => 'nullable|string',
            'birthday' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'address' => 'nullable|string',
            'freelance' => 'required|string',
            'language' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image'); 
            $imageName = 'post_img_'.time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('database/assets/img/personal_info'), $imageName);
        }
        
       $data= PersonalInfo::findOrFail($id);
       $data->update([
           'name' => $request->input('name'),
           'designation' => $request->input('designation'),
           'title' => $request->input('title'),
           'birthday' => $request->input('birthday'),
           'phone' => $request->input('phone'),
           'email' => $request->input('email'),
           'address' => $request->input('address'),
           'freelance' => $request->input('freelance'),
           'language' => $request->input('language'),
           'image' => $imageName ?? $data->image,
       ]);
       return redirect()->back()->with( 'success', 'Post updated successfully' );
    }


    public function destroy($id){
        $data = PersonalInfo::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'Post deleted successfully');
    }
}