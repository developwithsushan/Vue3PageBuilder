<script>
import Uploader from "vue-media-upload";
  export default (await import('vue')).defineComponent({
      components: {
          Uploader
      }
  })
</script>
<template>
    <div>
        <Uploader server="sections/uploadsliderimage" />
    </div>
</template>

<style scoped>
   ::v-deep .mu-plus-icon{
       color: #FCB322 !important;
   }
</style>
