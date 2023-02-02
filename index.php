<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js"
        integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <div class="container p-5">
            <div class="row">
                <div class="col">
                    <ul class="list-group">
                        <li class="list-group-item active text-center" aria-current="true">
                            <h2>
                                Todo List percorso Boolean
                            </h2>
                        </li>
                        <li v-for='(item, index) in todoList'
                            class="list-group-item d-flex justify-content-between px-5" :key='index'>
                            {{ item.language }} <button type="submit" class="btn btn-outline-danger"
                                @click='deleteTodo(index)'>X</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">

                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <input v-model='language' type="text" placeholder='Aggiungi una task'
                                    class=" form-control" id="inputtext">
                            </div>
                            <div class="col-3">
                                <button type="submit" class="col-12 btn btn-primary" @click='addTodo'>Submit</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script type='text/javascript' src="script.js"></script>
</body>

</html>