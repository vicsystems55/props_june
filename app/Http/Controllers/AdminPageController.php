<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\User;
use Carbon\Carbon;
use Auth;

class AdminPageController extends Controller
{
    //

    public function home()
    {
        return view('admin.home');
    }

    public function members()
    {

        $members = User::whereIsNot('role', 'admin')->latest()->get();

        return view('admin.members',[
            'members' => $members
        ]);
    }

    public function member()
    {
        return view('admin.member');
    }

    public function listings()
    {
        $listings = Listing::where('status', 'active')->latest()->get();



        return view('admin.listings',[
            'listings' => $listings
        ]);
    }

    public function listing()
    {
        return view('admin.listing');
    }

    public function notifications()
    {

        $user_id = Auth::user()->id;

        $notifications - Notification::where('user_id', $user_id)->latest()->get();


        return view('admin.notifications',[
            'notifications' => $notifications
        ]);
    }

    
}
