<?php
header('Content-Type: application/json');

$toDoList = file_get_contents('./data.json');
$toDoListData = json_decode($toDoList, true);

if (isset($_POST['newTask'])) {
    $toDoListData[] = $_POST['newTask'];
    file_put_contents('./data.json', json_encode($toDoListData));

} elseif (isset($_POST['deleteIndex'])) {
    $index = $_POST['deleteIndex'];
    array_splice($toDoListData, $index, 1);
    file_put_contents('./data.json', json_encode($toDoListData));
}

echo json_encode($toDoListData);
?>