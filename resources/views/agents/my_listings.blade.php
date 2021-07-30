@extends('layouts.dashboard')

@section('content')
<div class="col-lg-4 col-xl-4 mb10">
    <div class="breadcrumb_content style2 mb30-991">
        <h2 class="breadcrumb_title">My Properties</h2>
        
    </div>
</div>
<div class="col-lg-8 col-xl-8">
    <div class="candidate_revew_select style2 text-right mb30-991">
        <ul class="mb0">
            <li class="list-inline-item">
                <div class="candidate_revew_search_box course fn-520">
                    <form class="form-inline my-2">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Courses" aria-label="Search">
                        <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                    </form>
                </div>
            </li>
            <li class="list-inline-item">
                <select class="selectpicker show-tick">
                    <option>Featured First</option>
                    <option>Recent</option>
                    <option>Old Review</option>
                </select>
            </li>
        </ul>
    </div>
</div>
<div class="col-lg-12">
    <div class="my_dashboard_review mb40">
        <div class="property_table">
            <div class="table-responsive mt0">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Listing Title</th>
                            <th scope="col">Date published</th>
                            <th scope="col">Status</th>
                            <th scope="col">View</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($listings as $listing)

                        <tr>
                            <th scope="row">
                                <div class="feat_property list favorite_page style2">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{config('app.url')}}listing_images/{{$listing->images[0]->img_path}}" alt="fp1.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item dn"></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <h4>{{$listing->title}}</h4>
                                            <p><span class="flaticon-placeholder"></span>{{$listing->description}}</p>
                                            <p><span class="flaticon-placeholder"></span> {{$listing->address}}</p>
                                            <a class="fp_price text-thm" href="#">NGN {{number_format($listing->price, 2)}}<small></small></a>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <td>{{$listing->created_at->format('d,M Y')}}</td>
                            <td><span class="status_tag badge">{{$listing->status}}</span></td>
                            <td>{{$listing->views}}</td>
                            <td>
                                <ul class="view_edit_delete_list mb0">
                                    <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="{{route('edit_listing', $listing->listing_code)}}"><span class="flaticon-edit"></span></a></li>
                                    {{-- <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></li> --}}
                                </ul>
                            </td>
                        </tr>

                        

                        @empty

                            <div class="c p-5 text-center">
                                <h4 class="text-center">You have no listings yet..</h4>
                            </div>
                            
                        @endforelse


                    </tbody>
                </table>
            </div>
            <div class="mbp_pagination">
                <ul class="page_navigation">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">29</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

