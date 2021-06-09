@extends('layouts.dashboard')

@section('content')
<div class="row">

    

        <div class="col-lg-12 mb10">
                <div class="breadcrumb_content style2">
                    <h2 class="breadcrumb_title">Create Listing</h2>
         

           
                </div>
            </div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Title">
                        </div>

                        <div class="form-group">
                            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Description"></textarea>
                        </div>

                    </div>
                </div>
                
            </form>
         
        </div>
    </div>
</div>

        
         


</div>

@endsection

