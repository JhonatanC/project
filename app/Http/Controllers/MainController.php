<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Entities\MainMenu;
use App\Entities\SubMenuMain;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function links()
    {
        $links = MainMenu::orderBy('level','ASC')->get();
        return $links;
    }

    public function subLinks(){
        $subLinks = SubMenuMain::orderBy('name','ASC')->get();
        return $subLinks;
    }
}
