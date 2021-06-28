<template>
<div class="row">
                        <div class="col-lg-4 col-xl-4">
                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                <label>Category..</label>
                                <select name="category_id"  class="selectpicker" data-width="100%" @change="getType($event)" >
                                <option>--Select Category--</option>
                                    <option v-for="category in categories" :key="category.index" v-bind:value="category.id" >{{category.name}}</option>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4">
                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                <label>Types</label>
                                <select name="type_id"  class="selectpicker" data-width="100%" @change="getSubType($event)" >
                                <option>--Select Type--</option>
                                    <option v-for="_type in types" :key="_type.index" v-bind:value="_type.id" >{{_type.name}}</option>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4">
                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                <label>Subtype</label>
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
                    </div>
</template>
<script>

export default {

data(){
    return{
        categories: [],
        types: [],
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

               

             this.loading = true;

                axios({
                    method:'get',
                    url:'get_type',
                    data: {
                        type_id: event.target.value
                    },
                    baseURL: this.baseURL
                  
                })
               .then((response)=>(
                    this.loading = false,
              
                     alert('get type'),
                     this.types = response.data,
                     console.log(this.types)             
                              
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