<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view('survey');
    }

    public function submit(Request $request)
    {
        //$request->all();
        //Get all request variables
        //Send variables to filter function to handle and throw exceptions from there
        //on success send all filtered content to store function to save in the db
    }

    private function _filter(...$params)
    {
        //this function takes any number of parameter and assumes that they are an array
        //here we should check the content sent from the front end
        //validate and throw exceptions if needed
    }

    private function _store(Request $request)
    {
        //here we should handle the storing to the db if and only if we did not have errors in
        //the previous steps

        return Survey::create($request->all());
    }
}
