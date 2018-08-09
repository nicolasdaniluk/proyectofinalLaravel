<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class miControlador extends Controller
{
    //
    public function signin(){;
        return view('signin');
    }

    public function login(){;
        return view('login');
    }

    public function faq(){;
        return view('faq');
    }

    public function index(){
        return view('index');
    }

    public function contador(){
        $resp =User::count();
        return response()->json($resp);
    }
}
