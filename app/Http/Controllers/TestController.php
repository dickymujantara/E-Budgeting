<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
    	$getUsername = $_POST['username'];

    	if ($getUsername == "") {
    		echo "Username Anda Tidak ada";
    	}else{
    		echo $getUsername;	
    	}

    	
    }

    public function layout()
    {
        return view('test');
    }
}
