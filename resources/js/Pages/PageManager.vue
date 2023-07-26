
<script>
   import AdminLayout from "@/Layouts/AdminLayout.vue";

   export default (await import('vue')).defineComponent({
       components:{
           AdminLayout,
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
                                                <select class="form-control">
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
