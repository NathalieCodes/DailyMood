<?php
$jours = [
    "lundi",
    "mardi",
    "mercredi",
    "jeudi",
    "vendredi",
]; // Add samedi and dimanche

$jours[] = "samedi";
$jours[] = "dimanche";

foreach ($jours as $jour) {
    echo $jour;
}

$ages = [
    "jerome" => 33,
    "nathalie" => 31,
    "pierre" => 24,
    "paul" => 36,
    "jack" => 55,
    "daria" => 24,
    "queen" => 19,
    "amelie" => 77,
];

$sum = 0;
foreach ($ages as $age) {
    $sum = $sum + $age;
}
echo $sum;

foreach ($ages as $name => $age) {
    echo "$name a $age ans";
}

$ages["pierre"] = "28";

$users = [];

$users[] = ["name" => "jerome", "age" => "33", "sex" => "m"];
$users[] = ["name" => "nathalie", "age" => "31", "sex" => "f"];
$users[] = ["name" => "pierre", "age" => "24", "sex" => "m"];
$users[] = ["name" => "paul", "age" => "36", "sex" => "m"];
$users[] = ["name" => "jack", "age" => "55", "sex" => "m"];
$users[] = ["name" => "daria", "age" => "24", "sex" => "f"];
$users[] = ["name" => "queen", "age" => "19", "sex" => "f"];
$users[] = ["name" => "amelie", "age" => "77", "sex" => "f"];
?>

<ul>
    <?php
for ($i = 0; $i < count($users); $i = $i + 1) {
    $name = $users[$i]["name"];
    $age = $users[$i]["age"];
    echo "<li><strong>$name</strong>, $age</li>";
}

    foreach ($users as $user) {
        $name = $user["name"];
        $age = $user["age"];
        echo "<li><strong>$name</strong>, $age</li>";
    }

?>
</ul>

