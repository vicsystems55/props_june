<template>
    <div class="col-lg-12">
        <ul class="mb0">
            <li class="list-inline-item">
                <div class="portfolio_item">
                    <img class="img-fluid" src="images/property/fp1.jpg" alt="fp1.jpg">
                    <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
                </div>
            </li>
            <li class="list-inline-item">
                <div class="portfolio_item">
                    <img class="img-fluid" src="images/property/fp2.jpg" alt="fp2.jpg">
                    <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
                </div>
            </li>
            <li class="list-inline-item">
                <div class="portfolio_item">
                    <img class="img-fluid" src="images/property/fp3.jpg" alt="fp3.jpg">
                    <div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
                </div>
            </li>
        </ul>


        <div class="">
                    <div class="portfolio_upload">
                        <input type="file" name="myfile" />
                        <div class="icon"><span class="flaticon-download"></span></div>
                        <p>Drag and drop images here</p>
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