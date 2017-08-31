<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{


  public function index(){

    $message = "This is threads index view.";
      return $message;
  }

  public function create(){

    $message = "This is ThreadsCreate.";
      return $message;
  }

  public function show($id){

    $message = "This is threadsid." . $id ;
      return $message;
  }

}
