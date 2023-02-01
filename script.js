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
    },
    methods: {
        addTodo() {
            const data = {
                todoItem: this.language,
            }

            axios.post(this.api, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.language = '';
                this.todoList = response.data;
            })

        }
    }


}).mount('#app')