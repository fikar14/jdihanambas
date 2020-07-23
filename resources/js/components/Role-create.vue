<template>
    <section>
        <button class="button is-primary is-pulled-right"
            @click="isComponentModalActive = true">
            <i class="fa fa-user-plus m-r-10"></i> Create New Role
        </button>

        <b-modal :active.sync="isComponentModalActive" has-modal-card>
            <modal-form v-bind="formProps"></modal-form>
        </b-modal>
    </section>
</template>

<script>
    const ModalForm = {
        props: ['role', 'role-route'],
        template: `
            <form @submit.prevent="addPost">
                <div class="modal-card" style="width: 640">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Create New Rule</p>
                    </header>
                    <section class="modal-card-body">
                        <b-field label="Role">
                            <b-input v-model="name" name="name" id="name"></b-input>
                        </b-field>

                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="$parent.close()">Close</button>
                        <button class="button is-primary">Create</button>
                    </footer>
                </div>
            </form>
        `
    }

    export default {
        components: {
            ModalForm
        },
        data() {
            return {
                isComponentModalActive: false,
                formProps: {
                    role: {'name': ''},
                }
            }
        },
        methods: {
            addPost(){
                console.log(this.post);
            }
        }
    }
</script>