<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

// use App\SubscriptionPlan;

use App\Listing;

// use App\Message;

// use App\Category;

// use App\Type;

// use App\ListingSubType;

// use App\Notification;

// use App\ListingImage;

// use App\MemberSubscription;

use Carbon\Carbon;

use Auth;

use Session;


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

        
        $user_id = Auth::user()->id;

        $listing_code = Session::get('listing_code');


        $listing = Listing::where('listing_code', $listing_code)->where('agent_id', $user_id)->first();

        // dd($user_id);

        // dd($listing);

        if ($listing) {
            # code...

            // dd($listing);

            // Session::forget('listing_code');

            // dd(Session::get('listing_code'));
            
        }else{

           session([
                'listing_code' => rand(11100,99999)
            ]);

            $listing = Listing::create([
                'listing_code' => Session::get('listing_code'),
                'agent_id' => $user_id
            ]);

            // dd($vehicle_listing);

        

        }

        

        return view('agents.create_listing',[
            'listing' => $listing
        ]);
    }

    public function create_listing2()
    {
        //

        $user_id = Auth::user()->id;

        $listing_code = Session::get('listing_code');


        $listing = Listing::where('listing_code', $listing_code)->where('agent_id', $user_id)->first();


        return view('agents.create_listing2',[
            'listing_code' => $listing_code,
            'listing' => $listing
        ]);
    }

    public function create_listing3()
    {
        //

        return view('agents.create_listing3');
    }

    public function create_listing4()
    {
        //

        return view('agents.create_listing4');
    }

    public function create_listing5()
    {
        //

        return view('agents.create_listing5');
    }

    public function my_listings()
    {
        //
        $user_id = Auth::user()->id;

        $my_listings = Listing::with('images')->where('agent_id', $user_id)->where('status','live')->latest()->get();

        // dd($my_listings);

        return view('agents.my_listings',[
            'listings' => $my_listings
        ]);
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
