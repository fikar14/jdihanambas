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
                <div class="modal-card" style="width: 640">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Create New Role</p>
                    </header>
                    <section class="modal-card-body">
                        <b-field label="Role">
                            <b-input
                                type="text"
                                id="name"
                                name="name"
                                v-model="role.name"
                                placeholder="Your role"
                                required>
                            </b-input>
                        </b-field>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button" type="button" @click="$parent.close()">Close</button>
                        <button class="button is-primary" @click="createRole()">Create</button>
                    </footer>
                </div>
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
            createRole: function createRole(){
                // var _this = this
                var input = this.role

                axios.post('/roles/store', input).then(function (response) {
                    this.role = { 'name': '' };
                    this.getRoles();
                });
            }
        }
    }
</script>