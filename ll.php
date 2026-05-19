<?php

$data = [
    [
        "id" => 1,
        "description" => 22,
        "status" => 'todo',
        "created_at" => date('h:m')
    ],
    [
        "id" => 2,
        "description" => 22,
        "status" => 'todo',
        "created_at" => date('h:m')
    ],
];

// print_r($data);
// print_r(json_decode(json_encode($data)));

$new = [
    "id" => 100,
    "description" => 22,
    "status" => 'todo',
    "created_at" => date('h:m')
];

array_push($data, $new);

// print_r($data);

$meta = [];

foreach ($data as $item) {
    array_push($meta, $item);
}

$array_length = count($meta);

// print_r($array_lenght);
/**
 * @var int $to_delete
 */
$to_delete = 0;

$strip = 0;
while ($strip < $array_length) {
    echo "loop start\n";
    foreach ($meta[$strip] as $task => $desc) {
        echo "i was here top\n";
        if ($strip == 0) {
            echo "inner loop begins with i = $strip\n";
        } else {
            echo "inner loop ends with i = $strip\n";
        }

        if ($meta[$strip]['id'] == 100) {
            $strip = $to_delete;
            if ($to_delete > 0) {
                echo "[index found][$to_delete][$strip]";
            }

        }

        echo "i was here bottom\n";
    }

    $strip++;

}



// echo $to_delete;