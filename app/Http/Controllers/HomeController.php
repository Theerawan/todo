<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function show($id){

    }

    public function create(){
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];

        return view('create', $data);
    }

    // public function store(){

    // }

    // public function update($id){

    // }

    // public function delate($id){

    // }

    // public function contact(){
    //     return view('contact');
    // }

    // public function about(){
    //     return view('about');
    // }

    public function login(){
        return view('login');
    }
}
