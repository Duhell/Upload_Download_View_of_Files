<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function landing(){
        return view('pages.landingPage');
    }
    public function uploadPage(){
        return view('pages.uploadPage');
    }
    public function showAllFiles(){
        return view('pages.showFilesPage');
    }
}
