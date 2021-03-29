<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\tag;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::all();
        $data=[
            'post'=>$post
        ];

        return view('admin.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $tags=tag::all();
            $data=[
                'tags'=>$tags
            ];
        return view('admin.post.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $iduser= Auth::id();
        // dd($data,$iduser);
        
        $newPost=new Post();
        $newPost->user_id=$iduser;
        $newPost->slug=Str::slug($data['title']);
        $newPost->fill($data);
        if(array_key_exists('img',$data)){
            $cover_path=Storage::put('post_covers',$data['img']);
            $data['cover']=$cover_path;
            $newPost->cover=$data['cover'];
        }
        $newPost->save();
         if(array_key_exists('tags',$data)){
         $newPost->tags()->sync($data['tags']);
        }
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $check=Post::find($id);
        $data=[
            'post'=>$check
        ];

        return view('admin.post.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data=[
            'post'=>$post
        ];
        return view('admin.post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {   
             
        $data=$request->all();
        
       if($post->title!=$data['title']){
           $slug=Str::slug($data['title']);
            $data['slug']=$slug;
       } 
        
    
       if(array_key_exists('img',$data)){
        $cover_path=Storage::put('post_covers',$data['img']);
        $data['cover']=$cover_path;
       }
       
       
        $post->update($data);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
