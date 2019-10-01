<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$listPengumuman=Pengumuman::all(); //select * from pengumuman

    	//blade
    	return view('pengumuman.index',compact('listPengumuman'));
    	//return view( view: 'pengumuman.index')->with('data',$listPengumuman);
    }

    public function show($id){
    	//Eloquent
    	//$Pengumuman=Pengumuman::where('id',$id)->first(); // select * from pengumuman where id=$id limit I
    	$Pengumuman=Pengumuman::find($id);

    	return view('pengumuman.show',compact('Pengumuman'));
    }
}
