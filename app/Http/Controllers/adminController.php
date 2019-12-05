<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
   public function index(){
   	return view ('admin.pages.dashboard');
   }
   public function hader(){
   	return view('admin.include.hader');
   }
   public function navbar(){
   	return view('admin.include.navbar');
   }

    public function cards(){
   	return view('admin.pages.cards');
   }
   public function bootstrap(){
   	return view('admin.pages.bootstrapElement');
   }
   public function widgets(){
   	return view('admin.pages.widgets');
   }

   public function charts(){
   	return view('admin.pages.charts');
   }

     public function formComponent(){
   	return view('admin.pages.formComponent');
   }

public function formCoustom(){
	return view('admin.pages.formCoustom');
}

public function formSample(){
   return view('admin.pages.formSample');
}

public function formNotification(){
	return view('admin.pages.formNotification');
}

public function login(){
   return view('login');
}



}



