<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id){
        return '<a href="https://www.educastudio.com/news/' .$id.' ">https://www.educastudio.com/news/'.$id.'</a>';
    }
}
