<template>
    <div class="wrapper">
        <nav id="sidebar">
            <h1>{{ mydocument.document_title }}</h1>
            <ul class="list-unstyled components">
                <li v-for="item in items">
                    <a v-bind:href="'#' + item.id">{{ item.title }}</a>
                </li>

            </ul>
        </nav>
        <div id="content">
            <h1>{{ mydocument.document_title }}</h1>
            <section v-for="item in items">
                <h2 v-bind:id="item.id">
                    {{ item.title }}
                </h2>
                <div>
                    {{ item.description }}
                </div>
            </section>
            <footer>
                <div>
                    (c) 2020. {{ mydocument.copyright }}
                </div>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {

        mounted() {
            console.log('Component mounted.')
        },

        data: () => ({
            'mydocument' : window.frontend.document,
            'items': window.frontend.items,
        })
    }
</script>
