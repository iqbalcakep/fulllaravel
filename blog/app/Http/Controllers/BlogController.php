<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    function index(){
        return View("blog/Home");
    }

    function show($id){
        // DB::table('tb_user')->insert([
        //     "username"=>"siapa aja",
        //     "password"=> "123"
        // ]);
        $users=DB::table('tb_user')->get()->where("id",$id);

       return View("blog/Single",["id" => $id,"users"=>$users]);
    }
}
