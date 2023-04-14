<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mobitel;
class Home extends Controller
{
    public function index()
    {

        return view('home.home');
    }
    public function servis()
    {
        return view('home.servis');
    }
    public function dodaj_mobitel(Request $request)
    {
        $mobitel=new mobitel;
        $mobitel->model=$request->model;
        $mobitel->proizvodjac=$request->proizvodjac;
        $mobitel->ocuvanost=$request->ocuvanost;
        $mobitel->save();

        return view('home.servis');

    }

    Public function apple()
    {
        return view('home.apple');

    }
}

