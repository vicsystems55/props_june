@extends('layouts.dashboard')

@section('content')
<div class="row">

    

	<div class="col-lg-12 mb10">
        <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">My Profile</h2>
            
        </div>
    </div>
    <div class="col-lg-12">
        <div class="my_dashboard_review">
            <h3 class="mb-5">Profile Information</h3>
            <div class="row">
                
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrap-custom-file">
                                <input type="file" name="image1" id="image1" accept=".gif, .jpg, .png"/>
                                <label  for="image1">
                                      <span><i class="flaticon-download"></i> Upload Photo </span>
                                </label>
                            </div>
                            <p>*minimum 260px x 260px</p>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInput1">Username</label>
                                <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="alitfn">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleEmail">Email</label>
                                <input type="email" class="form-control" id="formGroupExampleEmail" placeholder="creativelayers@gmail.com">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInput3">Fullname</label>
                                <input type="text" class="form-control" id="formGroupExampleInput3">
                            </div>
                        </div>
                       
                      
                  

                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInput8">Phone</label>
                                <input type="text" class="form-control" id="formGroupExampleInput8">
                            </div>
                        </div>
                      
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInput10">Mobile</label>
                                <input type="text" class="form-control" id="formGroupExampleInput10">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInput11">Language</label>
                                <input type="text" class="form-control" id="formGroupExampleInput11">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInput12">Company Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput12">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInput13">Address</label>
                                <input type="text" class="form-control" id="formGroupExampleInput13">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="my_profile_setting_textarea">
                                <label for="exampleFormControlTextarea1">About me</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-12 text-right">
                            <div class="my_profile_setting_input">
                                <button class="btn btn1">View Public Profile</button>
                                <button class="btn btn2">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my_dashboard_review mt30">
            <h3 class="mb-5">Social Media</h3>

            <div class="row">
               
                <div class="col-xl-12">
                    <div class="row">
                       
                       
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleFaceBook">Facebook</label>
                                <input type="text" class="form-control" id="formGroupExampleFaceBook">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleTwitter">Twitter</label>
                                <input type="text" class="form-control" id="formGroupExampleTwitter">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleLinkedin">Linkedin</label>
                                <input type="text" class="form-control" id="formGroupExampleLinkedin">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleInstagram">Instagram</label>
                                <input type="text" class="form-control" id="formGroupExampleInstagram">
                            </div>
                        </div>
                       
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleYoutube">Youtube</label>
                                <input type="text" class="form-control" id="formGroupExampleYoutube">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExamplePinterest">Pinterest</label>
                                <input type="text" class="form-control" id="formGroupExamplePinterest">
                            </div>
                        </div>
                      
                        <div class="col-xl-12 text-right">
                            <div class="my_profile_setting_input">
                                <button class="btn btn2">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my_dashboard_review mt30">
          
                <h3 class="mb-5">Change password</h3>
            
            <div class="row">
               
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleOldPass">Old Password</label>
                                <input type="text" class="form-control" id="formGroupExampleOldPass" placeholder="alitfn">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleNewPass">New Password</label>
                                <input type="text" class="form-control" id="formGroupExampleNewPass">
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6">
                            <div class="my_profile_setting_input form-group">
                                <label for="formGroupExampleConfPass">Confirm New Password</label>
                                <input type="text" class="form-control" id="formGroupExampleConfPass">
                            </div>
                        </div>
                        <div class="col-xl-12">
                           
                            <div class="my_profile_setting_input float-right fn-520">
                                <button class="btn btn2">Update Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection

