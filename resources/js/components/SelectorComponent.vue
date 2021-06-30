<template>
<div class="row">
                        <div class="col-lg-4 col-xl-4">
                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                <label>Category..</label>
                                <select name="category_id"  class="form-control" data-width="100%" @change="getType($event)" >
                                <option>--Select Category--</option>
                                    <option v-for="category in categories" :key="category.index" v-bind:value="category.id" >{{category.name}}</option>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4">
                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                <label>Types</label>
                                <select name="type_id"  class="form-control" data-width="100%" @change="getSubType($event)" >
                                <option>--Select Type--</option>
                                    <option v-for="_type in types" :key="_type.index" v-bind:value="_type.id" >{{_type.name}}</option>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4">
                            <div class="my_profile_setting_input ui_kit_select_search form-group">
                                <label>Subtypes</label>
                                <select name="type_id"  class="form-control" data-width="100%" @change="getSubType($event)" >
                                <option>--Select Subtype--</option>
                                    <option v-for="_subtype in subtypes" :key="_subtype.index" v-bind:value="_subtype.id" >{{_subtype.name}}</option>
                                  
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
        subtypes: [],
        loading: false,
        baseURL: process.env.MIX_API_URL
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
                    baseURL: this.appurl
                  
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
               console.log(this.appurl)
            this.getCategories()
        

         
        },

}


</script>