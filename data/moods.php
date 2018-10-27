<?php

$user = [
    "id" => 5,
    "firstName" => "jerome",
    "lastName" => "gangneux",
    "age" => 33,
    "sex" => "undefined",
    "eyeColor" => "red"
];

$moods = [
    [
        "id" => 1230,
        "type" => "happy",
        "date" => [
            "day" => "Monday",
            "number" => 3,
            "month" => "August",
            "year" => 2018
        ],
        "comment" => "Une super journée",
        "user" => $user
    ], [
        "id" => 1231,
        "type" => "meh",
        "date" => [
            "day" => "Sunday",
            "number" => 2,
            "month" => "August",
            "year" => 2018
        ],
        "comment" => "Je sens que je vais avoir mes règles",
        "user" => $user
    ], [
        "id" => 1232,
        "type" => "sad",
        "date" => [
            "day" => "Saturday",
            "number" => 1,
            "month" => "August",
            "year" => 2018
        ],
        "comment" => "Beurk",
        "user" => $user
    ], [
        "id" => 1233,
        "type" => "happy",
        "date" => [
            "day" => "Monday",
            "number" => 3,
            "month" => "August",
            "year" => 2018
        ],
        "comment" => null,
        "user" => $user
    ], [
        "id" => 1234,
        "type" => "meh",
        "date" => [
            "day" => "Sunday",
            "number" => 2,
            "month" => "August",
            "year" => 2018
        ],
        "comment" => null,
        "user" => $user
    ], [
        "id" => 1235,
        "type" => "sad",
        "date" => [
            "day" => "Saturday",
            "number" => 1,
            "month" => "August",
            "year" => 2018
        ],
        "comment" => "Il pleut depuis 3 jours",
        "user" => $user
    ], [
        "id" => 1236,
        "type" => "happy",
        "date" => [
            "day" => "Monday",
            "number" => 3,
            "month" => "August",
            "year" => 2018
        ],
        "comment" => "Enfin le soleil est de retour",
        "user" => $user
    ], [
        "id" => 1237,
        "type" => "meh",
        "date" => [
            "day" => "Sunday",
            "number" => 2,
            "month" => "August",
            "year" => 2018
        ],
        "comment" => "MOYEN",
        "user" => $user
    ], [
        "id" => 1238,
        "type" => "happy",
        "date" => [
            "day" => "Saturday",
            "number" => 1,
            "month" => "August",
            "year" => 2018
        ],
        "comment" => null,
        "user" => $user
    ]
];
