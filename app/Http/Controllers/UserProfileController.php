<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class UserProfileController extends Controller
{
    //

    public function update_password(Request $request)       
    {
        # code...

        $user_id = Auth::user()->id;

        $request->validate([
            'new_password' => 'required',
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);

        $user_data = User::where('id', $user_id)->update([
            
        ]);









    }


    public function update_avatar(Request $request)       
    {
        # code...


        
    }
}
