<?php
echo "Я создам записть со следующими данными:";
print_r($_POST);

$arr = [
    [
        'id' => "1",
        'model' => "sedan",
        'price' => "34000$",
        'foto' => 34
    ],
    [
        'id' => "2",
        'model' => "jeep",
        'price' => "32000$",
        'foto' => 34
    ],
    [
        'id' => "3",
        'model' => "fura",
        'price' => "27000$",
        'foto' => 34
    ],


];
builsHTMLTable($arr);

function builsHTMLTable(array $users) {
    $html = '<table border="1">';
    $html .= '<thead>';
    $html .= '<th>ID</th>';
    $html .= '<th>Model</th>';
    $html .= '<th>Price</th>';
    $html .= '<th>Foto</th>';
    $html .= '</thead>';
    $html .= '<tbody>';
    foreach ($users as $user) {
        $html .= "<tr><td>{$user['id']}</td><td>{$user['model']}</td><td>{$user['price']}</td><td>{$user['foto']}</td>";
    }
    $html .= '</tbody>';
    $html .= '</html>';
    echo $html;

}