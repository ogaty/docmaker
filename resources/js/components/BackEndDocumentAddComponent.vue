<template>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add</h4>
                    <form v-bind:action="'/adm/document/complete'" method="post">
                        <input type="hidden" name="_token" v-bind:value="csrf">
                        <div class="form-group">
                            <label>
                                name:
                                <input type="text" name="document_name">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                title:
                                <input type="text" name="document_title">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                version:
                                <input type="text" name="document_version">
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                copyright:
                                <input type="text" name="copyright">
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
            email: window.email
        })
    }
</script>
