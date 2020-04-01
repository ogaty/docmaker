<template>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Documents</h4>
                    <button v-on:click="add()">ADD</button>
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>名前</td>
                            <td>タイトル</td>
                            <td>バージョン</td>
                            <td></td>
                        </tr>
                        <tr v-for="item in documents" v-bind:key="item.id">
                            <td>{{ item.id }}</td>
                            <td><a v-bind:href="'/adm/document/' + item.id">{{ item.document_name }}</a></td>
                            <td>{{ item.document_title }}</td>
                            <td>{{ item.document_version }}</td>
                            <td>
                                <a v-bind:href="'/adm/document/edit/' + item.id">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a v-bind:href="deleteUrl(item.id)">
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
            documents: window.backend.documents
        }),

        methods: {
            deleteUrl: (id) => {
                return '/adm/document/delete/' + id
            },

            add: () => {
                location.href='/adm/document/add'
            }
        },
    }
</script>
