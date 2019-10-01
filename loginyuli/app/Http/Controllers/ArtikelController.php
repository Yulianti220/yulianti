<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$listArtikel=Artikel::all(); //select * from artikel

    	//blade
    	return view('artikel.index',compact('listArtikel'));
    	//return view( view: 'artikel.index')->with('data',$listArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$Artikel=Artikel::where('id',$id)->first(); // select * from artikel where id=$id limit I
    	$Artikel=Artikel::find($id);

    	return view('artikel.show',compact('Artikel'));
    }
}
