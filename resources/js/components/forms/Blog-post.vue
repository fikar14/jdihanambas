<template>
    <ckeditor :editor="blogEditor" v-model="blog" :config="blogConfig" name="blog"></ckeditor>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        name: 'app',
        data() {
            return {
                blogEditor: ClassicEditor,
                blog: '',
                blogConfig: {
                    // The configuration of the editor.
                }
            };
        },
        watch: {
            blog: function(val){
                this.$emit('blog-changed', val)
            }
        }
    }
</script>