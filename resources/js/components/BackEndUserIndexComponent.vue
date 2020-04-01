<template>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Users</h4>
                    <button v-on:click="add()">ADD</button>
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>名前</td>
                            <td></td>
                        </tr>
                        <tr v-for="user in users" v-bind:key="user.id">
                            <td>{{ user.id }}</td>
                            <td><a v-bind:href="'/adm/user/' + user.id">{{ user.name }}</a></td>
                            <td>
                                <a v-bind:href="'/adm/user/edit/' + user.id">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a v-bind:href="deleteUrl(user.id)">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </table>
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
            email: window.email,
            users: window.backend.users
        }),

        methods: {
            deleteUrl: (id) => {
                return '/adm/user/delete/' + id
            },

            add: () => {
                location.href='/adm/user/add'
            }
        },
    }
</script>
