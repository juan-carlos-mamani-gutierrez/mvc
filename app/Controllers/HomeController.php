<?php

namespace app\Controllers;

use app\Models\Contact;


class HomeController extends Controller
{

    public function index()
    {

        $contacModel = new Contact();

        return $this->view('home',[
           'title' => 'Home',
           'description' => 'esta es la pagina home'
        ]);
    }

   

}

