@extends('layouts.dashboard')

@section('content')
<div class="row">

    

        <div class="col-lg-12 mb10">
                <div class="breadcrumb_content style2">
                    <h2 class="breadcrumb_title">Howdy, {{Auth::user()->name}}</h2>
                    <p>We are glad to see you again!</p>

                 
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one">
                    <div class="icon"><span class="flaticon-home"></span></div>
                    <div class="detais">
                        <div class="timer">0</div>
                        <p>Listings</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one style2">
                    <div class="icon"><span class="flaticon-view"></span></div>
                    <div class="detais">
                        <div class="timer">0</div>
                        <p>Views</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one style3">
                    <div class="icon"><span class="flaticon-chat"></span></div>
                    <div class="detais">
                        <div class="timer">0</div>
                        <p>Reviews</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one style4">
                    <div class="icon"><span class="flaticon-heart"></span></div>
                    <div class="detais">
                        <div class="timer">0</div>
                        <p>Favorites</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="application_statics">
                    <h4>View Statistics</h4>
                   <h4>No data yet...</h4>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="recent_job_activity">
                    <h4 class="title">Recent Activities</h4>

                    <div class="grid">
                        <ul>
                            <li class="list-inline-item"><div class="icon"><span class="flaticon-home"></span></div></li>
                            <li class="list-inline-item"><p>Nothing yet...</p></li>
                        </ul>
                    </div>
                    
                  
                </div>
            </div>


</div>

@endsection

