const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './server.php',
            discsList: []
        }
    },

    methods: {
        getItems() {
            axios.get(this.apiUrl, {
                params: {}
            })
                .then((response) => {
                    console.log(response);
                    this.discsList = response.data;
                    console.log(this.discsList)
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });

        }
    },

    created() {
        this.getItems();
    },
}).mount('#app')