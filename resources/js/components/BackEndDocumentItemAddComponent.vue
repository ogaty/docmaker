<template>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add {{ document.document_title }}</h4>
                    <form v-bind:action="'/adm/item/' + document.id + '/complete'" method="post">
                        <input type="hidden" name="_token" v-bind:value="csrf">
                        <div class="form-group">
                            <label>
                                name:
                                <input type="text" name="name">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                title:
                                <input type="text" name="title">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                version:
                                <input type="text" name="version">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <textarea name="description"></textarea>
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
            console.log('Component mounted.')
        },

        data: () => ({
            csrf: window.backend.csrf,
            email: window.email,
            document: window.backend.document,
            items: window.backend.items
        })
    }
</script>
