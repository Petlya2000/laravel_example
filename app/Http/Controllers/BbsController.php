<?php

namespace App\Http\Controllers;

use App\Models\Bb;
class BbsController extends Controller
{
	public function detail($bb){
	$bb=Bb::find($bb);
	$s=$bb->title."\r\n\r\n";
	$s .=$bb->content."\r\n";
	$s .=$bb->price."rub.\r\n";
	return response($s)->header('Content-Type','text/plain');
	}
   public function index(){
	   $bbs=Bb::latest()->get();
	   $s= "Obyevleniya\r\n\r\n";
	   foreach ($bbs as $bb) {
		   $s .=$bb->title. "\r\n";
		   $s .=$bb->price. "rub. \r\n";
		   $s .="\r\n";
	   }
	   return response($s)->header('Content-Type','text/plain');
   }
}
