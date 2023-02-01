const { createApp } = Vue;

createApp({
    data() {
        return {
            api: 'server.php',
            todoList: [],
            language: '',
        }
    },
    mounted() {

        axios.get(this.api).then((response) => {
            this.todoList = response.data;
            console.log(this.todoList)
        })
    }


}).mount('#app')