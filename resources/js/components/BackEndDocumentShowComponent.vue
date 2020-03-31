<template>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ document.document_title }}</h4>
                    <button v-on:click="add(document.id)">ADD</button>
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>タイトル</td>
                            <td></td>
                        </tr>
                        <tr v-for="item in items">
                            <td>{{ item.id }}</td>
                            <td>{{ item.title }}</td>
                            <td>
                                <a v-bind:href="'/adm/document/' + item.id + '/edit'">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a v-bind:href="'/adm/document/' + item.id + '/delete'">
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
            console.log('Component mounted.')
        },

        data: () => ({
            email: window.email,
            document: window.backend.document,
            items: window.backend.items
        }),

        methods: {
            add: (id) => {
                location.href='/adm/item/' + id + '/add'
            }
        }
    }
</script>
