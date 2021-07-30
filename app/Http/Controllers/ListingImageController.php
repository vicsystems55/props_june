<?php

namespace App\Http\Controllers;

use App\ListingImage;
use Illuminate\Http\Request;

use Session;

class ListingImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_images()
    {
        //


        return 1234;
    }


    public function upload_image(Request $request)
    {

        $request->validate([
            // 'image' => 'required',
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:50000',

            
        ]);

        $listing_code = Session::get('listing_code');

        $user_id = Auth::user()->id;

        $listing = Listing::where('listing_code', $listing_code)->where('user_id', $user_id )->first();

        $image = $request->file('file');

        $new_name = rand().".".$image->getClientOriginalExtension();

        $file = $image->move(public_path('listing_images'), $new_name);

        try {
            //code...
            $image = ListingImage::create([
                'listing_id' => $listing->id,
                'img_path' => $new_name,
               
            ]);

            return $image;
        } catch (\Throwable $th) {
            //throw $th;

            return $th;
        }



        
        

    }


}
