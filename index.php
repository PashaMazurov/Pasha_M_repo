<?php
/*
echo '<html>

<head>
    <style>html { overflow-y: hidden; }</style>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin: 0">
<header class="header">SiteBranding
    <button class="batt_reg">Registration </button>
    <button class="batt_log">Login</button>
    </form>
</header>
<div class="deskt1"><br>
    <form action="http://localhost:9000/form.php" method="POST" class="form-group" >

        <li><input name="ID" placeholder="ID">ID</li><br>
        <li><input name="Model" placeholder="Model">Model</li><br>
        <li><input name="Price" placeholder="Price">Price</li><br>
        <li><input name="Foto" placeholder="Foto">Foto</li><br>
        <button class="batt_create">Create</button>
    </form>

</div><div class="deskt2">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Model</th>
            <th>Price</th>
            <th>Foto</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Sedan</td>
            <td>2500</td>
            <td><img src="..."></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jeep</td>
            <td>3000</td>
            <td><img src=...></td>
        </tr>
    </table></div>
</body>
</html>
';

echo $html;
echo "Я создам записть со следующими данными:";
print_r($_POST);
*/
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

































/*

$arr = [Pasha, Ilia,  Ira, test, test2];
$cou = count($arr);
for ($i = 0; $i < $cou; $i++){
    echo "{$arr[$i]}<br>";
    $abs = range('a', 'z')
}

$i = 0;
while ($i <$cou){
    echo "{$arr[$i]}<br>";
    $i++;
}

$abc= range('a','z');
$initial = 'mpp';
$first = getRandElement($abc);
$second = getRandElement($abc);
$third = getRandElement($abc);
$rndInitials = $first . $second . $third;
$counter = 1;
function getRandElement(array $array): string
{
    $len = count($array);
    $index = rand(0, $len - 1);
    return $array[$index];
}
do {
    $first = getRandElement($abc);
    $second = getRandElement($abc);
    $third = getRandElement($abc);
    $rndInitials = $first . $second . $third;
    $counter++;
}
while ($initial !== $rndInitials);
echo "RND . $rndInitials<br> popitki: $counter";


$abc = range('1', '100');
$initial = 65;
$counter = 1;
function getRandElement(array $array): int
{
    $len = count($array);
    $index = rand(0, $len - 1);
    return $array[$index];
}

do {
    $first = getRandElement($abc);
    $second = getRandElement($abc);
    $third = getRandElement($abc);
    $rndInitials = $first . $second . $third;
    $counter++;
} while ($initial !== $rndInitials);
echo "RND . $rndInitials<br> popitki: $counter";
*/