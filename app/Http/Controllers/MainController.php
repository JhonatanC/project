<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Entities\MainMenu;

class MainController extends Controller
{
    public function getMain(){
        //$menu = MainMenu::all();

        //return view('layout',compact($menu));
    }
}
