@extends('layouts.dashboard')

@section('content')
<div class="row">

    

        <div class="col-lg-12 mb10">
                <div class="breadcrumb_content style2">
                    <h2 class="breadcrumb_title">Howdy, Ali!</h2>
                    <p>We are glad to see you again!</p>

                    <example-component></example-component>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one">
                    <div class="icon"><span class="flaticon-home"></span></div>
                    <div class="detais">
                        <div class="timer">37</div>
                        <p>All Properties</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one style2">
                    <div class="icon"><span class="flaticon-view"></span></div>
                    <div class="detais">
                        <div class="timer">24</div>
                        <p>Total Views</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one style3">
                    <div class="icon"><span class="flaticon-chat"></span></div>
                    <div class="detais">
                        <div class="timer">12</div>
                        <p>Total Visitor Reviews</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                <div class="ff_one style4">
                    <div class="icon"><span class="flaticon-heart"></span></div>
                    <div class="detais">
                        <div class="timer">18</div>
                        <p>Total Favorites</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="application_statics">
                    <h4>View Statistics</h4>
                    <div class="c_container"></div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="recent_job_activity">
                    <h4 class="title">Recent Activities</h4>
                    <div class="grid">
                        <ul>
                            <li class="list-inline-item"><div class="icon"><span class="flaticon-home"></span></div></li>
                            <li class="list-inline-item"><p>Your listing <strong>Luxury Family Home</strong> has been approved!.</p></li>
                        </ul>
                    </div>
                    <div class="grid">
                        <ul>
                            <li class="list-inline-item"><div class="icon"><span class="flaticon-chat"></span></div></li>
                            <li class="list-inline-item"><p>Kathy Brown left a review  on <strong>Renovated Apartment</strong></p></li>
                        </ul>
                    </div>
                    <div class="grid">
                        <ul>
                            <li class="list-inline-item"><div class="icon"><span class="flaticon-heart"></span></div></li>
                            <li class="list-inline-item"><p>Someone favorites your <strong>Gorgeous Villa Bay View</strong> listing!</p></li>
                        </ul>
                    </div>
                    <div class="grid">
                        <ul>
                            <li class="list-inline-item"><div class="icon"><span class="flaticon-home"></span></div></li>
                            <li class="list-inline-item"><p>Your listing <strong>Luxury Family Home</strong> has been approved!</p></li>
                        </ul>
                    </div>
                    <div class="grid">
                        <ul>
                            <li class="list-inline-item"><div class="icon"><span class="flaticon-chat"></span></div></li>
                            <li class="list-inline-item"><p>Kathy Brown left a review on <strong>Renovated Apartment</strong></p></li>
                        </ul>
                    </div>
                    <div class="grid mb0">
                        <ul class="pb0 mb0 bb_none">
                            <li class="list-inline-item"><div class="icon"><span class="flaticon-heart"></span></div></li>
                            <li class="list-inline-item"><p>Someone favorites your <strong>Gorgeous Villa Bay</strong> View listing!</p></li>
                        </ul>
                    </div>
                </div>
            </div>


</div>

@endsection

