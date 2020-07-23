<template>
    <b-field label="Profile">
        <ckeditor :editor="editor" v-model="profile" :config="editorConfig" name="profile"></ckeditor>
    </b-field>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        name: 'app',
        data() {
            return {
                editor: ClassicEditor,
                profile: '',
                editorConfig: {
                    // The configuration of the editor.
                }
            };
        }
    }
</script>