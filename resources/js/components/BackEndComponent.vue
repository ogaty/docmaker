<template>
    <div class="container">
        <header>
            <div class="header">
                <div class="title">
                    DOCMAKER
                </div>
                <div class="user">
                    <span class="email">{{ email }}</span>
                </div>
            </div>
        </header>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an backend component.
                    </div>
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
            email: 'test@example.com'
        }),
    }
</script>
