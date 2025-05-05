<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index() {
        return view('materi.index');
    }

    public function home() {
        return view('materi.home');
    }

    public function about() {
        return view('materi.about');
    }

    public function materi() {
        return view('materi.materi');
    }
}
    

