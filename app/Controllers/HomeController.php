<?php

namespace app\Controllers;


class HomeController extends Controller
{

    public function index()
    {
        return $this->view('home',[
           'title' => 'Home',
           'description' => 'esta es la pagina home'
        ]);
    }

   

}

