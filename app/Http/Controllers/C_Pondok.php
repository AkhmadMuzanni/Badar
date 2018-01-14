<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class C_Pondok extends Controller
{
    public function selectSantri(){
    	$santri = DB::select('select * from santri');
    	return view('santri',['santri'=>$santri]);
    }
    public function selectUstadz(){
    	$ustadz = DB::select('select * from ustadz');
    	$kolomUstadz = DB::select('SELECT column_name FROM information_schema.columns WHERE table_name = "ustadz"');
    	return view('ustadz',['ustadz'=>$ustadz, 'kolomUstadz'=>$kolomUstadz]);
    }

}
