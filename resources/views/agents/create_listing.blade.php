@extends('layouts.dashboard')


@section('content')
<div class="row">
    
    <div class="col-lg-12 mb10">
        <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Add New Property</h2>
            <p class="h4">STAGE 1/5</p>

       

           
          
        </div>
    </div>
    <div class="col-lg-12">
        <div class="my_dashboard_review">
            <form action="{{route('create_listing_step1')}}" method="post">
                @csrf
            <div class="row">
                <form action="{{route('create_listing_step1')}}" method="post">
                    @csrf
                <div class="col-lg-12">
                    <h4 class="mb30">Create Listing</h4>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{$error}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        @endforeach
                    @endif
              
                    <div class="my_profile_setting_input form-group">
                        <label for="propertyTitle">Property Title</label>
                        <input name="title" type="text" value="{{ old('title') }}" class="form-control" id="propertyTitle">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="my_profile_setting_textarea">
                        <label for="propertyDescription">Description</label>
                        <textarea name="description" value="{{ old('description') }}" class="form-control" id="propertyDescription" rows="7"></textarea>
                    </div>
                </div>
          
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExamplePrice">Price <span>&#8358;</span></label>
                        <input type="number" name="price" value="{{ old('price') }}" class="form-control" id="formGroupExamplePrice">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExamplePrice">Discount ( % ) </label>
                        <input type="number" name="discount"  value="{{ old('discount') }}" class="form-control" id="formGroupExamplePrice">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExampleArea">Total Area m<sup>2</sup></label>
                        <input type="number" name="total_area" value="{{ old('total_area') }}" class="form-control" id="formGroupExampleArea">
                    </div>
                </div>

                                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExampleArea">Covered Area m<sup>2</sup></label>
                        <input type="number" name="covered_area" value="{{ old('covered_area') }}" class="form-control" id="formGroupExampleArea">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExampleArea">Bedrooms</label>
                        <input type="number" name="bedrooms"  value="{{ old('bedrooms') }}" class="form-control" id="formGroupExampleArea">
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExampleArea">Toilets</label>
                        <input type="number" name="toilets" value="{{ old('toilets') }}" class="form-control" id="formGroupExampleArea">
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExampleArea">Bathrooms</label>
                        <input type="number" name="bathrooms" value="{{ old('bathrooms') }}" class="form-control" id="formGroupExampleArea">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExampleArea">Parking</label>
                        <input type="number" name="parking" value="{{ old('parking') }}" class="form-control" id="formGroupExampleArea">
                    </div>
                </div>

                <div class="col-xl-12">
                    <selector-component appurl="{{config('app.url')}}"></selector-component>
                    <div class="my_profile_setting_input pt-1">
                      
                        <button type="submit" class="btn btn2 mt-1  float-right">Next</button>
                    </div>
                </div>
              </form>
            </div>
        </div>
       
    </div>
</div>


@endsection





