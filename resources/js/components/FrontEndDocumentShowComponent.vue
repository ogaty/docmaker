<template>
    <div class="wrapper">
        <nav id="sidebar">
            <ul class="list-unstyled components">
                <li v-for="item in items">
                    <a href="#">{{ item.title }}</a>
                </li>

            </ul>
        </nav>
        <div id="content">
            <h1>{{ document.title }}</h1>
            <section v-for="item in items">
                <h2>
                    {{ item.title }}
                </h2>
                <div>
                    {{ item.description }}
                </div>
            </section>
            <footer>
                <div>
                    (c) 2020.
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
            'document' : window.frontend.document,
            'items': window.frontend.items,
        })
    }
</script>
