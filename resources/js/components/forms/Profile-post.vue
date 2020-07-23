<template>
  <ckeditor :editor="profileEditor" v-model="profile" :config="profileConfig"></ckeditor>
</template>

<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
  name: "app",
  data() {
    return {
      profileEditor: ClassicEditor,
      profile: "<p>Content of the editor.</p>",
      profileConfig: {
        // The configuration of the editor.
      }
    };
  },
  watch: {
    profile: function(val) {
      this.$emit("profile-changed", val);
    }
  }
};
</script>