<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Category;
use App\Type;
use App\SubType;
use App\User;
use Carbon\Carbon;
use Auth;

use Session;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_categories()
    {
        //
        $categories = Category::all();

        return $categories;


    }

    public function get_type(Request $request)
    {
        $category = Category::where('id', $request->category_id)->first();

        $category_name = $category->name;

        // return $category_name;

        if ($category_name == 'Rent') {
            # code...
            $types = Type::whereIn('name', ['Flat','House', 'Land', 'Commercial Property', 'Event Center/venue'])->get();

            return $types;
        
        }
        if ($category_name == 'Sale') {
            # code...
            $types = Type::whereIn('name', ['Flat','House', 'Land', 'Commercial Property',])->get();

            return $types;
        }

        if ($category_name == 'Joint Venture') {
            # code...
            $types = Type::whereIn('name', ['Flat','House', 'Land', 'Commercial Property',])->get();

            return $types;
        }

        if ($category_name == 'Short Let') {
            # code...
            $types = Type::whereIn('name', ['Flat','House', 'Land', 'Commercial Property',])->get();

            return $types;
        }
        

    }

    public function get_subtype(Request $request)
    {
        //
        $type = Type::where('id', $request->type_id)->first();

        $type_name = $type->name;

        // return $category_name;

        if ($type_name == 'Flat') {
            # code...
            $sub_types = SubType::whereIn('name', ['Mini Flat','Self Contain'])->get();

            return $sub_types;
        
        }

        if ($type_name == 'House') {
            # code...
            $sub_types = SubType::whereIn('name', ['Detached Bungalow','Detached Duplex', 'Semi Detached Duplex','Semi Detached Bungalow','Terraced Bungalow','Terraced Duplex'])->get();

            return $sub_types;
        
        }

        if ($type_name == 'Land') {
            # code...
            $sub_types = SubType::whereIn('name', ['Commercial Land','Industrial Land', 'Mixed use Land','Residential Land'])->get();

            return $sub_types;
        
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_listings()
    {
        //
      
        $all_users = User::all();

        return $all_users;

 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_listing_step1(Request $request)
    {
        //

        $listing_code = Session::get('listing_code');


        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'bedrooms' => 'required|numeric|min:0|max:10',
            'toilets' => 'required|numeric|min:0|max:10',
            'bathrooms' => 'required|numeric|min:0|max:10',
            'parking' => 'required|numeric|min:0|max:10',
            'total_area' => 'required|numeric|min:100|max:900000000|between:0,99999999.99',
            'covered_area' => 'required|numeric|min:100|max:900000000|between:0,99999999.99',
            'price' => 'required|numeric|min:20000|between:0,99999999.99',
            'discount' => 'required|numeric|min:0|max:90',
        ]);


        // dd($request->all());

        $user_id = Auth::user()->id;



        $listing = Listing::updateOrCreate([
            'listing_code' => $listing_code
        ],[
            'listing_code' => $listing_code,
            'agent_id' => $user_id,
            'title' => $request->title,
            'description' => $request->description,
            'bedrooms' => $request->bedrooms,
            'toilets' => $request->toilets,
            'bathrooms' => $request->bathrooms,
            'parking' => $request->parking,
            'title' => $request->title,
            'total_area' => $request->total_area,
            'covered_area' => $request->covered_area,
            'price' => $request->price,
            'discount' => $request->discount,
            'type_id' => $request->type_id,
            'sub_type_id' => $request->sub_type_id,
            'category_id' => $request->category_id,
            
        ]);





        return redirect()->route('agents.create_listing2');
    }

    public function create_listing_step2(Request $request)
    {
        //

        $listing_code = Session::get('listing_code');

        $request->validate([
            'country' => 'required',
            'state' => 'required',
            'address' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',

        ]);


        // dd($request->all());

        $user_id = Auth::user()->id;

        $listing = Listing::updateOrCreate([
            'listing_code' => $listing_code,
            'agent_id' => $user_id
        ],[

            'country' => $request->country,
            'state' => $request->state,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            
        ]);





        return redirect()->route('agents.create_listing3');
    }


    public function create_listing(Request $request)
    {
        //


    }

    public function edit_listing($listing_code)
    {
        # code...

        session([
            'listing_code' => $listing_code
        ]);

        // $listing = Listing::create([
        //     'listing_code' => Session::get('listing_code'),
        //     'agent_id' => $user_id
        // ]);

        return redirect('/agents/create_listing');



    }

    public function final_publish(Request $request)
    {
        # code...

        $user_id = Auth::user()->id;

        $listing_code = Session::get('listing_code');


        $listing = Listing::where('listing_code', $listing_code)->where('agent_id', $user_id)->first();

        $listing->update([
            'status' => 'live'
        ]);

        Session::forget('listing_code');

        return redirect ('/publish_success');

    }

    public function publish_success()
    {
        # code...

        return view('agents.publish_successful');
        
    }

    



}
