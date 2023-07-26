<template>
    <div class="content-wrapper">
        <div class="btn btn-secondary" >
            <font-awesome-icon icon="fa-solid fa-plus"></font-awesome-icon>
            Add Content
        </div>


    </div>
</template>

<script>
export default (await import('vue')).defineComponent({
    props: ['section']
})
</script>

<style scoped>
   .content-wrapper{
       padding-top: 25px;;
   }
   .btn-secondary{
       background-color: #FCB322;
       color: #fff;
   }
</style>
