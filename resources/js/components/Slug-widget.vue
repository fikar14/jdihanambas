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
</style>

<template>
    <div class="slug-widget">
        <div class="icon-wrapper wrapper">
            <i class="fa fa-link"></i>
        </div>

        <div class="url-wrapper wrapper">
            <span class="root-url">{{url}}</span><span class="slug">{{slug}}</span>
        </div>

        <div class="button-wrapper wrapper">
            <button class="button is-small">Edit</button>
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
            title: {
                type: String,
                required: true
            }
        },
        data: function(){
            return {
                slug: this.convetTitle()
            }
        },
        methods: {
            convetTitle: function(){
                return Slug(this.title)
            }
        },
        watch: {
            title: function(){
                this.slug = this.convetTitle()
            }
        }
    }
</script>
