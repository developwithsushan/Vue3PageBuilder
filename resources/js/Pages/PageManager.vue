
<script>
   import AdminLayout from "@/Layouts/AdminLayout.vue";

   export default (await import('vue')).defineComponent({
       components:{
           AdminLayout
       }
   })
</script>
<template>
    <AdminLayout>
        <p>This is the Page Manager</p>
    </AdminLayout>

</template>
