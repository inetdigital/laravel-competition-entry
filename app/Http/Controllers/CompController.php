<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comp;

use App\Http\Requests\CompFormRequest;

class CompController extends Controller
{
  public function create()
  {
    return view('welcome');
  }
  
  public function store(CompFormRequest $request)
  {

      $comp = new Comp;

      $comp->name = $request->get('name');
      $comp->email = $request->get('email');

      $comp->save();

      return \Redirect::route('home')->with('message_success', 'Your entry has been submitted, thank you!');
  }
  
}
