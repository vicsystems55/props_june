<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;

use App\ListingImage;

class HomePageController extends Controller
{
    //

    public function index()
    {
        
        return view('front_page.home');
    }

    public function about()
    {
        
        return view('front_page.about');
    }

    public function contact()
    {
        
        return view('front_page.contact');
    }

    public function blog()
    {
        
        return view('front_page.blog');
    }

    public function agent_profile()
    {
        
        return view('front_page.agent_profile');
    }

    public function all_listings()
    {

        

        
        return view('front_page.all_listings');
    }

    public function search_results()
    {

        $listings = Listing::with('users')->with('images')->with('categories')->where('status', 'live')->latest()->get();

        // dd($listings);
        
        return view('front_page.search_results',[
            'listings' => $listings
        ]);
    }

    public function single_listing()
    {
        
        return view('front_page.single_listing');
    }

    public function subscription_plans()
    {
        
        return view('front_page.subscription_plans');
    }

    
}
