const { createApp } = Vue

createApp({
    data() {
        return {
            api: 'http://localhost:8888/php-todo-list-json/api.php',
            info: null,
        }
    },
    methods: {
        
    },
    mounted() {
        axios.get(this.api).then(response => (this.info = response.data))
    }
}).mount('#app')