<template>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ document.document_title }}</h4>
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>Chapter</td>
                            <td>タイトル</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>{{ document.id }}</td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="/adm/document/edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a v-bind:href="'/adm/document/delete/' + document.id">
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
            document: window.backend.document
        }),

        functions: () => ({
           deleteUrl: ($id) => {
               return '/adm/document/delete/' + $id
           }
        }),
    }
</script>
