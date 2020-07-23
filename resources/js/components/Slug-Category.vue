<style scoped>
    .slug-widget{
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .wrapper{
        margin-left: 8px;
    }
    .slug{
        background-color: #fdfd96;
        padding: 3px 5px;
    }
    .input{
        width: auto;
    }
    .url-wrapper{
        height: 30px;
        display: flex;
        align-items: center;
    }
</style>

<template>
    <div class="slug-widget" name="slug">
        <div class="icon-wrapper wrapper">
            <i class="fa fa-link"></i>
        </div>

        <div class="url-wrapper wrapper">
            <span class="root-url">{{url}}</span>
            <span class="slug" name="slug" v-show="slug && !isEditing">{{slug}}</span>
            <input type="text" name="slug" class="input is-small" v-show="isEditing" v-model="customSlug">
        </div>

        <div class="button-wrapper wrapper">
            <button class="button is-small" v-show="!isEditing" @click.prevent="editSlug">Edit</button>
            <button class="button is-small" v-show="isEditing" @click.prevent="saveSlug">Save</button>
            <button class="button is-small" v-show="isEditing" @click.prevent="resetSlug">Reset</button>
        </div>
    </div>

</template>

<script>
    export default {
        props:{
            url: {
                type: String,
                required: true
            },
            name: {
                type: String,
                required: true
            }
        },
        data: function(){
            return {
                slug: this.convertName(),
                isEditing: false,
                customSlug: '',
                wasEdited: false
            }
        },
        methods: {
            convertName: function(){
                return Slug(this.name)
            },
            editSlug: function(){
                this.customSlug = this.slug
                this.isEditing = true
            },
            saveSlug: function(){
                if(this.costumSlug !== this.slug) this.wasEdited = true
                this.slug = Slug(this.customSlug)
                this.isEditing = false
            },
            resetSlug: function(){
                this.slug = this.convertName()
                this.wasEdited = false
                this.isEditing = false
            }
        },
        watch: {
            name: function(){
                if(this.wasEdited === false)
                this.slug = this.convertName()
            },
            slug: function(val){
                this.$emit('slug-changed', val)
            }
        }
    }
</script>
