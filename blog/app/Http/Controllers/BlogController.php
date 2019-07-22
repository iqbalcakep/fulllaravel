<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Blog;

class BlogController extends Controller
{
    function index(){

        //insert
        // $blog = new Blog();
        // $blog->title = "halo malang";
        // $blog->description = "ini text dari malang";
        // $blog->save();

        // $blog = new Blog([
        //     "title" => "halo probolinggo",
        //     "description" => "ini text probolinggo"
        // ]);
        // $blog->save();

        // Blog::create([
        //           "title" => "halo kraksaan",
        //     "description" => "ini text kraksaan"
        // ]);


        //update
        // $blog = Blog::find(3);
        // $blog->title = "halo kraksaan 2";
        // $blog->save();

        // Blog::where("title","halo kraksaan 2")->update([
        //     "title"=>"halo surabaya",
        //     "description"=>"ini text surabaya"
        // ]);

        //delete
        $blog = Blog::find(4);
        $blog->delete();
        // $blog = null;
        if(!$blog)
        abort(404);
        //restore
        
        Blog::withTrashed()->restore();

        $data["blogs"] = Blog::all();
        return View("blog/Home",$data);
    }

    function show($id){
        // DB::table('tb_user')->insert([
        //     "username"=>"siapa aja",
        //     "password"=> "123"
        // ]);
       $data["blogs_detail"]= Blog::where('id',$id)->get();
       return View("blog/Single",$data);
    }

    function edit($id){
        $blogs = Blog::find($id);
        if(!$blogs)
        abort(404);

        // dd($blogs);

        return View("blog/Edit",["blogs"=>$blogs]);
    }

    function proses_edit(Request $r,$id){
        // dd($r->title);
        $data = array(
            "title"=>$r->title,
            "description"=>$r->description
        );
        Blog::where("id",$id)->update(
            $data
        );
        return Redirect('/blog/'.$id);
    }
}
