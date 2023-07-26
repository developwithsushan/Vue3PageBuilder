<template>
    <div class="editor">
        <span v-html="content"></span>
    </div>
</template>


<script>
export default {
    props: {content: String}
}
</script>
