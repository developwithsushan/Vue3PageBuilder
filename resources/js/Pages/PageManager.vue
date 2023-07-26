
<script>
   import AdminLayout from "@/Layouts/AdminLayout.vue";

   export default (await import('vue')).defineComponent({
       components:{
           AdminLayout,
       },
       methods: {
           getPageSections(){
               alert('I am about to get page sections');
           }
       }
   })
</script>
<template>
    <AdminLayout>
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row table-agile-info">
                        <div class="col-sm-3">
                            <div class="card page-selector">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Select a Page</h3>
                                </div>

                                <div class="card-body table-responsive">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group p-card-body">
                                                <label>Select</label>
                                                <select @change="getPageSections()" class="form-control">
                                                    <option>Home Page</option>
                                                    <option>About Us</option>
                                                    <option>Contact Us</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>

</template>

<style scoped>
   .section-footer{
       display: flex;
       justify-content: flex-end;
   }

   .bg-success{
       background-color: #ff6c60;
       color: #fff;
       border-color: #ff6c60;
   }

   .card{
       position: relative;
       display: -ms-flexbox;
       display: flex;
       -ms-flex-direction: column;
       flex-direction: column;
       min-width: 0;
       word-wrap: break-word;
       background-color: #fff;
       background-clip: border-box;
       border: 0 solid rgba(0,0,0,.125);
       border-radius: 0.25rem;
   }


</style>
