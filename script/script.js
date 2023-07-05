const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './server.php',
            discsList: [],
            infoBox: false,
            discIndex: '',
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

        turnOn(element, index, imgIndex) {
            element = true
            console.log(element);
            index = imgIndex;
            console.log(index)
            // console.log(this.infoBox)
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