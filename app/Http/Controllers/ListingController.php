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

    public function get_type()
    {
        //
        $types = Type::all();

        return $types;
    }

    public function get_subtype()
    {
        //
        $sub_type = SubType::all();

        return $sub_type;
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
    public function store(Request $request)
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
