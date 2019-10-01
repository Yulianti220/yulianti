<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$listGaleri=Galeri::all(); //select * from galeri

    	//blade
    	return view('galeri.index',compact('listGaleri'));
    	//return view( view: 'galeri.index')->with('data',$listGaleri);
    }

    public function show($id){
    	//Eloquent
    	//$Galeri=Galeri::where('id',$id)->first(); // select * from galeri where id=$id limit I
    	$Galeri=Galeri::find($id);

    	return view('galeri.show',compact('Galeri'));
    }
}
