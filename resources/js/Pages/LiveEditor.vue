<template>
    <div id="editor">
    </div>
</template>


<script>
import 'grapesjs/dist/css/grapes.min.css';
import grapesjs from "grapesjs";

export default {
    props: {content: String},
    methods: {
        initializeGrapeJsEditor(){
          const editor =  grapesjs.init({
                container: '#editor',
                components: this.content,
                storageManager: {
                    autoload: false,
                    storeHtml: 1,
                }
            })
        }
    },
    mounted(){
        this.initializeGrapeJsEditor();
    }
}
</script>
