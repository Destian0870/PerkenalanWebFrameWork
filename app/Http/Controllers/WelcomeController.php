<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
 return 'Hello World';
}

    public function home() {
return 'Selamat Datang';
}

    public function about() {
return 'NIM: 244107020203 - Nama: Destian';
}

    public function article($id) {
return 'Halaman Artikel dengan ID ' . $id;
}

public function greeting(){
 return view('blog.hello')
 ->with('name','Destian')
 ->with('occupation','Student');
 }

}
