<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product1(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a>';
    }

    public function product2(){
       return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a>';
    }

    public function product3(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a>';
     }

     public function product4(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>';
     }

}
