const { createApp } = Vue

createApp({
    data() {
        return {
            toDoList: [],
            path: './api/server.php',
            addNewTask: '',

        }
    },
    methods:{
        prendiDati(){
            axios.get(this.path)
                .then((response) => {
                    this.toDoList = response.data['todoList'];
                    console.log(this.toDoList);
                })
                .catch(function (error) {
                    console.log(error, 12121);
                })
                .finally(function () {
                    // always executed
                });  
        },
        addTask(){
            const newTask = {
                task: this.addNewTask,
                completed: false,
            }
            this.toDoList.push(newTask);
            this.addNewTask = '';
        },
    },
    created(){
        this.prendiDati();
    },

}).mount('#app')