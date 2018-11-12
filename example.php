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

 Exercise PHP

Les variables

- Créer une variable bien nommée pour stocker l’âge de Nathalie et y attribuer la valeur 31
$ageNathalie = 31;

- Créer une variable de type string (n’importe quelle valeur)
$food = "pizza";

- Créer une variable décimale (n’importe quelle valeur)
$degre = 21.5;

- Créer une variable pour stocker le nom de ton amoureux et y attribuer sa valeur
$nomAmoureux = "Jerome";

- Attribuer à une variable $result la somme des variables $a et $b
$result = $a + $b;

- Donner le type des variables suivantes
    - $a = “Salut”; String
    - $b = 42; INT
    - $c = “Salut les amis”; String
    - $d = “21.45”; String
    - $e = 32; INT
    - $f = $e + $b; INT
    - $g = 45.75; Float

Les tableaux

On considérera les tableaux suivants pour la suite des questions
- $cities = [“Paris”, “Vancouver”, “Montreal”, “NYC”];
- $planet = [“name” => “venus”, “size” => “10^12km3”, “age” => 123000];

- Donner le type des tableaux: 1er tableau = tableau classique / 2e tableau = associatif
- Combien de valeur pour chaque tableau: 4 / 3
- Quelle est la valeur de $cities[3]; NYC
- Quelle est la valeur de $planet[“name”]; venus
- Que vaut $cities après cette ligne <?php $cities[] = “Victoria”; ?>
- Que vaut $cities après <?php $cities[2] = “SF”; ?>
- La planète venus a zero habitant, ajouter un index au tableau $planet pour refléter cette information (la valeur sera un int)
$planet["habitant"] = 0;

- Créer un tableau sur le meme model que $planet pour la terre (les info peuvent être approximatives)
$planet = ["name" => "terre", "size" => "10^^2km3", "age" => 6000000000];

Tableaux magiques de PHP

On considérera l’URL suivante pour la suite des questions
https://search.com/d/ex.php?query=hello&s=78

- Quels sont les noms des paramètres dans cette url ?
query et s

- Quelles sont les valeurs des paramètres ?
hello et 78

- Quel est le nom du tableau magique que PHP créé automatiquement lorsqu’une url a des paramètres ?
un tableau $_GET

- Quelle est la taille de ce tableau ?
2 entrées

- Quel est son type ?
associatif

- Attribuer à une variable bien nommée la valeur du paramètre “query”
$query = $_GET["query"];

- Quand je récupère la valeur du paramètre “s” dans une variable, quel est le type de cette variable ?
string (tous les paramètres récupérés d'une URL sont des strings)

On considérera le code HTML partiel suivant pour les questions a venir

<div>
  <form action=“do.php” method=“post”>
    Name: <input type=“text” name=“username”>
    Age: <input type=“text” name=“age”>
    <textarea placeholder=“Enter your notes” name=“note”></textarea>
    <br>
    <input type=“submit”>
  </form>
</div>

- Quel est le nom du tableau que PHP va créer si on valide ce formulaire ?
associatif $_POST

- Quelle page PHP va récupérer ces informations ?
do.php

- Dans ce tableau quels index seront disponibles ?
username, age and note

- Pour chaque index mettre la valeur dans une variable bien nommée
$username = $_POST["username"];
$age = $_POST["age"];
$note = $_POST["note"];

- Si l’utilisateur entre dans le formulaire la valeur 33 pour “age” quel sera le type de la valeur de l’index age du tableau magique ?
string

- Quel est le nom du troisième tableau automatiquement créé par PHP ?
$_COOKIE

Les conditions

En considérant le code de la page “test.php” (ignorons l’indication des lignes)
L01 <?php
L02 $size = 45;
L03
L04 if ($size < 40) {
L05   echo “small”;
L06 }
?>
- Qu’est ce qu’il sera affiché sur la page PHP si on la charge ?
rien

- Considérons que L02 $size = 30, que sera t’il affiché maintenant ?
small

- De nouveau avec L02 $size = 45; changer la condition pour que “small” apparaisse ?
if ($size < 50)

- On veut que les autres tailles affichent “big”, que faut il faire ?
else {
    echo "big";
}

- Maintenant on veut que pour < 40 on ait “small” entre 40 et 50 inclu on ait “medium” et pour le reste “big”, écrire le code.
if ($size < 40) {
    echo "small";
} elseif ($size <= 50) {
 echo "medium";
} else {
 echo "big";
}

- Considérons qu’on ajoute en L03 $size = $size + 40; qu’affichera le code ?
BIG

Les boucles

Considérons le code
L01 <?php
L02 $number = 21;
L03
L04 while ($number < 30) {
L05   echo “hello”;
L06   $number = $number + 3;
L07 }
?>

- Combien de fois sera affiché “hello” sur cette page ?
3 fois

- Considérons que L02 $number = 0; combiner de fois sera affiché “hello” ?
10 fois

- De nouveau avec L02 $number = 21; changer la condition de la boucle pour afficher 10 fois “hello”
while ($number < 51)

- Que se passera til si on supprime la ligne L06 ?
ca va boucler à l'infini.

Considérerons le code
L01 <?php
L02 $cards = [“as”, “queen”, “king”, “valet”, “joker”, “7”];
L03
L04 for ($counter = 0; $counter < 6; $counter = $counter + 1) {
L05   echo $cards[$counter];
L06 }
?>

- Que sera t il affiché à l’écran ?
on aura chaque valeur du tableau $cards

- Comment simplifier $counter = $counter + 1 ? $counter++
- Si L04 $counter = 2 a la place de = 0 que sera t il affiché ? king, valet, joker, 7
- De retour avec L04 $counter = 0;
- Pour ligne L05 echo $cards[5 - $counter]; que sera t il affiché ? 7, joker, valet, king, queen, as
- Donner la fonction php qui retourne le nombre d’élément d’un tableau
count($cards)

- On ajoute en L03 $cards[] = “servant”; comment améliorer le code pour ne pas être dépendant du nombre d’entrée du tableau ?
for ($counter = 0; $counter < count($cards); $counter++)


foreach ($cards as $index => $value) {
echo "$index: $value";
}


Considérons le code
<?php
$fruits = [“pêche” => “orange”, “raisin” => “violet”, “pomme” => “vert”, “noix” => “marron”];
foreach ($fruits as $color) {
  if ($color != “vert”) {
    echo $color;
  }
}
?>

*note = $color est la valeur, dans un foreach, la 2e entrée est toujours la valeur associée à l'index*

- Que sera t il affiché à l’écran ?
orange, violet, marron

- Quel est le type de la variable $color ? string
- Comment récupérer le nom/type du fruit en plus de sa couleur ? Écrire le code en nommant convenablement la nouvelle variable
foreach ($fruits as $fruit => $color)

- Modifier la condition dans la boucle pour ne pas afficher les fruits vert ni les noix
foreach ($fruits as $fruit => $color) {
    if ($color != "vert" && $fruit != "noix") {
        echo $fruit;
    }
}
