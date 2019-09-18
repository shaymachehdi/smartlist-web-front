<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class LangController extends Controller
{
    public function index($lang)
    {
       Session::put('setlocale', $lang);
       
    }
}
