<script>
export default (await import('vue')).defineComponent({
    props: ['section']
})
</script>

<template>
    <div class="content-wrapper">
        <a target="_blank"  class="btn btn-secondary" >
            <font-awesome-icon icon="fa-solid fa-plus"></font-awesome-icon>
            Add Content
        </a>


    </div>
</template>



<style scoped>
   .content-wrapper{
       padding-top: 25px;;
   }
   .btn-secondary{
       background-color: #FCB322;
       color: #fff;
   }
</style>
