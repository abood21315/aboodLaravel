<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{

function index() {
    return view('Personal.index');
  }

  function contact() {
    return view('Personal.contact');
  }

  function projects() {
   return view('Personal.projects');
  }
  function about() {
    return view('Personal.about');
   }

}