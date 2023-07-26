<template>
    <div id="editor">
    </div>
</template>


<script>
import 'grapesjs/dist/css/grapes.min.css';
import grapesjs from "grapesjs";

import '../../css/editor/editor-styles.css';

export default {
    props: {content: String, blocks : Array},
    methods: {
        initializeGrapeJsEditor(){
          const editor =  grapesjs.init({
                container: '#editor',
                components: this.content,
              blockManager: {
                    blocks:this.blocks
              },
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
