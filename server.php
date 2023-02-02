<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$json_string = file_get_contents('data.json');

$todoList = json_decode($json_string, true);

if (isset($_POST['todoItem'])) {
    $todo_item = $_POST['todoItem'];

    $todo_array = [
        "language" => $todo_item,
        "state" => false,
    ];

    $todoList[] = $todo_array;
    file_put_contents('data.json', json_encode($todoList, JSON_PRETTY_PRINT));
}

if (isset($_POST['element'])) {
    unset($todoList($_POST['element']))

    file_put_contents('data.json', json_encode($todoList, JSON_PRETTY_PRINT));
}



header('Content-Type: application/json');

echo json_encode($todoList);
?>