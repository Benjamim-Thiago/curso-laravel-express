<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	$dados=[
    	0=>'2011-pagani-huayra-c9-39_600x0w.jpg',
    	1=>'pagani-zonda-cinque-roadster-01.jpg',
    	2=>'Ferrari_458_Italia_--_05-18-2011.jpg',
    	3=>'ferrari_f12_berlinetta__imagem_6.jpg',
    	];
    	return view('paginas.home',compact('dados'));
    }
}
