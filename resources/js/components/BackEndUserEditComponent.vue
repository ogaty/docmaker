<template>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit {{ user.name }}</h4>
                    <form v-bind:action="'/adm/user/' + user.id + '/complete'" method="post">
                        <input type="hidden" name="_token" v-bind:value="csrf">
                        <div class="form-group">
                            <label>
                                name:
                                <input type="text" name="name" v-bind:value="user.name">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                email:
                                <input type="text" name="email" v-bind:value="user.email">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                password:
                                <input type="password" name="password">
                            </label>
                        </div>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        mounted() {
        },

        data: () => ({
            csrf: window.backend.csrf,
            email: window.email,
            user: window.backend.user
        })
    }
</script>
