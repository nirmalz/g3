<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{

    public function viewForm(){
        return view('register');
    }

    public function createStudent(Request $request){

         $validator = Validator::make($request->all(),array(
            'first_name' => 'required|min:2|alpha',
            'last_name'  => 'required|alpha',
            'email'      => 'required|email',
        ));


        if($validator->fails()){

            return redirect('register')
                ->withErrors($validator)
                ->withInput();

        }


        return 'validation passed';


    }

}
