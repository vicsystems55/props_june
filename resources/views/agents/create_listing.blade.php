@extends('layouts.dashboard')

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.0.5/cdn.min.js" integrity="sha512-JzpmsnQFnevs64hXB/wyoAruXPo0nkBNuvZwKok/rsfBFUBLZUEssdz2wmq/gP5lohBeM4BNMHvcNkVxx23o/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('content')
<div class="row">
    
    <div class="col-lg-12 mb10">
        <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Add New Property</h2>
            <p class="h4">STAGE 1/5</p>

            <example-component></example-component>

            <a class="badge badge-primary" href="{{route('agents.create_listing')}}">STAGE 1</a>
          
        </div>
    </div>
    <div class="col-lg-12">
        <div class="my_dashboard_review">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb30">Create Listing</h4>
                    <div class="my_profile_setting_input form-group">
                        <label for="propertyTitle">Property Title</label>
                        <input type="text" class="form-control" id="propertyTitle">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="my_profile_setting_textarea">
                        <label for="propertyDescription">Description</label>
                        <textarea class="form-control" id="propertyDescription" rows="7"></textarea>
                    </div>
                </div>
                <example-component></example-component>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExamplePrice">Price</label>
                        <input type="number" class="form-control" id="formGroupExamplePrice">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="formGroupExampleArea">Area</label>
                        <input type="text" class="form-control" id="formGroupExampleArea">
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                        <label>Rooms</label>
                        <select class="selectpicker" data-live-search="true" data-width="100%">
                            <option data-tokens="Status1">1</option>
                            <option data-tokens="Status2">2</option>
                            <option data-tokens="Status3">3</option>
                            <option data-tokens="Status4">4</option>
                            <option data-tokens="Status5">5</option>
                            <option data-tokens="Status6">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="my_profile_setting_input">
                      
                        <a href="{{route('agents.create_listing2')}}" class="btn btn2 float-right">Next</a>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>


@endsection





