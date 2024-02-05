<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomepageController extends Controller
{
    public function index(Request $request, Response $response){
        return view("pages.homepage.index");
    }
}
