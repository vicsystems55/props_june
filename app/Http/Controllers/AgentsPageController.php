<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

// use App\SubscriptionPlan;

// use App\Listing;

// use App\Message;

// use App\Category;

// use App\Type;

// use App\ListingSubType;

// use App\Notification;

// use App\ListingImage;

// use App\MemberSubscription;

use Carbon\Carbon;

use Auth;


class AgentsPageController extends Controller
{

    public function home()
    {
        //

        return view('agents.home');
    }

    public function messages()
    {
        //

        return view('agents.messages');
    }

    public function create_listing()
    {
        //

        return view('agents.create_listing');
    }

    public function my_listings()
    {
        //

        return view('agents.my_listings');
    }

    public function published_listings()
    {
        //

        return view('agents.published_listings');
    }

    public function unpublished_listings()
    {
        //

        return view('agents.unpublished_listings');
    }

    public function trashed_listings()
    {
        //

        return view('agents.trashed_listings');
    }

    public function my_favourites()
    {
        //

        return view('agents.my_favourites');
    }

    public function reviews()
    {
        //

        return view('agents.reviews');
    }

    public function my_reviews()
    {
        //

        return view('agents.my_reviews');
    }

    public function visitors_reviews()
    {
        //

        return view('agents.visitors_reviews');
    }

    public function my_plan()
    {
        //

        return view('agents.my_plan');
    }

    public function my_profile()
    {
        //

        return view('agents.my_profile');
    }



    public function store(Request $request)
    {
        //

    }


}
