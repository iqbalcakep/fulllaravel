<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Blog;

class BlogController extends Controller
{
    function index(){
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
}
