@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="dashboard_navigationbar dn db-992">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                <ul id="myDropdown" class="dropdown-content">
                    <li><a href="page-dashboard.html"><span class="flaticon-layers"></span> Dashboard</a></li>
                    <li><a href="page-message.html"><span class="flaticon-envelope"></span> Message</a></li>
                    <li><a href="page-my-properties.html"><span class="flaticon-home"></span> My Properties</a></li>
                    <li><a href="page-my-favorites.html"><span class="flaticon-heart"></span> My Favorites</a></li>
                    <li><a href="page-my-savesearch.html"><span class="flaticon-magnifying-glass"></span> Saved Search</a></li>
                    <li><a href="page-my-review.html"><span class="flaticon-chat"></span> My Reviews</a></li>
                    <li><a href="page-my-packages.html"><span class="flaticon-box"></span> My Package</a></li>
                    <li><a href="page-my-profile.html"><span class="flaticon-user"></span> My Profile</a></li>
                    <li class="active"><a href="page-add-new-property.html"><span class="flaticon-filter-results-button"></span> Add New Listing</a></li>
                    <li><a href="page-login.html"><span class="flaticon-logout"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-12 mb10">
        <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Detailed Information</h2>
            <p class="h4">STAGE 3/5</p>
         
          
        </div>
    </div>
    <div class="col-lg-12">
       
        <div class="my_dashboard_review mt30">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb30"></h4>
                </div>
              
    
 
                <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                        <label for="garages">Garages</label>
                        <select  class="selectpicker" data-width="100%">

                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="garagesSize">Garages Size</label>
                        <input type="text" class="form-control" id="garagesSize">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="yearBuild">Year Built</label>
                        <input type="text" class="form-control" id="yearBuild">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <label for="videoUrl">Video URL</label>
                        <input type="text" class="form-control" id="videoUrl">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="my_profile_setting_input form-group">
                        <label for="virtualTour">360° Virtual Tour</label>
                        <input type="text" class="form-control" id="virtualTour">
                    </div>
                </div>
                <div class="col-xl-12">
                    <h4>Amenities</h4>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <ul class="ui_kit_checkbox selectable-list">
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Lawn</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">Swimming Pool</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">Barbeque</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">Microwave</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <ul class="ui_kit_checkbox selectable-list">
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">TV Cable</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">Dryer</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label" for="customCheck9">Washer</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label" for="customCheck10">Gym</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
                    <ul class="ui_kit_checkbox selectable-list">
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                <label class="custom-control-label" for="customCheck11">Refrigerator</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                <label class="custom-control-label" for="customCheck12">WiFi</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                <label class="custom-control-label" for="customCheck13">Laundry</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                <label class="custom-control-label" for="customCheck14">Sauna</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                <label class="custom-control-label" for="customCheck15">Window Coverings</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-12">
                    <div class="my_profile_setting_input">
                        <a href="{{route('agents.create_listing2')}}" class="btn btn1 float-left">Back</a>
                        <a href="{{route('agents.create_listing4')}}" class="btn btn2 float-right">Next</a>
                    </div>
                </div>
            </div>
        </div>
     
    </div>
</div>

@endsection

