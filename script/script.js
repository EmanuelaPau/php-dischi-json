const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './server.php',
            discsList: [],
            infoBox: false,
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

        },

        turnOn(element) {
            element = true
            console.log(element);
        },

        turnOff(element) {
            element = false
            console.log(element);
        },
    },

    created() {
        this.getItems();
    },
}).mount('#app')