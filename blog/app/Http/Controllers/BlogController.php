<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        return View("blog/Home");
    }

    function show($id){
        $users=["iqbalcakep","iqbalganteng","iqbalprogrammer"];
       return View("blog/Single",["id" => $id,"users"=>$users]);
    }
}
