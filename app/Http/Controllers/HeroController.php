<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }


    public function index()
    {
        $hero = Hero::orderby('names', 'asc')->get();
        return view($hero);
    }

    

        public function create()
         {
             
             
               $emergencies->subject = Input::get('subject');
               $emergencies->description = Input::get('description');
         
               $emergencies->save();

            return Redirect::back();



    }





}
