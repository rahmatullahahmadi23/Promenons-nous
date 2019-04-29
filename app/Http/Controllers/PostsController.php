<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Storage;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @reback slash
     */
    public function index(){
        $posts = Post::orderBy('created_at','asc')->paginate(2);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'auteur'  => 'required',
            'country' => 'required',
            'city' => 'required',
            'postalCode' => 'required',
            'departure' => 'required',
            'arrive' => 'required',
            'cover_image' => 'image|nullable'
        ]);

        if($request->hasfile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload Images
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);


        }else{
            $fileNameToStore = 'noimage.jpg';
        }



        $post = new Post();
        $post->title = $request->input('title');
        $post->auteur = $request->input('auteur');
        $post->country = $request->input('country');
        $post->city = $request->input('city');
        $post->postalCode = $request->input('postalCode');
        $post->departure = $request->input('departure');
        $post->arrive = $request->input('arrive');
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'title' => 'required',
            'auteur'  => 'required',
            'country'  => 'required',
            'city'  => 'required',
            'postalCode'  => 'required',
            'departure'  => 'required',
            'arrive'  => 'required'
        ]);

         // Handle File Upload
         if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->auteur = $request->input('auteur');
        $post->country = $request->input('country');
        $post->city = $request->input('city');
        $post->postalCode = $request->input('postalCode');
        $post->departure = $request->input('departure');
        $post->arrive = $request->input('arrive');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();
        return redirect('/posts')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');

        if($post->cover_image !='noimage.jpg'){
            // DELETE IMAGE
            storage::delete('public/cover_images/'.$post->cover_image);
        }


    }
}
