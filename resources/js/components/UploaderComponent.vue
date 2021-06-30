<template>
   <div class="my_dashboard_review mt20">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb30"></h4>
                    <button class="btn admore_btn mb30">Add More</button>
                </div>
                <div class="col-xl-12">
                    <div class="my_profile_setting_input form-group">
                        <label for="planDsecription">Plan Description</label>
                        <input type="text" class="form-control" id="planDsecription">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="planBedrooms">Plan Bedrooms</label>
                        <input type="text" class="form-control" id="planBedrooms">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="planBathrooms">Plan Bathrooms</label>
                        <input type="text" class="form-control" id="planBathrooms">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="planPrice">Plan Price</label>
                        <input type="text" class="form-control" id="planPrice">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="planPostfix">Price Postfix</label>
                        <input type="text" class="form-control" id="planPostfix">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label for="planSize">Plan Size</label>
                        <input type="text" class="form-control" id="planSize">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="my_profile_setting_input form-group">
                        <label>Plan Image</label>
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input class="btn btn-thm" type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="my_profile_setting_textarea mt30-991">
                        <label for="planDescription">Plan Description</label>
                        <textarea class="form-control" id="planDescription" rows="7"></textarea>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="my_profile_setting_input">
                        <a href="" class="btn btn1 float-left">Back</a>
                        <a href="" class="btn btn2 float-right">Finish</a>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>

export default {

data(){
    return{
        categories: [],
        types: [],
        subtypes: [],
        loading: false,
        baseURL: process.env.MIX_API_URL
    }
},

    props: ['parent_id'],

    methods: {

            getCategories(){

             this.loading = true;

                axios({
                    method:'get',
                    url:'get_categories',
                    baseURL: this.baseURL
                  
                })
               .then((response)=>(
                    this.loading = false,
              
                    console.log(response.data),
                     this.categories = response.data
             
                              
                        //  this.$emit('update', response)
                    

                ))
                    .catch(function (error) {
                        console.log(error);
                    });
 
            },

            getType(event){

               alert(event.target.value);

             this.loading = true;

                axios({
                    method:'post',
                    url:'get_type',
                    data: {
                        category_id: event.target.value
                    },
                    baseURL: this.baseURL
                  
                })
               .then((response)=>(
                    this.loading = false,
              
                     alert('gotten types'),
                     this.types = response.data,
                     console.log(response.data)             
                              
                        //  this.$emit('update', response)
                    

                ))
                    .catch(function (error) {
                        console.log(error);
                    });
 
            },

                        getSubType(event){

               alert(event.target.value);

             this.loading = true;

                axios({
                    method:'post',
                    url:'get_subtype',
                    data: {
                        type_id: event.target.value
                    },
                    baseURL: this.baseURL
                  
                })
               .then((response)=>(
                    this.loading = false,
              
                     alert('gotten subtypes'),
                     this.subtypes = response.data,
                     console.log(response.data)             
                              
                        //  this.$emit('update', response)
                    

                ))
                    .catch(function (error) {
                        console.log(error);
                    });
 
            },


        
    },


        mounted() {
               console.log(this.baseURL)
            this.getCategories()
        

         
        },

}


</script>