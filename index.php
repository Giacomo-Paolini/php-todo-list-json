<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PHP ToDo List JSON</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="mt-4 col-4 offset-4">
                    <h1 class="text-center">Todo List</h1>
                    <div>
                        <ul>
                            <div v-for="(item, i) in toDoList" class="d-flex justify-content-between">
                                <li class="my-2 list-unstyled">{{ item }}</li>
                                <div @click="deleteItem(i)"  class="my-icon">
                                    <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                </div>
                            </div>
                        </ul>
                        <div class="input-group">
                            <input v-model="newTask" @keyup.enter="addNewTask" type="text" class="form-control" placeholder="Inserisci elemento...">
                            <button @click="addNewTask" class="btn btn-primary">Aggiungi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="./main.js"></script>
</body>
</html>