<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
   public function store(){
    return view('galerie');
   }
}
