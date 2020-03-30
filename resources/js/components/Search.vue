<template>
    <section class="has-text-centered">
        <div class="columns is-centered is-vcentered search">
            <div class="column is-half">
                <form @submit.prevent="search" class="columns is-mobile">
                    <div class="column is-9">
                        <input class="input is-large" type="search" placeholder="Search Giphy" v-model="query" required>
                    </div>
                    <div class="column">
                        <button class="button is-primary is-large" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <span v-for="gif in gifs">
            <img class="img" :src="gif.images.fixed_width.url" :alt="gif.slug">
        </span>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                // To get the typed query:
                query: '',
                // To save the fetched result:
                gifs: [],
            };
        },

        methods: {
            /**
             * Performs POST request search by sending the query as a request
             * to the server, fetching the result, assigning the result to `gifs`
             * and clearing the query input.
             */
            search() {
                axios.post('/api/search', { query: this.query })
                     .then(({ data }) => {
                         this.gifs  = data.data;
                         this.query = '';
                     })
                     .catch(({ response }) => {
                         // if we have any errors alert the user
                         // and console log it in the console
                         alert(response.data.message);
                         console.error(response.data.message);
                     });
            },
        },
    };
</script>

<style scoped>
    .search {
        padding-top: 20px;
    }

    .img {
        padding: 0 3px;
    }
</style>
