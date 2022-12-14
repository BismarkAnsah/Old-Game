<?php
// $results = [];
// for($i=0;$i<5;$i++)
// {
//     array_push($results, random_int(0,9));
// }
// echo json_encode($results);

function get5Rands()
{
    $results = [];
    for($i=0;$i<5;$i++)
        array_push($results, random_int(0,9));
    return $results;
}
// $data = file_get_contents("php://input");
// $data = json_decode($data, true);
$data = get5Rands();
$data['numbers'] = $data;
$data['id'] = 25;
echo json_encode($data);
// echo json_encode([$data['data']])
?>

