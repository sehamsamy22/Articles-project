<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;

use Storage;

use App\Http\Requests;

// use Image; //Intervention Image
// use Illuminate\Support\Facades\Storage; //Laravel Filesystem





class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addarticle()
    {

        return view('admin.addarticle');
    }
    public function editarticle($id) {
        $article=Article::find($id);
        
        return view ('admin.editarticle' ,compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $this ->validate($request,[
        //     'title'=>'required|min:5',
        //     'body'=>'required|min:5',
        //     'file[]' => 'image|mimes:jpeg,png,jpg,gif,svg',
        //   'tags' => 'required',
        // ]);   
     
 
        $files = $request->file('file');

    	if(!empty($files)):

    		foreach($files as $file):
               Storage::put($file->getClientOriginalName(), file_get_contents($file));
               $file_name=$file->getClientOriginalName();
               $images[]=$file_name;
                
    		endforeach;

        endif;
      
    $tags = explode(",", $request->tags);
  
     $article= new Article;
       $article->title= request('title');
       $article->body= request('body');
       $article->images= implode(',',$images);
     

    $article->save();
    $article->tag($tags);
 
    














    
    return \Response::json(array('success' => true));
    
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public  function delete($id){
        DB::table('articles')->where('id','=',$id)->delete();
      
        // $articles =Article::all();
        return redirect('/admin/articles');
         
     }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    { $articles=Article::find($id);
        $img_name= time() .'.'. $request->images->getClientOriginalExtension();
        $articles->title= request('title');
        $articles->body= request('body');
        $articles->images= $img_name;
        $articles->save();
        $request->images-> move(public_path('images'),$img_name); 
       return redirect('admin/articles'); 
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
    }
}
