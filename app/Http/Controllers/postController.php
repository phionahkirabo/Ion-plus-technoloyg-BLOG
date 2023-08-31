<?php

namespace App\Http\Controllers;
use App\Models\blogpost;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        //return view('student-list');
        $data = blogpost::get();
        //return $data;
        return view('post.allpost',compact('data'));
    }
    public function addposts(){
  return view('post.addpost');
    }
    public function savePost(Request $request){
        // $request->validate([
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'phone'=> 'required',
        //     'addres'=> 'required',

        // ]);
$title =$request->title;
$content =$request->content;
$published_at =$request->published_at;
$postcreated_at =$request->postcreated_at;

$blog = new blogpost();
$blog ->title = $title;
$blog ->content= $content;
$blog ->published_at = $published_at;
$blog ->postcreated_at= $postcreated_at;
$blog ->user_id = auth()->user()->id;
$blog ->save();
return redirect()->back()->with('success','blog Added successfully');
    }
public function editPost($id){
    $data = blogpost::where('id','=',$id)->first();
    // return $data;
    return view('post.editpost',compact('data'));
}
public function updatepost(Request $request,$id){

$title =$request->title;
$content =$request->content;
$published_at =$request->published_at;
$postcreated_at =$request->postcreated_at;
blogpost::where('id','=',$id)->update([
    'title'=> $title,
    'content'=> $content,
    'published_at'=> $published_at,
    'postcreated_at'=> $postcreated_at,
]);
return redirect('/allblogs')->with('success','blog updated successfully');
}
public function delete($id){
blogpost::where('id','=',$id)->delete();
return redirect('/allblogs')->with('success','blog deleted successfully');
}
public function show($id)
{
    $show= blogpost::findOrFail($id); // Assuming you have an "Item" model

    return view('post.show', compact('show'));
}
}

