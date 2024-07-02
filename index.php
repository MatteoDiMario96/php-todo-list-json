<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List !</title>
</head>
<body>
    <div id="app">
        <header>
            To Do List!
        </header>
        <main>
            <section>
                <ul>
                    <li v-for="(toDoEl,index) in toDoList" :key="index" :class="toDoEl.completed ? 'line-trougth' : ''">
                        <h5>
                            {{ toDoEl.task }}
                        </h5>
                    </li>
                </ul>
            </section>
            <section>
                <input type="text" name="addNewTask" id="addNewTask" v-model="addNewTask" @keyup.enter="addTask">
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>