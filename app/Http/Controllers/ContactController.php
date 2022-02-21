<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        //return'Selamat datang di halaman contact us';
        return '   Selamat datang di halaman Contact-us <br> <a href="https://www.educastudio.com/contact-us">   https://www.educastudio.com/contact-us</a>';

    }
}
