<template>
    <div class="row">

        <div class="h400 bdrs8" id="map-canvas"></div>

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
        baseURL: this.appurl
    }
},

    props: ['appurl'],

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
              
                     
                     this.types = response.data,
                     console.log(response.data)             
                              
                        //  this.$emit('update', response)
                    

                ))
                    .catch(function (error) {
                        console.log(error);
                    });
 
            },

                        getSubType(event){

             

             this.loading = true;

                axios({
                    method:'post',
                    url:'get_subtype',
                    data: {
                        type_id: event.target.value
                    },
                    baseURL: this.appurl
                  
                })
               .then((response)=>(
                    this.loading = false,
              
                  
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
               console.log(this.appurl)
            this.getCategories()
        

         
        },

}


</script>