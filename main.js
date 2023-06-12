const { createApp } = Vue

createApp({
    data() {
        return {
            api: './api.php',
            info: null,
        }
    },
    methods: {
        
    },
    mounted() {
        axios.get(this.api).then(response => (this.info = response.data))
    }
}).mount('#app')