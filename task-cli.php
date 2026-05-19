<?php

define('TASK_DB', __DIR__ . '/task_db.json');

/**
 * @param string $task
 * @return void
 */
function AddTask(string $task)
{

    if (!isset($task)) {

        exit('You Can Not Create A Task Without A Name!' . "\n");

    }

    $task = trim($task, ' ');

    $taskContainer = [
        "id" => 1,
        "description" => $task,
        "status" => 'todo',
        "created_at" => getdate()
    ];

    $saveTask = SaveTask($taskContainer);

    if ($saveTask) {
        printf(
            "Task Created Successfully.\n"
        );
        exit();
    }

}

/**
 * @param array $taskContainer
 * @return bool
 */

function SaveTask(array $taskContainer)
{

    if (!file_exists(TASK_DB)) {

        $cf = file_put_contents(TASK_DB, '');

        if ($cf) {
            printf("Creating Database File ...... \n");
        } else {
            printf("Unable To Create Database File, Check File Permission And Try Again \n");
            return false;
        }

    }

    $task_file = file_get_contents(TASK_DB);
    $task_file = json_decode($task_file);

    $data = [
        [
            "id" => 1,
            "description" => 22,
            "status" => 'todo',
            "created_at" => getdate()
        ],
        [
            "id" => 1,
            "description" => 22,
            "status" => 'todo',
            "created_at" => getdate()
        ],
    ];



    return true;
}