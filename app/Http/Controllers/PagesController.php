<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;
use App\User;
use App\Role;

class PagesController extends Controller
{
 

  public function index() {
    $articles = DB::table('articles')->get();
    foreach ($articles as $article):
    $images = explode(",",$article->images);
    endforeach;
      $tags=Article::existingTags();
      $articles = Article::paginate(5);
      return view('index',compact('articles','tags','images'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
      
}

public function index_tag($tag) {
    $articless = Article::withAnyTag($tag)->get();
    foreach ($articless as $article):
    $images = explode(",",$article->images);
    endforeach;

    $tags=Article::existingTags();
  $articles = 
  Article::withAnyTag($tag)->paginate(5);
  return view('index',compact('articles','tags','images'))
  ->with('i', (request()->input('page', 1) - 1) * 5);
     
}
public function home() {
    $tags=Article::existingTags();
    $articles = Article::paginate(2);
    return view('index',compact('articles','tags'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
    
}
public function course_page() {
    return view ('index');
}
public function about() {
    return view ('about');
}
public function blog() {
    return view ('blog');
}
public function contact() {
    return view ('contact');
}
public function gallery() {
    return view ('gallery');
}
public function lifestyle() {
    return view ('lifestyle');
}
public function single() {
    return view ('single');
}
public function travels() {
    return view ('travels');
}

public function work() {
    return view ('work');
}
//admin pages
public function users() {
    $users=User::all();
    return view ('admin.users',compact('users'));
}
public function articles() {
    $articles=Article::all();
    return view ('admin.articles' ,compact('articles'));
}
public function delete($id)
{
    $users=  DB::table('users')->where('id','=',$id)->delete();
    return redirect ('/admin/users');
}

public function admin() {
    return view ('admin.admin');
}
public function addrole(Request $request) {
    $user=User::where('email',$request['email'])->first();
   
    $user->roles()->detach();
    if($request['user'])
    {
        $user->roles()->attach(Role::where('name', 'user')->first());
    }
    if($request['admin'])
    {
        $user->roles()->attach(Role::where('name', 'admin')->first());
    }
    return redirect()->back();
}

}
