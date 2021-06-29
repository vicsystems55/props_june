<?php

namespace App\Http\Controllers;

use App\Listing;
use App\Category;
use App\Type;
use App\SubType;
use App\User;
use Auth;

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
    }


    public function create_listing(Request $request)
    {
        //


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
