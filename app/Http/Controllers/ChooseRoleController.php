<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ChooseRoleController extends Controller
{
    //

    public function index()
    {
        if (Auth::user()->role =='admin') {
            return redirect('/admin');
        }

        elseif (Auth::user()->role =='agency') {
            return redirect('/agency/home');
        }

        elseif (Auth::user()->role =='agent') {
            return redirect('/agents');
        }

        elseif (Auth::user()->role =='vendor') {
            return redirect('/vendor/home');
        }

        else{
            abort(403);
        }
    }

}
