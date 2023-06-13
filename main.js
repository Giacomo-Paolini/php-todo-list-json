const { createApp } = Vue

createApp({
    data() {
        return {
            api: './api.php',
            toDoList: [],
            newTask: "",
        }
    },
    methods: {
        getData() {
            axios.get(this.api).then((response) => {
                console.log("Dati ricevuti: ", response.data);
                this.toDoList = response.data;
            });
        },
        addNewTask() {
            const data = {newTask: this.newTask};
            this.sendData(data);
        },
        sendData(data) {
            axios.post(this.api, data, {
                headers: {'Content-Type': 'multipart/form-data'}
            }).then(response => {
                console.log("Dati ricevuti: ", response.data);
                this.toDoList = response.data;
                this.newTask = "";
            })
        },
        deleteItem(i) {
            console.log("Hai cliccato sull'item", i);
            const data = {deleteIndex: i};
            this.sendData(data);
        },
    },
    mounted() {
        this.getData();

    }
}).mount('#app')